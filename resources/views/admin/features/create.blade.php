@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Add New Feature</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.features.store') }}" method="POST">
                @csrf
                {{-- ... input title dan description ... --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Feature Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                
                {{-- Dropdown Ikon --}}
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon</label>
                    <select class="form-select" id="icon" name="icon">
                        <option value="">-- Pilih Ikon --</option>
                        <option value="fas fa-eye">Eye</option>
                        <option value="fas fa-cogs">Cogs</option>
                        <option value="fas fa-lightbulb">Solution</option>
                        <option value="fas fa-map-marked-alt">Approach</option>
                        <option value="fas fa-globe-americas">Network</option>
                    </select>
                </div>

                {{-- Dropdown Warna BARU --}}
                <div class="mb-3">
                    <label for="color" class="form-label">Icon Background Color</label>
                    <select class="form-select" id="color" name="color">
                        <option value="bg-primary">Biru</option>
                        <option value="bg-success">Hijau</option>
                        <option value="bg-info">Biru Muda</option>
                        <option value="bg-danger">Merah</option>
                        <option value="bg-warning">Kuning</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save Feature</button>
                <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection