<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pofff</title>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body>
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            {{--                            @if(Auth::check())--}}
                            {{--                            @auth--}}
                            {{--                            @guest--}}
                            <div>{{ Auth::check() ? Auth::user()->name : 'salam' }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    @auth
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    @endauth
</nav>

<div class="container-fluid">
    <div class="flex flex-wrap md:flex-nowrap">
        <div class="flex flex-col w-full">

        @yield('content')

        </div>


        <div class="w-full lg:w-1/4">
            <div class="mx-auto bg-primary-color text-white text-left py-12">
                <div class="w-3/4 mx-auto">
                    <h1 class="text-4xl font-bold">
                        NixFile.com
                    </h1>
                    <p class="font-medium">
                        change to forever...
                    </p>
                </div>
            </div>


            <div class="bg-transparent flex flex-col justify-center items-center relative">
                <div class="flex flex-col gap-12 w-3/4 relative -top-6 mb-12">
                    <div class="flex flex-col rounded-3xl bg-white shadow-lg px-4 py-6 justify-center items-center">
                        <img class="mb-4 max-w-full" src="{{asset('./images/upload-icon.svg')}}" alt="" title="">
                        <a class="font-bold mb-2 text-3xl" href="#">
                            آپلود فایل
                        </a>
                        <p class="text-primary-color mb-8 font-medium">
                            فایل خود را انتخاب کنید
                        </p>
                        <p class="text-zinc-400 text-center">
                            در ابتدا برای هر کسب‌وکاری لازم است که تحقیق کلمات کلیدی انجام شود تا پایه و اساس کمپین‌ها و
                            ادگروپ‌ها به درستی و به صورت کاملا شفاف شکل بگیرد...
                        </p>
                    </div>

                    <div class="flex flex-col rounded-3xl bg-white shadow-lg px-4 py-6 justify-center items-center">
                        <img class="mb-4 max-w-full" src="{{asset('./images/key.svg')}}" alt="" title="">
                        <a class="font-bold mb-6 text-3xl" href="#"> دانلود فایل </a>
                        <a class="border rounded-2xl p-4 border-green-200 text-zinc-400" href="#">
                            <span class="text-green-300">key: </span> <span class="text-zinc-400">https://www.nixfile.com </span>
                        </a>

                    </div>
                </div>

                <div class="flex w-3/4 gap-4 justify-center items-center mb-12">
                    <div class="basis-1/4">
                        <div class="bg-white rounded-2xl w-full p-2">
                            <img class="w-full h-full object-cover position-center" src="{{asset("./images/user.png")}}"
                                 alt="">
                        </div>
                    </div>
                    <div>
                        <p class="font-bold text-2xl">
                            علی بهوندی خوش آمدید!
                        </p>
                        <a class="text-zinc-400" href="#">حساب کاربری شما</a>
                    </div>
                </div>


                <div
                    class="flex flex-col bg-white shadow-lg border rounded-2xl p-4 w-3/4 mb-12 text-center relative
                    before:content-['sss'] before:w-full before:h-full before:absolute before:-z-10 before:rounded-2xl before:bg-primary-color">
                    <p class="text-primary-color mb-4">
                        فایل های ارسال شده و آپلود شده!
                    </p>
                    <p class="text-zinc-400">
                        در ابتدا برای هر کسب‌وکاری لازم است که تحقیق کلمات کلیدی انجام شود تا پایه و اساس کمپین‌ها و
                        ادگروپ‌ها به
                    </p>
                </div>

            </div>
        </div>
    </div>

</div>


<script>
    let plansBtn = document.querySelector('.plans-btn');
    let plansBtnCircle = document.querySelector('.plans-btn-circle')
    let tableMonthly = document.querySelector('.table-monthly')
    let tableYearly = document.querySelector('.table-yearly')
    plansBtn.addEventListener('click', function () {
        plansBtnCircle.classList.toggle('right-[1.75rem]');
        tableMonthly.classList.toggle('hidden');
        tableYearly.classList.toggle('grid');
        tableYearly.classList.toggle('hidden')
    });
</script>
</body>
</html>

