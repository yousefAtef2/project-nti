
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlogSpace | Share Your Thoughts</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900 overflow-x-hidden">

    <div class="absolute top-0 left-0 w-full h-full -z-10 overflow-hidden">
        <div class="absolute -top-[10%] -right-[10%] w-[500px] h-[500px] bg-indigo-100 rounded-full blur-[120px] opacity-50"></div>
        <div class="absolute top-[20%] -left-[10%] w-[400px] h-[400px] bg-blue-100 rounded-full blur-[100px] opacity-50"></div>
    </div>

    <nav class="container mx-auto px-6 py-6 flex justify-between items-center">
        <div class="flex items-center gap-2 group cursor-pointer">
            <div class="w-12 h-12 bg-gradient-to-tr from-indigo-600 to-violet-500 rounded-2xl flex items-center justify-center shadow-xl shadow-indigo-200 group-hover:rotate-6 transition-transform">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            </div>
            <span class="text-2xl font-black text-slate-800 tracking-tight">Blog<span class="text-indigo-600">Space</span></span>
        </div>

        <div class="flex gap-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="glass px-6 py-2.5 rounded-xl font-bold text-slate-700 hover:bg-white transition shadow-sm">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-6 py-2.5 font-bold text-slate-600 hover:text-indigo-600 transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-slate-900 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-indigo-600 transition shadow-lg shadow-slate-200">Get Started</a>
                @endauth
            @endif
        </div>
    </nav>

    <main class="container mx-auto px-6 pt-20 pb-32">
        <div class="flex flex-col lg:flex-row items-center gap-16">

            <div class="lg:w-1/2 text-left">
                <div class="inline-block px-4 py-1.5 bg-indigo-50 border border-indigo-100 rounded-full text-indigo-600 text-sm font-bold mb-6">
                    🚀 Your Ultimate Writing Platform
                </div>
                <h1 class="text-6xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
                    Write, Publish, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-blue-500">& Inspire Others.</span>
                </h1>
                <p class="text-lg text-slate-500 mb-10 leading-relaxed max-w-lg">
                    Join thousands of writers and creators on BlogSpace. A simple interface, powerful features, and an interactive community await you.
                </p>

                <div class="flex flex-wrap gap-5">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-10 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg hover:scale-105 transition-all shadow-2xl shadow-indigo-200">
                             Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="px-10 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg hover:scale-105 transition-all shadow-2xl shadow-indigo-200">
                            Start Writing Free
                        </a>
                        <div class="flex items-center gap-4 px-6 py-4 glass rounded-2xl border-gray-100">
                            <span class="text-slate-400 font-medium">New member?</span>
                            <a href="{{ route('login') }}" class="text-indigo-600 font-bold hover:underline">Sign In</a>
                        </div>
                    @endauth
                </div>
            </div>

            <div class="lg:w-1/2 relative">
                <div class="relative z-10 space-y-6">
                    <div class="glass p-6 rounded-3xl shadow-xl transform translate-x-12 rotate-3 hover:rotate-0 transition-transform duration-500">
                        <div class="flex gap-4 items-center">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-xl">✍️</div>
                            <div>
                                <h3 class="font-bold text-slate-800 text-lg">Easy Blogging</h3>
                                <p class="text-sm text-slate-500">Smart and simple text editor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass p-6 rounded-3xl shadow-xl transform -translate-x-6 -rotate-2 hover:rotate-0 transition-transform duration-500 border-indigo-100">
                        <div class="flex gap-4 items-center">
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-xl">🌍</div>
                            <div>
                                <h3 class="font-bold text-slate-800 text-lg">Global Reach</h3>
                                <p class="text-sm text-slate-500">Share your stories with the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-indigo-600 rounded-full opacity-5 blur-3xl"></div>
            </div>

        </div>
    </main>

    <!-- <footer class="container mx-auto px-6 py-12 border-t border-gray-100">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-slate-400 text-sm italic">Developed with ❤️ by Yousef Atef</p>
            <div class="flex gap-8 text-slate-400 text-sm">
                <a href="#" class="hover:text-indigo-600">Privacy Policy</a>
                <a href="#" class="hover:text-indigo-600">Contact Us</a>
            </div>
        </div>
    </footer> -->
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدونتي - أهلاً بك</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-900 font-sans">

    <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
            </div>
            <span class="text-xl font-bold tracking-tighter">My<span class="text-indigo-600">Blog</span></span>
        </div>

        @if (Route::has('login'))
            <div class="flex gap-4 items-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-indigo-600 transition">لوحة التحكم</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-indigo-600 transition">تسجيل الدخول</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-indigo-700 transition shadow-md shadow-indigo-100">ابدأ الآن</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>

    <main class="relative flex items-center justify-center min-h-[80vh] overflow-hidden">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute bottom-0 -right-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

        <div class="max-w-4xl mx-auto text-center px-6 relative z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 mb-6 tracking-tight">
                شارك أفكارك مع <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">العالم أجمع</span>
            </h1>
            <p class="text-xl text-gray-600 mb-10 leading-relaxed max-w-2xl mx-auto">
                منصة بسيطة، سريعة، وآمنة لتدوين مقالاتك ومشاركتها مع أصدقائك. ابدأ رحلتك في الكتابة اليوم وانضم لمجتمعنا.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="w-full sm:w-auto px-8 py-4 bg-indigo-600 text-white rounded-xl font-bold text-lg hover:bg-indigo-700 transition shadow-xl shadow-indigo-200">
                        الذهاب للوحة التحكم
                    </a>
                @else
                    <a href="{{ route('register') }}" class="w-full sm:w-auto px-8 py-4 bg-indigo-600 text-white rounded-xl font-bold text-lg hover:bg-indigo-700 transition shadow-xl shadow-indigo-200">
                        ابدأ كتابة منشورك الأول
                    </a>
                    <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-4 bg-white text-gray-700 border border-gray-200 rounded-xl font-bold text-lg hover:bg-gray-50 transition">
                        لديك حساب؟ سجل دخولك
                    </a>
                @endauth
            </div>

            <div class="mt-20 grid grid-cols-2 md:grid-cols-3 gap-8 border-t border-gray-100 pt-10">
                <div>
                    <p class="text-3xl font-bold text-indigo-600">+100</p>
                    <p class="text-gray-500">كاتب نشط</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-indigo-600">+500</p>
                    <p class="text-gray-500">مقال منشور</p>
                </div>
                <div class="hidden md:block">
                    <p class="text-3xl font-bold text-indigo-600">24/7</p>
                    <p class="text-gray-500">دعم فني</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-10 text-center text-gray-400 text-sm border-t border-gray-50">
        &copy; {{ date('Y') }} MyBlog. جميع الحقوق محفوظة لـ يوسف عاطف.
    </footer>
</body>
</html> -->
