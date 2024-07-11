<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nixfile | Home</title>

    {{-- tailwind css and fontawsome vite setup start --}}
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- tailwind css and fontawsome vite setup end --}}
</head>
<body>
<div class="container-fluid">
    <div class="flex flex-wrap md:flex-nowrap">
        <div class="flex flex-col w-full">

            <div class="w-full bg-sky-200  bg-no-repeat bg-auto relative bg-[#290F0C]"
                 style="background-image: url('{{asset('./images/hero.jpeg')}}')">

                <div class="bg-gradient-to-b from-black to-transparent pt-20 w-full min-h-12">

                </div>

                <div class="lg:mx-4 flex flex-col">

                    <div class="mx-12 flex gap-4 justify-center lg:justify-start mb-12 lg:mb-0">
                        <a class="bg-primary-color text-white px-8 py-3 rounded-2xl font-medium inline-flex gap-4 items-center justify-center cursor-pointer hover:bg-red-500 transition">
                            <i class="fa fa-angle-down"></i>
                            IR
                            <span>
                        🇮🇷
                   </span>
                        </a>
                        <a class="bg-secondary-color text-white px-8 py-3 rounded-2xl font-medium inline-flex items-center justify-center gap-4 cursor-pointer hover:bg-amber-500 transition">
                            <i class="fa fa-chess-king"></i>
                            خرید اشتراک
                        </a>
                    </div>

                    <div class="w-max mx-auto text-left mb-12">
                        <p class="text-3xl lg:text-[200px] lg:text-start text-center font-black text-white leading-tight mx-auto">
                       <span
                           class="bg-gradient-to-br from-primary-color to-amber-100 text-transparent bg-clip-text">
                               Nix
                           </span>
                            File
                        </p>
                        <p class="text-white text-3xl font-medium">
                            ...change to forever
                        </p>
                    </div>

                    <div
                        class="w-[90%] mx-auto bg-white/70 rounded-3xl shadow-md backdrop-blur-20 p-8 min-h-[420px] mb-12">
                        <p class="text-center">preview should come here</p>
                    </div>

                    <div class="w-[90%] mx-auto bg-white/70 rounded-3xl shadow-md backdrop-blur-20 p-8 mb-12">
                        <p class="text-center mb-8">ads will come here</p>
                        <div class="grid lg:grid-cols-4 gap-8">
                            <div>
                                <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                                     alt="">
                            </div>
                            <div>
                                <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                                     alt="">
                            </div>
                            <div>
                                <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                                     alt="">
                            </div>
                            <div>
                                <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                                     alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="w-full py-12 lg:py0">
                <div class="bg-white lg:shadow-lg rounded-2xl lg:mx-12 p-12 mt-12">
                    <div class="grid lg:grid-cols-3 gap-8 justify-items-center ">
                        <div class="order-last lg:order-first">
                            <img class="w-full object-cover object-center block" src="{{asset("./images/shuttle.jpg")}}"
                                 alt="">
                        </div>
                        <div class="flex flex-col w-full justify-center items-center shadow-md bg-white rounded-2xl lg:shadow-none lg:rounded-none lg:bg-none py-12">
                            <p class="text-5xl text-black font-extrabold mb-2 text-center" dir="ltr">
                                <span class="text-primary-color">50</span> GB
                            </p>
                            <p class="font-semibold text-center">
                                فضای ابری هدیه ما به شما!
                            </p>
                            <ul class="mt-12 flex flex-col gap-4">
                                <li class="inline-flex gap-4 items-center justify-center">
                                    <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
                                    پاسخگویی ۲۴ ساعته سریع و حرفه ای
                                </li>
                                <li class="inline-flex gap-4 items-center justify-center">
                                    <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
                                    پاسخگویی ۲۴ ساعته سریع و حرفه ای
                                </li>
                                <li class="inline-flex gap-4 items-center justify-center">
                                    <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
                                    پاسخگویی ۲۴ ساعته سریع و حرفه ای
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-full justify-center items-center shadow-md bg-white rounded-2xl lg:shadow-none lg:rounded-none lg:bg-none py-12">
                            <a class="btn bg-primary-color py-3 rounded-2xl px-8 text-white medium text-xl w-max ">
                                همین حالا شروع کنید
                            </a>

                            <ul class="mt-12 flex flex-col gap-4">
                                <li class="inline-flex gap-4 items-center justify-center">
                                    <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
                                    پاسخگویی ۲۴ ساعته سریع و حرفه ای
                                </li>
                                <li class="inline-flex gap-4 items-center justify-center">
                                    <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
                                    پاسخگویی ۲۴ ساعته سریع و حرفه ای
                                </li>
                                <li class="inline-flex gap-4 items-center justify-center">
                                    <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
                                    پاسخگویی ۲۴ ساعته سریع و حرفه ای
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="bg-white lg:shadow-lg rounded-2xl mx-6 lg:mx-12 p-12 mt-12">

                    <div class="flex justify-between mb-12">
                        <div class="flex justify-evenly items-center gap-2">
                            <p>
                                ماهانه
                            </p>
                            <div class="border border-primary-color rounded-3xl w-[55px] p-1 cursor-pointer plans-btn">
                                <div
                                    class="w-6 h-6 bg-primary-color rounded-full hover:bg-primary-color/90 relative transition-all plans-btn-circle">

                                </div>
                            </div>
                            <p>
                                سالانه
                            </p>
                        </div>
                        <div class="text-left">
                            <p dir="ltr" class="text-5xl font-bold mb-3">
                                <span class="text-primary-color">Plan</span> Price
                            </p>
                            <p class="text-zinc-400 font-semibold text-lg ">
                                پلن های ما
                            </p>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-3 gap-4 table-monthly">
                        <div>
                            <div class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
                                <div class="flex justify-between w-full">
                                    <p class="text-green-400 text-2xl font-medium">
                                        79,000 تومان
                                    </p>
                                    <p dir="ltr" class="text-2xl font-semibold">
                                        <span class="text-primary-color">72</span> GB
                                    </p>
                                </div>
                                <p class="text-zinc-400 text-justify font-medium">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>
                                <a href="" class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید پلن</a>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
                                <div class="flex justify-between w-full">
                                    <p class="text-green-400 text-2xl font-medium">
                                        79,000 تومان
                                    </p>
                                    <p dir="ltr" class="text-2xl font-semibold">
                                        <span class="text-primary-color">72</span> GB
                                    </p>
                                </div>
                                <p class="text-zinc-400 text-justify font-medium">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>
                                <a href="" class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید پلن</a>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
                                <p class="text-2xl font-bold text-green-400">
                                   رایگان
                                </p>
                                <p class="text-zinc-400 text-justify font-medium">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>
                                <a href="" class="bg-green-400/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-green-400 transition w-full text-center">خرید پلن</a>
                            </div>
                        </div>

                    </div>

                    <div class="lg:grid-cols-3 hidden gap-4 table-yearly">
                        <div>
                            <div class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
                                <div class="flex justify-between w-full">
                                    <p class="text-green-400 text-2xl font-medium">
                                        799,000 تومان
                                    </p>
                                    <p dir="ltr" class="text-2xl font-semibold">
                                        <span class="text-primary-color">69</span> GB
                                    </p>
                                </div>
                                <p class="text-zinc-400 text-justify font-medium">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>
                                <a href="" class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید پلن</a>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
                                <div class="flex justify-between w-full">
                                    <p class="text-green-400 text-2xl font-medium">
                                        799,000 تومان
                                    </p>
                                    <p dir="ltr" class="text-2xl font-semibold">
                                        <span class="text-primary-color">69</span> GB
                                    </p>
                                </div>
                                <p class="text-zinc-400 text-justify font-medium">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>
                                <a href="" class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید پلن</a>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
                                <p class="text-2xl font-bold text-green-400">
                                    رایگان
                                </p>
                                <p class="text-zinc-400 text-justify font-medium">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>
                                <a href="" class="bg-green-400/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-green-400 transition w-full text-center">خرید پلن</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="lg:w-1/4 w-full">
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
