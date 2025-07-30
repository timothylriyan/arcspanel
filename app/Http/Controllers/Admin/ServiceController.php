<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Menampilkan daftar semua layanan.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Menampilkan form untuk membuat layanan baru.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Menyimpan layanan baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
        ]);

        Service::create($request->all());

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service created successfully.');
    }

    /**
     * Menampilkan form untuk mengedit layanan.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Memperbarui data layanan di database.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
        ]);

        $service->update($request->all());

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service updated successfully.');
    }

    /**
     * Menghapus data layanan dari database.
     */
    public function destroy(Service $service)
    {
         $service->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.services.index')
                         ->with('success', 'Service deleted successfully.');
    }
}