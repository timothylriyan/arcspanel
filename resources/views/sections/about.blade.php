<!-- File: resources/views/sections/about.blade.php -->

@if($aboutContent)
<section id="about" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">About Us</h2>
            <p class="text-muted">{{ $aboutContent->subtitle ?? 'A closer look at who we are and what we do.' }}</p>
        </div>

        <div class="row align-items-center">
            {{-- Kolom untuk Gambar Logo --}}
            {{-- Tambahkan class 'text-center' untuk menengahkan logo --}}
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                @if($aboutContent->image)
                    <img src="{{ asset('storage/' . $aboutContent->image) }}" class="img-fluid rounded" alt="About ARCS" style="max-width: 350px;">
                @else
                    <img src="{{ asset('images/ARCS_Logo.png') }}" class="img-fluid" alt="About ARCS" style="max-width: 350px;">
                @endif
            </div>
            
            {{-- Kolom untuk Teks --}}
            <div class="col-lg-6">
                <h3 class="fw-bold">PT Anugrah Rekatama Cipta Solusi (ARCS)</h3>
                <p>{{ $aboutContent->main_description ?? '' }}</p>
                
                {{-- Tampilkan sub-section dari database --}}
                @if($aboutContent->section1_title)
                    <h6 class="mt-4 fw-bold">{{ $aboutContent->section1_title }}</h6>
                    <p class="text-muted small">{{ $aboutContent->section1_content }}</p>
                @endif

                @if($aboutContent->section2_title)
                    <h6 class="mt-3 fw-bold">{{ $aboutContent->section2_title }}</h6>
                    <p class="text-muted small">{{ $aboutContent->section2_content }}</p>
                @endif

                @if($aboutContent->section3_title)
                    <h6 class="mt-3 fw-bold">{{ $aboutContent->section3_title }}</h6>
                    <p class="text-muted small">{{ $aboutContent->section3_content }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endif