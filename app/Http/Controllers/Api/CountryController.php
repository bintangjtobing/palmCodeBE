<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    // Mengambil semua data country
    public function index()
    {
        $countries = Country::all();
        return response()->json([
            'status' => 200,
            'data' => $countries,
            'message' => 'Successfully retrieved countries.'
        ]);
    }

    // Menyimpan data country baru
    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string',
            'icon_name' => 'required|string',
        ]);

        $country = Country::create([
            'country_name' => $request->country_name,
            'icon_name' => $request->icon_name,
        ]);

        return response()->json([
            'status' => 200,
            'data' => $country,
            'message' => 'Country created successfully.'
        ], 201);
    }

    // Menampilkan detail country
    public function show($id)
    {
        $country = Country::findOrFail($id);
        return response()->json([
            'status' => 200,
            'data' => $country,
            'message' => 'Country details retrieved successfully.'
        ]);
    }

    // Mengupdate data country
    public function update(Request $request, $id)
    {
        $request->validate([
            'country_name' => 'required|string',
            'icon_name' => 'required|string',
        ]);

        $country = Country::findOrFail($id);
        $country->update([
            'country_name' => $request->country_name,
            'icon_name' => $request->icon_name,
        ]);

        return response()->json([
            'status' => 200,
            'data' => $country,
            'message' => 'Country updated successfully.'
        ]);
    }

    // Menghapus data country
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Country deleted successfully.'
        ], 204);
    }
    public function filter(Request $request)
{
    // Ambil parameter yang dikirim dari request
    $countryName = $request->input('country_name');
    $iconName = $request->input('icon_name');

    // Query untuk mengambil data countries
    $query = Country::query();

    // Filter data berdasarkan parameter yang diberikan
    if ($countryName) {
        $query->where('country_name', 'LIKE', "%$countryName%");
    }

    if ($iconName) {
        $query->where('icon_name', $iconName);
    }

    // Ambil data hasil filter
    $countries = $query->get();
    // Check jika tidak ada data yang ditemukan
    if ($countries->isEmpty()) {
        return response()->json([
            'status' => 404,
            'message' => 'No countries found with the given criteria.'
        ], 404);
    }
    // Return response JSON
    return response()->json([
        'status' => 200,
        'data' => $countries,
        'message' => 'Countries filtered successfully.'
    ]);
}

}