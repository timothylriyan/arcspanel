<!-- File: resources/views/sections/features.blade.php -->

@if($features->isNotEmpty())
<section id="features" class="py-5">
    <div class="container">
        <div class="row gy-4 justify-content-center">

            @foreach ($features as $feature)
                <div class="col-lg col-md-6">
                    <div class="card h-100 border-0 shadow-sm feature-card">
                        <div class="card-body text-center">
                            {{-- Hapus kelas 'bg-primary' dan gunakan hanya '{{ $feature->color }}' --}}
                            <div class="feature-icon {{ $feature->color }} text-white mb-3">
                                <i class="{{ $feature->icon }}"></i>
                            </div>
                            <h5 class="card-title fw-bold">{{ $feature->title }}</h5>
                            <p class="card-text text-muted small">{{ $feature->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endif