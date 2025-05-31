<!-- resources/views/layouts/main.blade.php -->

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Landing - Website Administrasi RT.36</title>
        <!-- favicon -->
        <link href="{{ asset('assets/images/favcoicon.i') }}" rel="shortcut icon">

        <!-- Css -->
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

    </head>
    
    <body class="font-rubik text-base text-slate-900 dark:text-white dark:bg-slate-900">

        <!-- Main Content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- includes/footer.blade.php -->
        @include('includes.footer')

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 size-8 text-center bg-orange-600 text-white leading-8"><i class="mdi mdi-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow-sm dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-1/3 -right-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-md dark:shadow-sm dark:shadow-gray-800 font-semibold rtl:block ltr:hidden">LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-md dark:shadow-sm dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('assets/libs/gumshoejs/gumshoe.polyfills.min.js') }}"></script>
        <script src="{{ asset('assets/js/easy_background.js') }}"></script>
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->

        <script>
            easy_background("#home2",
                {
                    slide: ["{{ asset('assets/images/bg/01.png') }}", "{{ asset('assets/images/bg/02.png') }}", "{{ asset('assets/images/bg/03.png') }}"],
                    delay: [4000, 4000, 4000]
                }
            );
        </script>

        <script>
            easy_background("#home3",
                {
                    slide: ["{{ asset('assets/images/bg/1.jpg') }}", "{{ asset('assets/images/bg/2.jpg') }}", "{{ asset('assets/images/bg/3.jpg') }}"],
                    delay: [4000, 4000, 4000]
                }
            );
        </script>

    </body>
</html>