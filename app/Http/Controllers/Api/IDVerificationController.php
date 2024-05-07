<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IDVerification;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class IDVerificationController extends Controller
{
    /**
     * Display a listing of the ID verifications.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $idVerifications = IDVerification::all();

        return response()->json([
            'status' => '200',
            'message' => 'ID verifications retrieved successfully',
            'data' => $idVerifications,
        ]);
    }

    /**
     * Store a newly created ID verification in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'member_id' => 'required|exists:members,id',
            'verification_type' => 'required|string|in:KTP,ID,passport',
            'verification_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '401',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $verificationPhoto = null;

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

        $idVerification = IDVerification::create([
            'member_id' => $request->member_id,
            'verification_type' => $request->verification_type,
            'verification_photo' => $verificationPhoto,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'ID verification created successfully',
            'data' => $idVerification,
        ], 201);
    }

    public function show($id)
    {
        $idVerification = IDVerification::find($id);

        if (!$idVerification) {
            return response()->json([
                'status' => '401',
                'message' => 'ID verification not found',
            ], 404);
        }

        return response()->json([
            'status' => '200',
            'message' => 'ID verification retrieved successfully',
            'data' => $idVerification,
        ]);
    }

    /**
     * Update the specified ID verification in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $idVerification = IDVerification::find($id);

        if (!$idVerification) {
            return response()->json([
                'status' => '401',
                'message' => 'ID verification not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'verification_type' => 'required|string|in:KTP,ID,passport',
            'verification_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '401',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        if ($request->hasFile('verification_photo') && $request->file('verification_photo')->isValid()) {
            try {
                $cloudinaryResponse = Cloudinary::upload($request->file('verification_photo')->getRealPath());
                $verificationPhoto = $cloudinaryResponse->getSecurePath();
                $idVerification->verification_photo = $verificationPhoto;
            } catch (\Exception $e) {
                return response()->json([
                    'status' => '401',
                    'message' => 'Failed to upload verification photo',
                    'errors' => [$e->getMessage()],
                ], 500);
            }
        }

        $idVerification->verification_type = $request->verification_type;
        $idVerification->save();

        return response()->json([
            'status' => '200',
            'message' => 'ID verification updated successfully',
            'data' => $idVerification,
        ]);
    }

    /**
     * Remove the specified ID verification from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $idVerification = IDVerification::find($id);

        if (!$idVerification) {
            return response()->json([
                'status' => '401',
                'message' => 'ID verification not found',
            ], 404);
        }

        $idVerification->delete();

        return response()->json([
            'status' => '200',
            'message' => 'ID verification deleted successfully',
        ]);
    }

}
