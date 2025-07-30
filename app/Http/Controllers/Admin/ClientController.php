<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Menampilkan daftar semua klien.
     */
    public function index()
    {
        $clients = Client::latest()->get();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Menampilkan form untuk membuat klien baru.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Menyimpan klien baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $logoPath = $request->file('logo')->store('logos', 'public');

        Client::create([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);

        return redirect()->route('admin.clients.index')
                         ->with('success', 'Client created successfully.');
    }

    /**
     * Menampilkan form untuk mengedit klien.
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Memperbarui data klien di database.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $logoPath = $client->logo;

        if ($request->hasFile('logo')) {
            if ($client->logo) {
                Storage::disk('public')->delete($client->logo);
            }
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        $client->update([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);

        return redirect()->route('admin.clients.index')
                         ->with('success', 'Client updated successfully.');
    }

    /**
     * Menghapus data klien dari database.
     */
    public function destroy(Client $client)
    {
        if ($client->logo) {
            Storage::disk('public')->delete($client->logo);
        }

        $client->delete();

        return redirect()->route('admin.clients.index')
                         ->with('success', 'Client deleted successfully.');
    }
}