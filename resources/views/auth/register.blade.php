<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold text-slate-800">Create Account</h2>
        <p class="text-slate-500 text-sm mt-2">Join our community of writers today</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Full Name')" class="font-semibold text-slate-700 ml-1" />
            <x-text-input id="name" class="block mt-1.5 w-full !rounded-xl !border-slate-200 focus:!border-indigo-500 focus:!ring-indigo-500/20 bg-white/50 backdrop-blur-sm"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Doe" />
            <x-input-error :messages="$errors->get('name')" class="mt-1" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email Address')" class="font-semibold text-slate-700 ml-1" />
            <x-text-input id="email" class="block mt-1.5 w-full !rounded-xl !border-slate-200 focus:!border-indigo-500 focus:!ring-indigo-500/20 bg-white/50 backdrop-blur-sm"
                type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="name@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-slate-700 ml-1" />
            <x-text-input id="password" class="block mt-1.5 w-full !rounded-xl !border-slate-200 focus:!border-indigo-500 focus:!ring-indigo-500/20 bg-white/50 backdrop-blur-sm"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold text-slate-700 ml-1" />
            <x-text-input id="password_confirmation" class="block mt-1.5 w-full !rounded-xl !border-slate-200 focus:!border-indigo-500 focus:!ring-indigo-500/20 bg-white/50 backdrop-blur-sm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
        </div>

        <div class="pt-2">
            <x-primary-button class="w-full justify-center !py-3.5 !rounded-xl !bg-indigo-600 hover:!bg-indigo-700 shadow-lg shadow-indigo-200 transition-all active:scale-[0.98]">
                {{ __('Create Account') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-6">
            <p class="text-sm text-slate-500">
                Already have an account?
                <a class="font-bold text-indigo-600 hover:text-indigo-700 transition" href="{{ route('login') }}">
                    {{ __('Log in') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>

