<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index()
    {
        $recruitments = Recruitment::latest()->get();
        return view('admin.recruitments.index', compact('recruitments'));
    }

    public function create()
    {
        return view('admin.recruitments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'linkedin_url' => 'nullable|url',
            'is_active' => 'required|boolean',
        ]);

        Recruitment::create($request->all());

        return redirect()->route('admin.recruitments.index')
                         ->with('success', 'Recruitment created successfully.');
    }

    public function edit(Recruitment $recruitment)
    {
        return view('admin.recruitments.edit', compact('recruitment'));
    }

    public function update(Request $request, Recruitment $recruitment)
    {
        $request->validate([
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'linkedin_url' => 'nullable|url',
            'is_active' => 'required|boolean',
        ]);

        $recruitment->update($request->all());

        return redirect()->route('admin.recruitments.index')
                         ->with('success', 'Recruitment updated successfully.');
    }

    public function destroy(Recruitment $recruitment)
    {
        $recruitment->delete();

        return redirect()->route('admin.recruitments.index')
                         ->with('success', 'Recruitment deleted successfully.');
    }
}