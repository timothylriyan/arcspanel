<!-- File: resources/views/sections/clients.blade.php -->

@if($clients->isNotEmpty())
<section id="clients" class="py-5 bg-light">
    {{-- Kotak putih ini TIDAK di dalam container agar bisa full-width --}}
    <div class="bg-white shadow-sm py-5">
        <div class="container">
            {{-- Judul tetap di dalam container agar rapi --}}
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Clients</h2>
                <p>We are proud to be trusted by various companies.</p>
            </div>
        </div>

        {{-- Container animasi ini juga di luar container Bootstrap --}}
        <div class="logos">
            <div class="logos-slide">
                {{-- Tampilkan semua logo dari database (putaran pertama) --}}
                @foreach ($clients as $client)
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}">
                @endforeach

                {{-- Duplikasi ini PENTING untuk membuat animasi loop mulus --}}
                @foreach ($clients as $client)
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}">
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif