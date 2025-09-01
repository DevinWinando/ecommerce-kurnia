<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();

        return response()->json([
            'data' => $banners,
            'message' => 'Banners retrieved successfully',
            'status' => 'success',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $targetPath = storage_path('app/public/banners/' . $filename);

        // Buat folder kalau belum ada
        if (!file_exists(dirname($targetPath))) {
            mkdir(dirname($targetPath), 0755, true);
        }

        $image->move(dirname($targetPath), $filename);

        $imageUrl = asset('storage/banners/' . $filename);

        $banner = Banner::create([
            'image' => $imageUrl,
        ]);

        return response()->json([
            'data' => $banner,
            'message' => 'Banner created successfully',
            'status' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return response()->json([
            'message' => 'Banner deleted successfully',
            'status' => 'success',
        ]);
    }
}
