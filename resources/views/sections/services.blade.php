<!-- File: resources/views/sections/services.blade.php -->

@if($services->isNotEmpty())
<section id="services" class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold">Services</h2>
        <p class="text-muted">Providing solutions to drive your business success.</p>

        {{-- Slider untuk layanan --}}
        <div class="swiper services-slider mt-5">
            <div class="swiper-wrapper pb-5">

                {{-- Loop untuk menampilkan setiap layanan dari database --}}
                @foreach ($services as $service)
                    <div class="swiper-slide">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="feature-icon {{ $service->color ?? 'bg-primary' }} text-white mb-3">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <h5 class="card-title fw-bold">{{ $service->name }}</h5>
                                <p class="card-text text-muted small">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- Paginasi (titik-titik di bawah) --}}
            <div class="swiper-pagination position-relative mt-4"></div>
            
            {{-- Tombol Navigasi Panah (opsional, bisa dihapus jika tidak mau) --}}
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        {{-- Tombol untuk ke halaman detail layanan --}}
        <a href="{{ route('services') }}" class="btn btn-primary btn-lg px-4 py-2 mt-4">Explore more here now</a>
    </div>
</section>
@endif