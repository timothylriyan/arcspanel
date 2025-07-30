<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function edit()
    {
        // Ambil data pertama dari tabel, atau buat objek kosong jika belum ada
        $about = AboutContent::first() ?? new AboutContent();
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $about = AboutContent::first() ?? new AboutContent();

        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('about', 'public');
        }

        // Update atau buat data baru
        $about->fill($data)->save();

        return redirect()->back()->with('success', 'About Us page updated successfully.');
    }
}