{{-- File: resources/views/recruitment.blade.php --}}

<!-- File: resources/views/recruitment.blade.php -->

@extends('layouts.app') {{-- Asumsi Anda punya layout utama bernama app.blade.php --}}

@section('content')
<section id="recruitment-page" class="py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Join Us</h2>
            <p>We are always looking for the best talent to join our solid team.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mb-4">Available Positions</h3>
                
                {{-- Loop untuk menampilkan setiap lowongan dari database --}}
                @forelse ($recruitments as $recruitment)
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $recruitment->position }}</h5>
                            <p class="card-subtitle mb-2 text-muted">{{ $recruitment->type }}</p>
                            <p class="card-text">{{ $recruitment->description }}</p>
                            @if($recruitment->linkedin_url)
                                <a href="{{ $recruitment->linkedin_url }}" class="card-link" target="_blank">See Detail</a>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info">
                        There are no available positions at the moment.
                    </div>
                @endforelse

                <hr class="my-5">

                <div class="text-center">
                         <p>Don't see a role that fits your profile? You are always welcome to submit your CV to our email address for future consideration.</p>
                         <p class="mt-4 fs-5">Please send your CV to:</p>
                         <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hrd-job@arcs.co.id&su=Job%20Application%20/%20CV%20Submission" target="_blank" class="btn btn-primary btn-lg mt-3">
                        hrd-job@arcs.co.id</a>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
