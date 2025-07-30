<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/#hero') }}">
    <img src="{{ asset('images/ARCS_Logo_Transparant.png') }}" alt="ARCS Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/#hero') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/#about') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/#services') }}">Services</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/#clients') }}">Clients</a>
    </li>
    <li class="nav-item">
        {{-- Link ke halaman terpisah --}}
        <a class="nav-link" href="{{ route('recruitment') }}">Recruitment</a>
    </li>
    <li class="nav-item">
        {{-- Link ke halaman terpisah --}}
        <a class="nav-link" href="{{ route('news.index') }}">News</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
    </li>
</ul>
        </div>
    </div>
</nav>