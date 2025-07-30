<!-- File: resources/views/sections/contact.blade.php -->

<section id="contact" class="py-5 contact-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white">CONTACT US</h2>
        </div>

        <div class="row align-items-center">
            {{-- Kolom untuk Peta --}}
            <div class="col-lg-6 mb-4 mb-lg-0">
                @if(!empty($settings['maps_embed']))
                    <div class="ratio ratio-16x9">
                        {!! $settings['maps_embed'] !!}
                    </div>
                @endif
            </div>

            {{-- Kolom untuk Informasi Kontak --}}
            <div class="col-lg-6 ps-lg-5">
                <h4 class="fw-bold text-white">PT Anugrah Rekatama Cipta Solusi</h4>
                
                {{-- Ganti semua text-white-50 menjadi text-white --}}
                @if(!empty($settings['address']))
                    <p class="text-white">{!! nl2br(e($settings['address'])) !!}</p>
                @endif

                @if(!empty($settings['phone']))
                    <p class="text-white"><strong>Phone:</strong> {{ $settings['phone'] }}</p>
                @endif

                @if(!empty($settings['fax']))
                    <p class="text-white"><strong>Fax:</strong> {{ $settings['fax'] }}</p>
                @endif

                @if(!empty($settings['email']))
                    <p class="text-white"><strong>Email:</strong> {{ $settings['email'] }}</p>
                @endif

                @if(!empty($settings['linkedin_url']))
                    <p class="mt-4">
                        <strong class="text-white">Follow Us on:</strong><br>
                        <a href="{{ $settings['linkedin_url'] }}" target="_blank" class="text-white fs-3">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>