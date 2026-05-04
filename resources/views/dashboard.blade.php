<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="pt-2"> {{-- ده السطر رقم 8 المعدل --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="mb-4 text-lg font-bold">All Posts</h3>

                @foreach($posts as $post)
                    <div style="border: 1px solid #eee; padding: 20px; margin-bottom: 15px; border-radius: 10px;">
                        <h4 style="color: #1a202c; font-size: 1.25rem; font-weight: 600;">{{ $post->title }}</h4>
                        <p style="margin-top: 10px; color: #4a5568;">{{ $post->body }}</p>

                        <div style="margin-top: 15px; font-size: 0.875rem; color: #718096;">
                            Posted by: <strong>{{ $post->user->name ?? 'Unknown' }}</strong>
                            at {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                @endforeach

                @if($posts->isEmpty())
                    <p>No posts found. Start by creating one!</p>
                @endif
            </div>
        </div>
    </div> 

    <!-- <div class="py">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            </div>
    </div> -->
</x-app-layout>
