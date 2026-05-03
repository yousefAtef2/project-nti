<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit post ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2"><Title></Title></label>
                        <input type="text" name="title" value="{{ $post->title }}"
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">content</label>
                        <textarea name="body" rows="5"
                                  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">{{ $post->body }}</textarea>
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md shadow-sm transition">
                            save
                        </button>

                        <a href="{{ route('dashboard') }}" class="text-gray-600 hover:underline">
                            cancell
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
