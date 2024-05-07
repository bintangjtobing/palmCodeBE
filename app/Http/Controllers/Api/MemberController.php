<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    /**
     * Display a listing of the members.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $members = Member::all();

        return response()->json([
            'status' => '200',
            'message' => 'Members retrieved successfully',
            'data' => $members,
        ]);
    }

    /**
     * Store a newly created member in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'country' => 'required|string',
            'email' => 'required|email|unique:members,email',
            'whatsapp_number' => 'required|string',
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
            'country' => $request->country,
            'email' => $request->email,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Member created successfully',
            'data' => $member,
        ], 201);
    }

    /**
     * Display the specified member.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json([
                'status' => '401',
                'message' => 'Member not found',
            ], 404);
        }

        return response()->json([
            'status' => '200',
            'message' => 'Member retrieved successfully',
            'data' => $member,
        ]);
    }

    /**
     * Update the specified member in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json([
                'status' => '401',
                'message' => 'Member not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'country' => 'required|string',
            'email' => 'required|email|unique:members,email,' . $id,
            'whatsapp_number' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '401',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $member->update([
            'name' => $request->name,
            'country' => $request->country,
            'email' => $request->email,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Member updated successfully',
            'data' => $member,
        ]);
    }

    /**
     * Remove the specified member from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json([
                'status' => '401',
                'message' => 'Member not found',
            ], 404);
        }

        $member->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Member deleted successfully',
        ]);
    }
}