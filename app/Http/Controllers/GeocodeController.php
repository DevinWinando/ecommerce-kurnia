<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeocodeController extends Controller
{
    /**
     * Search location using Nominatim API (OpenStreetMap)
     * This acts as a proxy to avoid CORS issues
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        try {
            $query = $request->input('q');
            
            if (empty($query)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Query parameter is required',
                    'data' => []
                ], 400);
            }

            $limit = $request->input('limit', 5);
            
            // Use Laravel HTTP client to call Nominatim API
            $response = Http::withHeaders([
                'User-Agent' => 'Ecommerce-Kurnia/1.0'
            ])->get('https://nominatim.openstreetmap.org/search', [
                'q' => $query,
                'format' => 'json',
                'limit' => $limit,
                'addressdetails' => 1,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                
                // Transform data to match frontend expectations
                $transformedData = array_map(function ($item) {
                    return [
                        'lat' => $item['lat'],
                        'lon' => $item['lon'],
                        'display_name' => $item['display_name'],
                        'name' => $item['name'] ?? $item['display_name'],
                    ];
                }, $data);

                return response()->json([
                    'success' => true,
                    'data' => $transformedData
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to fetch geocoding data',
                    'data' => []
                ], $response->status());
            }

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }
}

