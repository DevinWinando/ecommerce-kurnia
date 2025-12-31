<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Get all active warehouses with location data
     */
    public function index()
    {
        $warehouses = Warehouse::where('is_active', true)
            ->select('id', 'pos_id', 'name', 'mobile', 'email', 'city', 'country', 'zip', 'latitude', 'longitude', 'bisname')
            ->get();

        return response()->json($warehouses);
    }

    /**
     * Get a specific warehouse by ID
     */
    public function show($id)
    {
        $warehouse = Warehouse::where('is_active', true)
            ->select('id', 'pos_id', 'name', 'mobile', 'email', 'city', 'country', 'zip', 'latitude', 'longitude', 'bisname')
            ->findOrFail($id);

        return response()->json($warehouse);
    }

    /**
     * Get nearest warehouse to user's location
     */
    public function nearest(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $userLat = $request->latitude;
        $userLng = $request->longitude;

        // Using Haversine formula to calculate distance
        $warehouses = Warehouse::where('is_active', true)
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->selectRaw("
                id, pos_id, name, mobile, email, city, country, zip, latitude, longitude, bisname,
                (6371 * acos(cos(radians(?)) * cos(radians(latitude)) * cos(radians(longitude) - radians(?)) + sin(radians(?)) * sin(radians(latitude)))) AS distance
            ", [$userLat, $userLng, $userLat])
            ->orderBy('distance')
            ->get();

        return response()->json($warehouses);
    }
}
