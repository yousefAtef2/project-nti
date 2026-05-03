

<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <h2 class="h4 text-secondary fw-bold mb-0">
                <i class="bi bi-plus-circle me-2"></i> {{ __('create a new post') }}
            </h2>
        </div>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7"> <div class="card shadow border-0 rounded-4"> <div class="card-body p-sm-5"> <form method="POST" action="{{ route('posts.store') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold text-dark mb-2">
                                    {{ __('post title ') }}
                                </label>
                                <input type="text" name="title" id="title"
                                    class="form-control form-control-lg bg-light border-0 shadow-sm custom-input"
                                    placeholder="title" required>
                            </div>

                            <div class="mb-4">
                                <label for="body" class="form-label fw-bold text-dark mb-2">
                                    {{ __(' post details') }}
                                </label>
                                <textarea name="body" id="body" rows="8"
                                    class="form-control bg-light border-0 shadow-sm custom-input"
                                    placeholder="content" required></textarea>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-5 pt-4 border-top">
                                <a href="{{ route('dashboard') }}" class="btn btn-link text-decoration-none text-muted fw-medium">
                                    {{ __(' Back ') }}
                                </a>

                                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow">
                                    {{ __(' publish ') }}
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-input:focus {
            background-color: #fff !important;
            border: 1px solid #0d6efd !important;
            box-shadow: 0 0 0 0.25 row rgba(13, 110, 253, 0.1) !important;
        }
        .form-control-lg {
            font-size: 1.1rem;
        }
    </style>
</x-app-layout>


<!-- <div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
            <div class="p-8 bg-white">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2 italic">Post Title</label>
                        <input type="text" name="title" id="title"
                               class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-3 border"
                               placeholder="Enter a catchy title..." required>
                    </div>

                    <div class="mb-6">
                        <label for="body" class="block text-sm font-medium text-gray-700 mb-2 italic">Post Content</label>
                        <textarea name="body" id="body" rows="6"
                                  class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-3 border"
                                  placeholder="Write your story here..." required></textarea>
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <button type="submit"
                                class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 shadow-md">
                            {{ __('Publish Post') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
