@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Manage News</h1>
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
            + Add New News
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Status</th> {{-- 1. Tambahkan header Status --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($news as $newsItem)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $newsItem->title }}</td>
                            <td>
                                {{-- 2. Pindahkan logika status ke sini --}}
                                @if($newsItem->is_published)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-secondary">Draft</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.news.edit', $newsItem->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No news found.</td> {{-- 3. Ubah colspan menjadi 4 --}}
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection