@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Edit Recruitment</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.recruitments.update', $recruitment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="position" class="form-label">Position Title</label>
                    <input type="text" class="form-control" id="position" name="position" value="{{ $recruitment->position }}" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type (e.g., Full-time | Remote/Bogor)</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $recruitment->type }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5">{{ $recruitment->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="linkedin_url" class="form-label">LinkedIn URL (Optional)</label>
                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ $recruitment->linkedin_url }}" placeholder="https://www.linkedin.com/jobs/view/...">
                </div>
                <div class="mb-3">
                    <label for="is_active" class="form-label">Status</label>
                    <select class="form-select" id="is_active" name="is_active">
                        <option value="1" @if(isset($recruitment) && $recruitment->is_active) selected @endif>Active</option>
                        <option value="0" @if(isset($recruitment) && !$recruitment->is_active) selected @endif>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Recruitment</button>
                <a href="{{ route('admin.recruitments.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection