<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function index(Service $service)
    {
        return view('admin.details.index', compact('service'));
    }

    public function create(Service $service)
    {
        return view('admin.details.create', compact('service'));
    }

    public function store(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'note' => 'nullable|string|max:255',
        ]);

        $service->details()->create($request->all());

        // PERBAIKI NAMA ROUTE DI SINI
        return redirect()->route('admin.services.details.index', $service->id)
                         ->with('success', 'Service detail created successfully.');
    }

    public function edit(ServiceDetail $detail)
    {
        return view('admin.details.edit', compact('detail'));
    }

    public function update(Request $request, ServiceDetail $detail)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'note' => 'nullable|string|max:255',
        ]);

        $detail->update($request->all());

        // PERBAIKI NAMA ROUTE DI SINI
        return redirect()->route('admin.services.details.index', $detail->service_id)
                         ->with('success', 'Service detail updated successfully.');
    }

    public function destroy(ServiceDetail $detail)
    {
        $serviceId = $detail->service_id;
        $detail->delete();

        // PERBAIKI NAMA ROUTE DI SINI
        return redirect()->route('admin.services.details.index', $serviceId)
                         ->with('success', 'Service detail deleted successfully.');
    }
}