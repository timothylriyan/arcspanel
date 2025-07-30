@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Manage Features</h1>
        <a href="{{ route('admin.features.create') }}" class="btn btn-primary">
            + Add New Feature
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <p class="text-muted">Drag and drop the <i class="fas fa-grip-vertical"></i> icon to reorder the features.</p>
            <table class="table" id="sortable-table" data-reorder-url="{{ route('admin.features.reorder') }}">
                <thead>
                    <tr>
                        <th style="width: 50px;">Order</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($features as $feature)
                        <tr data-id="{{ $feature->id }}">
                            <td>
                                <i class="fas fa-grip-vertical" style="cursor: grab;"></i>
                            </td>
                            <td>
                                @if($feature->icon)
                                    <i class="{{ $feature->icon }}" style="font-size: 1.5rem;"></i>
                                @endif
                            </td>
                            <td>{{ $feature->title }}</td>
                            <td>
                                <a href="{{ route('admin.features.edit', $feature->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.features.destroy', $feature->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No features found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection