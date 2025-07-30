@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Edit About Us Page</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $about->subtitle ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="main_description" class="form-label">Main Description</label>
                    <textarea class="form-control" id="main_description" name="main_description" rows="5">{{ $about->main_description ?? '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if($about->image ?? null)
                        <div class="mt-2"><img src="{{ asset('storage/' . $about->image) }}" alt="About Image" width="150"></div>
                    @endif
                </div>
                <hr>

            
                <h5 class="mt-4">Sub Sections</h5>

                
                <div class="mb-3">
                    <label for="section1_title" class="form-label">Section 1 Title (e.g., Internal Audit)</label>
                    <input type="text" class="form-control" id="section1_title" name="section1_title" value="{{ $about->section1_title ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="section1_content" class="form-label">Section 1 Content</label>
                    <textarea class="form-control" id="section1_content" name="section1_content" rows="3">{{ $about->section1_content ?? '' }}</textarea>
                </div>
                <hr>

                
                <div class="mb-3">
                    <label for="section2_title" class="form-label">Section 2 Title (e.g., Risk Management)</label>
                    <input type="text" class="form-control" id="section2_title" name="section2_title" value="{{ $about->section2_title ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="section2_content" class="form-label">Section 2 Content</label>
                    <textarea class="form-control" id="section2_content" name="section2_content" rows="3">{{ $about->section2_content ?? '' }}</textarea>
                </div>
                <hr>

                
                <div class="mb-3">
                    <label for="section3_title" class="form-label">Section 3 Title (e.g., Technology Risk Management)</label>
                    <input type="text" class="form-control" id="section3_title" name="section3_title" value="{{ $about->section3_title ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="section3_content" class="form-label">Section 3 Content</label>
                    <textarea class="form-control" id="section3_content" name="section3_content" rows="3">{{ $about->section3_content ?? '' }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
@endsection
