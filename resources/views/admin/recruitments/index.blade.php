@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Manage Recruitments</h1>
        <a href="{{ route('admin.recruitments.create') }}" class="btn btn-primary">
            + Add New Recruitment
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
                        <th>Position</th>
                        <th>Type</th>
                        <th>Status</th> {{-- Tambahkan header Status --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recruitments as $recruitment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $recruitment->position }}</td>
                            <td>{{ $recruitment->type }}</td>
                            <td>
                                {{-- Pindahkan logika status ke sini --}}
                                @if($recruitment->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.recruitments.edit', $recruitment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.recruitments.destroy', $recruitment->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No recruitments found.</td> {{-- Ubah colspan menjadi 5 --}}
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection