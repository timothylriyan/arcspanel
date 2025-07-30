<!-- File: resources/views/services.blade.php -->

@extends('layouts.app')

@section('content')
<section id="services-page" class="py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Services</h2>
            <p>The solutions we offer to support your business success.</p>
        </div>

        <div class="accordion" id="servicesAccordion">
            @forelse ($services as $service)
                <div class="accordion-item mb-3 shadow-sm">
                    <h2 class="accordion-header" id="heading-{{ $service->id }}">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $service->id }}" aria-expanded="false" aria-controls="collapse-{{ $service->id }}">
                            {{ $service->name }}
                        </button>
                    </h2>
                    {{-- HAPUS atribut data-bs-parent dari baris di bawah ini --}}
                    <div id="collapse-{{ $service->id }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $service->id }}">
                        <div class="accordion-body">
                            @if($service->details->isNotEmpty())
                                @foreach($service->details as $detail)
                                    <div class="mb-4 service-detail-content">
                                        <h5 class="fw-bold">{{ $detail->title }}</h5>
                                        {!! $detail->description !!}
                                        @if($detail->note)
                                            <p class="fst-italic small mt-3"><strong>Note:</strong> {{ $detail->note }}</p>
                                        @endif
                                    </div>
                                    @if(!$loop->last) <hr> @endif
                                @endforeach
                            @else
                                <p>No details available for this service.</p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info text-center">
                    No services have been published yet.
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection