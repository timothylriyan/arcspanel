@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-4">Contact Us Settings</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3">{{ $settings['address'] ?? '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $settings['phone'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax</label>
                    <input type="text" class="form-control" id="fax" name="fax" value="{{ $settings['fax'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $settings['email'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ $settings['linkedin_url'] ?? '' }}">
                </div>
                 <div class="mb-3">
                    <label for="maps_embed" class="form-label">Google Maps Embed URL</label>
                    <textarea class="form-control" id="maps_embed" name="maps_embed" rows="5">{{ $settings['maps_embed'] ?? '' }}</textarea>
                    <div class="form-text">Salin URL dari Google Maps "Embed a map".</div>
                </div>

                <button type="submit" class="btn btn-primary">Save Settings</button>
            </form>
        </div>
    </div>
@endsection