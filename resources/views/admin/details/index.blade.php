@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3">Manage Details for:</h1>
            <h2 class="h5 text-muted">{{ $service->name }}</h2>
        </div>
        <div>
            {{-- PERBAIKI NAMA ROUTE DI SINI --}}
            <a href="{{ route('admin.services.details.create', $service->id) }}" class="btn btn-primary">
                + Add New Detail
            </a>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back to Services</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($service->details as $detail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ Str::limit($detail->title, 60) }}</td>
                            <td>{{ Str::limit($detail->description, 50) }}</td>
                            <td>
                                {{-- PERBAIKI NAMA ROUTE DI SINI JUGA --}}
                                <a href="{{ route('admin.details.edit', $detail->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.details.destroy', $detail->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No details found for this service.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection