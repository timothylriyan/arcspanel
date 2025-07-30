@extends('layouts.admin')

@section('content')
    <div class="mb-4">
        <h1 class="h3">Dashboard</h1>
        <p class="text-muted">Halo, {{ $userName }}! Selamat datang kembali.</p>
    </div>

    <div class="row">
        <!-- Services Card -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-primary shadow h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">{{ $serviceCount }}</h5>
                            <p class="card-text">Total Services</p>
                        </div>
                        <div>
                            <i class="fas fa-briefcase fa-3x opacity-50"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.services.index') }}" class="text-white stretched-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- Clients Card -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-success shadow h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">{{ $clientCount }}</h5>
                            <p class="card-text">Total Clients</p>
                        </div>
                        <div>
                            <i class="fas fa-users fa-3x opacity-50"></i>
                        </div>
                    </div>
                     <a href="{{ route('admin.clients.index') }}" class="text-white stretched-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- News Card -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-info shadow h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">{{ $newsCount }}</h5>
                            <p class="card-text">Total News</p>
                        </div>
                        <div>
                            <i class="fas fa-newspaper fa-3x opacity-50"></i>
                        </div>
                    </div>
                     <a href="{{ route('admin.news.index') }}" class="text-white stretched-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- Features Card (BARU) -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-danger shadow h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">{{ $featureCount }}</h5>
                            <p class="card-text">Total Features</p>
                        </div>
                        <div>
                            <i class="fas fa-star fa-3x opacity-50"></i>
                        </div>
                    </div>
                     <a href="{{ route('admin.features.index') }}" class="text-white stretched-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- Recruitments Card (BARU) -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-secondary shadow h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">{{ $recruitmentCount }}</h5>
                            <p class="card-text">Total Recruitments</p>
                        </div>
                        <div>
                            <i class="fas fa-user-plus fa-3x opacity-50"></i>
                        </div>
                    </div>
                     <a href="{{ route('admin.recruitments.index') }}" class="text-white stretched-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- Users Card -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-warning shadow h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">{{ $userCount }}</h5>
                            <p class="card-text">Total Users</p>
                        </div>
                        <div>
                            <i class="fas fa-user-shield fa-3x opacity-50"></i>
                        </div>
                    </div>
                     <a href="{{ route('admin.users.index') }}" class="text-white stretched-link">View Details</a>
                </div>
            </div>
        </div>
    </div>
@endsection