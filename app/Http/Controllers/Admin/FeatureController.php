<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::orderBy('position', 'asc')->get();
        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
        ]);

        // --- LOGIKA BARU UNTUK POSISI OTOMATIS ---
        // 1. Cari posisi tertinggi yang ada di database
        $lastPosition = Feature::max('position');
        // 2. Tambahkan data baru dengan posisi + 1
        $data = $request->all();
        $data['position'] = $lastPosition + 1;
        // -----------------------------------------

        Feature::create($data);

        return redirect()->route('admin.features.index')
                         ->with('success', 'Feature created successfully.');
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
        ]);

        // Saat update, kita tidak perlu mengubah posisi
        $feature->update($request->all());

        return redirect()->route('admin.features.index')
                         ->with('success', 'Feature updated successfully.');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')
                         ->with('success', 'Feature deleted successfully.');
    }
    
    public function reorder(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer',
        ]);

        foreach ($request->ids as $index => $id) {
            Feature::where('id', $id)->update(['position' => $index + 1]);
        }

        return response()->json(['status' => 'success']);
    }
}