<!-- File: resources/views/news/show.blade.php -->
@extends('layouts.app')

@section('content')
<section id="news-detail-page" class="py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="fw-bold mb-3">{{ $newsItem->title }}</h1>
                <p class="text-muted">Published on {{ $newsItem->created_at->format('d F Y') }}</p>
                
                @if($newsItem->image)
                    <div class="text-center my-4">
                        {{-- Gunakan class w-75 untuk membuat lebar gambar 75% dari kolom --}}
                        <img src="{{ asset('storage/' . $newsItem->image) }}" 
                             class="img-fluid rounded shadow-sm w-50" 
                             alt="{{ $newsItem->title }}">
                    </div>
                @endif

                <div class="news-content">
                    {!! $newsItem->body !!}
                </div>

                <a href="{{ route('news.index') }}" class="btn btn-primary mt-5">&larr; Back to All News</a>
            </div>
        </div>
    </div>
</section>
@endsection