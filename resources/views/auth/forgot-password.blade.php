<x-guest-layout>
    <div class="mb-8 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-50 rounded-full mb-4">
            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-slate-800">Forgot Password?</h2>
        <p class="text-slate-500 text-sm mt-2 px-4">
            {{ __('No problem. Enter your email and we will send you a reset link.') }}
        </p>
    </div>

    <x-auth-session-status class="mb-6 p-4 bg-green-50 text-green-700 rounded-xl border border-green-100 text-sm font-medium" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email Address')" class="font-semibold text-slate-700 ml-1" />
            <x-text-input id="email" class="block mt-1.5 w-full !rounded-xl !border-slate-200 focus:!border-indigo-500 focus:!ring-indigo-500/20 bg-white/50 backdrop-blur-sm shadow-sm"
                type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your email" />
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div>
            <x-primary-button class="w-full justify-center !py-3.5 !rounded-xl !bg-indigo-600 hover:!bg-indigo-700 shadow-lg shadow-indigo-200 transition-all active:scale-[0.95]">
                {{ __('Send Reset Link') }}
            </x-primary-button>
        </div>

        <div class="text-center">
            <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-sm font-bold text-indigo-600 hover:text-indigo-700 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Login
            </a>
        </div>
    </form>
</x-guest-layout>

<!-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> -->
