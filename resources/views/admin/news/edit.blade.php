@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Edit News</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">News Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Content</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required>{{ $news->body }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">New Main Image (Optional)</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                @if($news->image)
                    <div class="mb-3">
                        <label class="form-label">Current Image</label>
                        <div>
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" width="200">
                        </div>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="is_published" class="form-label">Status</label>
                    <select class="form-select" id="is_published" name="is_published">
                        <option value="1" @if(isset($news) && $news->is_published) selected @endif>Published</option>
                        <option value="0" @if(isset($news) && !$news->is_published) selected @endif>Draft</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update News</button>
                <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection