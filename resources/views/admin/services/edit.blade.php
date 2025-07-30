@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Edit Service</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $service->description }}</textarea>
                </div>

                {{-- Ganti input field 'icon' yang lama dengan dropdown ini --}}
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon</label>
                    <select class="form-select" id="icon" name="icon">
                        <option value="">-- Select Icon --</option>
                        
                        {{-- Daftar Ikon dengan pengecekan untuk 'selected' --}}
                        <option value="bi bi-briefcase-fill" @if($service->icon == 'bi bi-briefcase-fill') selected @endif>Briefcase</option>
                        <option value="bi bi-bar-chart-fill" @if($service->icon == 'bi bi-bar-chart-fill') selected @endif>Bar Chart</option>
                        <option value="bi bi-card-checklist" @if($service->icon == 'bi bi-card-checklist') selected @endif>Checklist</option>
                        <option value="bi bi-cash-coin" @if($service->icon == 'bi bi-cash-coin') selected @endif>Cash</option>
                        <option value="bi bi-shield-check" @if($service->icon == 'bi bi-shield-check') selected @endif>Shield</option>
                        <option value="bi bi-lightbulb-fill" @if($service->icon == 'bi bi-lightbulb-fill') selected @endif>Lightbulb</option>
                        <option value="bi bi-shield-check" @if($service->icon == 'bi bi-shield-check') selected @endif>Shield</option>
                        <option value="bi bi-display" @if($service->icon == 'bi bi-display') selected @endif>Technology</option>
                        <option value="bi bi-globe" @if($service->icon == 'bi bi-globe') selected @endif>International</option>
                        <option value="bi bi-hdd-stack" @if($service->icon == 'bi bi-hdd-stack') selected @endif>Data Center</option>
                        <option value="bi bi-easel" @if($service->icon == 'bi bi-easel') selected @endif>Training/Workshop</option>
                        <option value="bi bi-briefcase-fill" @if($service->icon == 'bi bi-briefcase-fill') selected @endif>Audit</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Service</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection