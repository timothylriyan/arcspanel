@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Edit Feature</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.features.update', $feature->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- ... input title dan description ... --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Feature Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $feature->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $feature->description }}</textarea>
                </div>
                
                {{-- Dropdown Ikon --}}
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon</label>
                    <select class="form-select" id="icon" name="icon">
                        <option value="">-- Pilih Ikon --</option>
                        <option value="fas fa-eye" @if($feature->icon == 'fas fa-eye') selected @endif>Eye</option>
                        <option value="fas fa-cogs" @if($feature->icon == 'fas fa-cogs') selected @endif>Cogs</option>
                        <option value="fas fa-lightbulb" @if($feature->icon == 'fas fa-lightbulb') selected @endif>Solution</option>
                        <option value="fas fa-map-marked-alt" @if($feature->icon == 'fas fa-map-marked-alt') selected @endif>Approach</option>
                        <option value="fas fa-globe-americas" @if($feature->icon == 'fas fa-globe-americas') selected @endif>Network</option>
                    </select>
                </div>

                {{-- Dropdown Warna BARU --}}
                <div class="mb-3">
                    <label for="color" class="form-label">Icon Background Color</label>
                    <select class="form-select" id="color" name="color">
                        <option value="bg-primary" @if($feature->color == 'bg-primary') selected @endif>Biru</option>
                        <option value="bg-success" @if($feature->color == 'bg-success') selected @endif>Hijau</option>
                        <option value="bg-info" @if($feature->color == 'bg-info') selected @endif>Biru Muda</option>
                        <option value="bg-danger" @if($feature->color == 'bg-danger') selected @endif>Merah</option>
                        <option value="bg-warning" @if($feature->color == 'bg-warning') selected @endif>Kuning</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Feature</button>
                <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection