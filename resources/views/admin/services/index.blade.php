@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Manage Services</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
            + Add New Service
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($service->icon)
                                    <i class="{{ $service->icon }}" style="font-size: 1.5rem;"></i>
                                @endif
                            </td>
                            <td>{{ $service->name }}</td>
                            <td>
                                {{-- PERBAIKI NAMA ROUTE DI SINI --}}
                                <a href="{{ route('admin.services.details.index', $service->id) }}" class="btn btn-sm btn-info">Details</a>
                                
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-warning ms-1">Edit</a>
                                
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No services found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection