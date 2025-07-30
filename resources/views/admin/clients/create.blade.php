@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Add New Client</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Client Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" required>
                </div>
                <button type="submit" class="btn btn-primary">Save Client</button>
                <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection