<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\BookingNotification;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\SurfingBooking;
use App\Models\IDVerification;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua pengajuan formulir pemesanan
        $query = Member::with(['surfingBooking', 'idVerification', 'country']);

        // Filter data berdasarkan parameter yang diberikan
        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        if ($request->has('email')) {
            $query->where('email', $request->email);
        }

        if ($request->has('country_id')) {
            $query->where('country_id', $request->country_id);
        }

        $formSubmissions = $query->get();

        return response()->json([
            'status' => '200',
            'message' => 'Filtered form submissions retrieved successfully',
            'data' => $formSubmissions,
        ], 200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'country_id' => 'required|integer',
            'email' => 'required|email|unique:members,email',
            'whatsapp_number' => 'required|string',

            'surfing_experience' => 'required|integer|min:1|max:10',
            'visit_date' => 'required|date',
            'desired_board' => 'required|string',

            'verification_type' => 'required|string|in:KTP,ID,passport',
            'verification_photo' => 'nullable',
        ], [
            'name.required' => 'Name is required.',
            'name.string' => 'Name must be a string.',

            'country_id.required' => 'Country is required.',
            'country_id.string' => 'Country must be an integer.',

            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email has already been taken.',

            'whatsapp_number.required' => 'WhatsApp number is required.',
            'whatsapp_number.string' => 'WhatsApp number must be a string.',

            'surfing_experience.required' => 'Surfing experience is required.',
            'surfing_experience.integer' => 'Surfing experience must be an integer.',
            'surfing_experience.min' => 'Surfing experience must be at least 1.',
            'surfing_experience.max' => 'Surfing experience must not be greater than 10.',

            'visit_date.required' => 'Visit date is required.',
            'visit_date.date' => 'Visit date must be a valid date.',

            'desired_board.required' => 'Desired board is required.',
            'desired_board.string' => 'Desired board must be a string.',

            'verification_type.required' => 'Verification type is required.',
            'verification_type.string' => 'Verification type must be a string.',
            'verification_type.in' => 'Verification type must be one of: KTP, ID, or passport.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '401',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $member = Member::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'email' => $request->email,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        $surfingBooking = SurfingBooking::create([
            'member_id' => $member->id,
            'surfing_experience' => $request->surfing_experience,
            'visit_date' => $request->visit_date,
            'desired_board' => $request->desired_board,
        ]);

        $idVerification = null;

        if ($request->hasFile('verification_photo') && $request->file('verification_photo')->isValid()) {
            try {
                $cloudinaryResponse = Cloudinary::upload($request->file('verification_photo')->getRealPath());
                $verificationPhoto = $cloudinaryResponse->getSecurePath();
            } catch (\Exception $e) {
                return response()->json([
                    'status' => '401',
                    'message' => 'Failed to upload verification photo',
                    'errors' => [$e->getMessage()],
                ], 500);
            }
        } else {
            // Jika tidak ada file yang diunggah, gunakan URL default
            $verificationPhoto = 'https://res.cloudinary.com/boxity-id/image/upload/v1715074096/stock-vector-ktp-indonesia-id-card-1628461459_zfwmcg.jpg';
        }

        $idVerification = IDVerification::create([
            'member_id' => $member->id,
            'verification_type' => $request->verification_type,
            'verification_photo' => $verificationPhoto,
        ]);

        // Kirim email pemberitahuan
        try {
            Mail::to('info@palmcode.io')->send(new BookingNotification(
                $request->name,
                $request->country_id,
                $request->email,
                $request->whatsapp_number,
                $request->surfing_experience,
                $request->visit_date,
                $request->desired_board
            ));
        } catch (\Exception $e) {
            // Tangani kesalahan jika gagal mengirim email
            return response()->json([
                'status' => '401',
                'message' => 'Failed to send email notification',
                'errors' => [$e->getMessage()],
            ], 500);
        }

        return response()->json([
            'status' => '200',
            'message' => 'Data saved successfully',
            'data' => [
                'member' => $member,
                'surfing_booking' => $surfingBooking,
                'id_verification' => $idVerification,
            ],
        ], 201);
    }
    public function show($id)
    {
        // Temukan data berdasarkan ID
        $formData = Member::with(['surfingBooking', 'idVerification','country'])->find($id);

        if (!$formData) {
            return response()->json([
                'status' => '401',
                'message' => 'Form submission not found',
            ], 404);
        }

        return response()->json([
            'status' => '200',
            'message' => 'Form submission retrieved successfully',
            'data' => $formData,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'country_id' => 'required|integer',
            'email' => 'required|email|unique:members,email,' . $id,
            'whatsapp_number' => 'required|string',

            'surfing_experience' => 'required|integer|min:1|max:10',
            'visit_date' => 'required|date',
            'desired_board' => 'required|string',

            'verification_type' => 'required|string|in:KTP,ID,passport',
            'verification_photo' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '401',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Temukan data berdasarkan ID
        $formData = Member::find($id);

        if (!$formData) {
            return response()->json([
                'status' => '401',
                'message' => 'Form submission not found',
            ], 404);
        }

        // Perbarui data Member
        $formData->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'email' => $request->email,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        // Perbarui data SurfingBooking jika ada
        if ($formData->surfingBooking) {
            $formData->surfingBooking->update([
                'surfing_experience' => $request->surfing_experience,
                'visit_date' => $request->visit_date,
                'desired_board' => $request->desired_board,
            ]);
        }

        // Perbarui data IDVerification jika ada
        if ($formData->idVerification) {
            $verificationPhoto = $formData->idVerification->verification_photo;

            if ($request->hasFile('verification_photo') && $request->file('verification_photo')->isValid()) {
                try {
                    $cloudinaryResponse = Cloudinary::upload($request->file('verification_photo')->getRealPath());
                    $verificationPhoto = $cloudinaryResponse->getSecurePath();
                } catch (\Exception $e) {
                    return response()->json([
                        'status' => '401',
                        'message' => 'Failed to upload verification photo',
                        'errors' => [$e->getMessage()],
                    ], 500);
                }
            }

            $formData->idVerification->update([
                'verification_type' => $request->verification_type,
                'verification_photo' => $verificationPhoto,
            ]);
        }

        return response()->json([
            'status' => '200',
            'message' => 'Data updated successfully',
            'data' => $formData,
        ], 200);
    }

    public function destroy($id)
    {
        // Temukan data berdasarkan ID
        $formData = Member::find($id);

        if (!$formData) {
            return response()->json([
                'status' => '401',
                'message' => 'Form submission not found',
            ], 404);
        }

        // Hapus IDVerification terlebih dahulu
        if ($formData->idVerification) {
            $formData->idVerification->delete();
        }

        // Hapus SurfingBooking jika ada
        if ($formData->surfingBooking) {
            $formData->surfingBooking->delete();
        }

        // Hapus data Member
        $formData->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Data deleted successfully',
        ], 200);
    }
}