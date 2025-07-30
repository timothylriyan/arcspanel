<!-- File: resources/views/news/index.blade.php -->
@extends('layouts.app')

@section('content')
<section id="news-page" class="py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">News & Updates</h2>
            <p>Stay updated with our latest news and information.</p>
        </div>

        <div class="row gy-4">
            @forelse ($news as $newsItem)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        @if($newsItem->image)
                            <a href="{{ route('news.show', $newsItem->slug) }}">
                                <img src="{{ asset('storage/' . $newsItem->image) }}" class="card-img-top" alt="{{ $newsItem->title }}" style="height: 200px; object-fit: cover;">
                            </a>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $newsItem->title }}</h5>
                            <p class="card-text text-muted small">{{ Str::limit(strip_tags($newsItem->body), 100) }}</p>
                            <a href="{{ route('news.show', $newsItem->slug) }}" class="btn btn-link px-0 mt-auto">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">No news articles found.</div>
                </div>
            @endforelse
        </div>

        {{-- Baris ini akan menampilkan tombol paginasi secara otomatis --}}
        <div class="d-flex justify-content-center mt-5">
            {{ $news->links() }}
        </div>
    </div>
</section>
@endsection