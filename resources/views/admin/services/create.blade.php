@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Add New Service</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.services.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                {{-- Ganti input field 'icon' yang lama dengan ini --}}
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon</label>
                    {{-- ID 'icon' ini akan ditargetkan oleh JavaScript Select2 --}}
                    <select class="form-select" id="icon" name="icon">
                        <option value="">-- Select Icon --</option>
                        
                        {{-- Daftar Ikon (Contoh) --}}
                        {{-- Teks di dalam option ini akan ditampilkan oleh JavaScript --}}
                        <option value="bi bi-briefcase-fill">Briefcase</option>
                        <option value="bi bi-bar-chart-fill">Bar Chart</option>
                        <option value="bi bi-card-checklist">Checklist</option>
                        <option value="bi bi-cash-coin">Cash</option>
                        <option value="bi bi-shield-check">Shield</option>
                        <option value="bi bi-lightbulb-fill">Lightbulb</option>
                        <option value="bi bi-shield-check">Shield</option>
                        <option value="bi bi-display">Technology</option>
                        <option value="bi bi-globe">International</option>
                        <option value="bi bi-hdd-stack">Data Center</option>
                        <option value="bi bi-easel">Training/Workshop</option>
                        <option value="bi bi-briefcase-fill">Audit</option>
                        {{-- Anda bisa menambahkan lebih banyak ikon dari https://icons.getbootstrap.com/ --}}
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save Service</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
