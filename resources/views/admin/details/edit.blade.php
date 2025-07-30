@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Edit Detail</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.details.update', $detail->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Detail Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $detail->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Content</label>
                    <textarea class="form-control" id="editor" name="description" rows="10">{{ $detail->description }}</textarea>
                </div>

                {{-- ... (kode untuk input Note) ... --}}

                <button type="submit" class="btn btn-primary">Update Detail</button>
                <a href="{{ route('admin.services.details.index', $detail->service_id) }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
{{-- 1. Muat skrip CKEditor dari CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

{{-- 2. Inisialisasi editor pada textarea dengan ID 'editor' --}}
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush