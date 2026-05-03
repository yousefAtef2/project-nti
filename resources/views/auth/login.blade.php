<x-guest-layout>
    <div class="space-y-6">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Welcome Back</h2>
            <p class="text-slate-500 mt-2 text-sm font-medium">Please enter your details to sign in</p>
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 bg-green-50 p-3 rounded-xl border border-green-100 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div class="space-y-1.5">
                <label for="email" class="block text-slate-700 font-bold ml-1 text-sm">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="block w-full border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm p-3 transition-all duration-200 bg-white/50"
                    placeholder="name@example.com">
                @if ($errors->has('email'))
                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="space-y-1.5">
                <label for="password" class="block text-slate-700 font-bold ml-1 text-sm">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="block w-full border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm p-3 transition-all duration-200 bg-white/50"
                    placeholder="••••••••">
                @if ($errors->has('password'))
                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="flex items-center justify-between text-sm px-1">
                <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded-md border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 transition cursor-pointer">
                    <span class="ms-2 text-slate-500 group-hover:text-slate-700 transition">Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="font-bold text-indigo-600 hover:text-indigo-700 transition underline-offset-4 hover:underline" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full flex justify-center py-4 px-4 border border-transparent rounded-2xl shadow-lg shadow-indigo-100 text-lg font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 active:scale-[0.98]">
                    Sign In
                </button>
            </div>

            <div class="text-center pt-4 border-t border-gray-100">
                <p class="text-sm text-slate-500">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-bold text-indigo-600 hover:text-indigo-700 transition">Create an account</a>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout>
<!-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> -->
