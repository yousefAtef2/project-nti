@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>All Posts</h1>
    <a href="/create-post" class="btn btn-primary">Create New Post</a>
</div>

<div class="row">
    @forelse($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-primary">{{ $post['title'] }}</h5>
                    <p class="card-text text-muted">
                        {{ \Illuminate\Support\Str::limit($post['description'], 100) }}
                    </p>
                </div>
                <div class="card-footer bg-transparent border-top-0 pb-3">
                    <a href="#" class="btn btn-outline-info btn-sm">View Details</a>
                    <a href="#" class="btn btn-primary btn-lg">Edit</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-info text-center">
                No posts found. Start by <a href="/create-post">creating a new one</a>!
            </div>
        </div>
    @endforelse
</div>
@endsection
