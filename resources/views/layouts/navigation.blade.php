
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20"> <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-200">
                             <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <span class="font-bold text-xl tracking-tight text-gray-800">My<span class="text-indigo-600">Blog</span></span>
                    </a>
                </div>

                <div class="hidden space-x-4 sm:-my-px sm:ms-10 sm:flex gap-2">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="px-4 py-2 rounded-lg hover:bg-indigo-50 transition-all duration-200 border-none">
                        {{ __('Home') }}
                    </x-nav-link>

                    <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150 shadow-md shadow-indigo-100">
                        <svg class="w-4 h-4 me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        create post
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="flex items-center gap-3 px-3 py-2 border border-gray-200 rounded-full hover:bg-gray-50 transition-all duration-200 focus:outline-none bg-white shadow-sm" >
                            <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold text-sm border border-indigo-200">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>


                            <div class="flex flex-col text-right">
                                <span class="text-sm font-bold text-gray-800 leading-none">{{ Auth::user()->name }}</span>
                                <span class="text-[10px] text-gray-400 mt-1">Admin Account</span>
                            </div>

                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- <div class="p-2 border-b border-gray-100 bg-gray-50/50 rounded-t-md">
                            <p class="text-xs text-gray-400 px-3 py-1">إعدادات الحساب</p>
                        </div> -->

                        <x-dropdown-link :href="route('profile.edit')" class="flex items-center gap-3 py-3 hover:bg-indigo-50 rounded-md mx-1 mt-1">
                             <div class="p-1.5 bg-gray-100 rounded-md text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                             </div>
                            <span class="font-medium text-gray-700">{{ __(' profile') }}</span>
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="flex items-center gap-3 py-3 text-red-600 hover:bg-red-50 rounded-md mx-1 mb-1">
                                <div class="p-1.5 bg-red-100 rounded-md">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                </div>
                                <span class="font-medium">{{ __(' log out') }}</span>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
