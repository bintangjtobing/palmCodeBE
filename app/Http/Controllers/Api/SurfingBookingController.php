<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SurfingBooking;
use Illuminate\Support\Facades\Validator;

class SurfingBookingController extends Controller
{
    /**
     * Display a listing of the surfing bookings.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // Ambil semua query string untuk filter
        $filters = $request->all();

        // Query untuk mengambil data surfing bookings
        $query = SurfingBooking::query();

        // Filter data berdasarkan query string (jika ada)
        foreach ($filters as $key => $value) {
            if ($value) {
                $query->where($key, 'LIKE', "%$value%");
            }
        }

        // Ambil data hasil filter
        $surfingBookings = $query->get();

        return response()->json([
            'status' => '200',
            'message' => 'Surfing bookings retrieved successfully',
            'data' => $surfingBookings,
        ]);
    }

    /**
     * Store a newly created surfing booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'member_id' => 'required|exists:members,id',
            'surfing_experience' => 'required|integer|min:1|max:10',
            'visit_date' => 'required|date',
            'desired_board' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '401',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $surfingBooking = SurfingBooking::create([
            'member_id' => $request->member_id,
            'surfing_experience' => $request->surfing_experience,
            'visit_date' => $request->visit_date,
            'desired_board' => $request->desired_board,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Surfing booking created successfully',
            'data' => $surfingBooking,
        ], 201);
    }

    /**
     * Display the specified surfing booking.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $surfingBooking = SurfingBooking::find($id);

        if (!$surfingBooking) {
            return response()->json([
                'status' => '401',
                'message' => 'Surfing booking not found',
            ], 404);
        }

        return response()->json([
            'status' => '200',
            'message' => 'Surfing booking retrieved successfully',
            'data' => $surfingBooking,
        ]);
    }

    /**
     * Update the specified surfing booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $surfingBooking = SurfingBooking::find($id);

        if (!$surfingBooking) {
            return response()->json([
                'status' => '401',
                'message' => 'Surfing booking not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'member_id' => 'required|exists:members,id',
            'surfing_experience' => 'required|integer|min:1|max:10',
            'visit_date' => 'required|date',
            'desired_board' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '401',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $surfingBooking->update([
            'member_id' => $request->member_id,
            'surfing_experience' => $request->surfing_experience,
            'visit_date' => $request->visit_date,
            'desired_board' => $request->desired_board,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Surfing booking updated successfully',
            'data' => $surfingBooking,
        ]);
    }

    /**
     * Remove the specified surfing booking from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $surfingBooking = SurfingBooking::find($id);

        if (!$surfingBooking) {
            return response()->json([
                'status' => '401',
                'message' => 'Surfing booking not found',
            ], 404);
        }

        $surfingBooking->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Surfing booking deleted successfully',
        ]);
    }
}