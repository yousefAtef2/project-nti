<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>

            </div>
            @foreach($posts as $post)
    <div class="mb-4 p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
        <div class="flex justify-between items-start">
            <div class="flex-1">
                <h3 class="mb-4 text-lg font-bold text-gray-800">{{ $post->title }}</h3>
                <p class="text-gray-900 leading-relaxed">{{ $post->body }}</p>
            </div>
        </div>

        <div class="mt-6 flex justify-between items-center border-t pt-4">
            <div class="text-xs text-gray-500">
                <span>Posted by: <span class="font-semibold text-gray-700">{{ $post->user->name ?? 'User' }}</span></span>
                <span class="mx-1">•</span>
                <span>{{ $post->created_at->format('M d, Y') }}</span>
            </div>

            <div class="flex gap-2">
                <a href="{{ route('posts.edit', $post->id) }}"
                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition shadow-sm">
                    edit
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs transition shadow-sm">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
@endforeach

        </div>

    </div>
</x-app-layout>

