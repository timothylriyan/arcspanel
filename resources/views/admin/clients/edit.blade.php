@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Edit Client</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">New Client Logo (Optional)</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                    <div class="form-text">Leave blank if you don't want to change the logo.</div>
                </div>

                @if($client->logo)
                    <div class="mb-3">
                        <label class="form-label">Current Logo</label>
                        <div>
                            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" width="150">
                        </div>
                    </div>
                @endif

                <button type="submit" class="btn btn-primary">Update Client</button>
                <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection