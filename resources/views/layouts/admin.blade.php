<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="d-flex">
        <aside style="width: 280px; min-height: 100vh;" class="bg-dark text-white p-3 d-flex flex-column">
            <div>
                <h2 class="h4 mb-4">ARCS PANEL</h2>
                <nav class="nav flex-column">
                    <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="nav-link text-white" href="{{ route('admin.about.edit') }}">About Us</a>
                    <a class="nav-link text-white" href="{{ route('admin.features.index') }}">Features</a>
                    <a class="nav-link text-white" href="{{ route('admin.services.index') }}">Services</a>
                    <a class="nav-link text-white" href="{{ route('admin.clients.index') }}">Clients</a>
                    <a class="nav-link text-white" href="{{ route('admin.news.index') }}">News</a>
                    <a class="nav-link text-white" href="{{ route('admin.recruitments.index') }}">Recruitments</a>
                    <a class="nav-link text-white" href="{{ route('admin.settings.index') }}">Settings</a>
                    <hr class="text-white-50">
                    <a class="nav-link text-white" href="{{ route('admin.users.index') }}">Users</a>
                </nav>
            </div>
            <div class="mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="nav-link text-danger"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </form>
            </div>
        </aside>

        <main class="w-100 p-4">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>
</html>