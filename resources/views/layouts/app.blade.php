<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ستارا | @yield('title', '')</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
<style>
        @font-face {
            font-family: 'Pelak';
            src: url('/css/fonts/PelakFA.woff2') format('woff2')
        }

        .font-sans {
            font-family: 'Pelak' !IMPORTANT;
        }

        body {
            font-family: 'Pelak' !IMPORTANT;
        }
    </style>
    @yield('styles')
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="flex items-center bg-white border-gray-200 fixed w-full z-[5000] h-20 lg:h-32 border-b">
        <div class="flex w-full justify-between items-center">
            <!-- Left - Hamburger Menu -->
            <div class="w-1/2 md:w-1/3">
                <button data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation" class="px-4 py-2 rounded-lg hover:bg-gray-100">
                    <svg class="w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>

            <!-- Center - Logo -->
            <div class="flex-1 flex justify-end md:justify-center px-4 py-2 md:p-0 w-1/2 md:w-1/3">
                <span class="text-4xl font-black tracking-wider font-sans">ستارا</span>
            </div>

            <!-- Right - Buttons -->
            <div class="hidden md:flex items-center gap-3 w-1/3 justify-end px-4 py-2">
                <button class="px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 rounded-lg">
                    ورود
                </button>
                <a href="{{ route('business.register') }}" class="px-4 py-2 text-sm font-medium text-white bg-black hover:bg-gray-800 rounded-lg">
                    ثبت کسب و کار
                </a>
            </div>
        </div>
    </nav>

    <!-- Drawer component -->
    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-[5000] h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 "
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase ">منوی
            اصلی</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center  -white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">بستن منو</span>
        </button>
        <div class="py-4 overflow-y-auto">
            @yield('drawer-content')
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-white ">
        <div class="mx-auto w-full 2xl:max-w-screen-lg bg-[#002918] p-4 py-6 lg:py-8">
            <div class="mx-auto px-4 text-white">
                <h2 class="text-lg font-bold mb-2">درباره ستارا</h2>
                <p class="text-sm leading-relaxed mb-4">
                    ستارا مقصد آنلاین برای متخصصان زیبایی و سلامتی و مشتریان است. متخصصان می‌توانند کارهای خود را به نمایش بگذارند، با مشتریان جدید و فعلی ارتباط برقرار کنند و کسب‌وکار خود را توسعه دهند. مشتریان می‌توانند خدمات و ارائه‌دهندگان جدید را کشف کنند، به‌صورت آنلاین وقت رزرو کنند و الهام بگیرند.
                </p>
    

            </div>
            <div class="md:flex md:justify-between mx-auto px-4">
                
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">
                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-gray-100 uppercase ">درباره ما</h2>
                        <ul class="text-gray-50  font-medium">
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">درباره ما</a></li>
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">فرصت‌های شغلی</a></li>
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">اخبار</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-gray-100 uppercase ">برای متخصصان</h2>
                        <ul class="text-gray-50  font-medium">
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">ثبت نام</a></li>
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">منابع</a></li>
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">پشتیبانی</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-gray-100 uppercase ">قوانین</h2>
                        <ul class="text-gray-50  font-medium">
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">حریم خصوصی</a></li>
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">شرایط استفاده</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-gray-100 uppercase ">تماس با ما</h2>
                        <ul class="text-gray-50  font-medium">
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">مرکز پشتیبانی</a></li>
                            <li class="mb-2 text-xs"><a href="#" class="hover:underline">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-500 sm:mx-auto  lg:my-8" />
            {{-- <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-50 sm:text-center ">© ۱۴۰۳ ستارا™. تمامی حقوق محفوظ است.</span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-50 hover:text-gray-100 -white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-50 hover:text-gray-100 -white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-50 hover:text-gray-100 -white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div> --}}
            <div class="flex justify-between items-center">

    
                <div class="text-sm text-gray-300">© ۱۴۰۳ ستارا™. تمامی حقوق محفوظ است.</div>
                <div class="hidden lg:flex space-x-4 rtl:space-x-reverse">
                    <a href="#"><img src="{{ asset("assets/images/app-store.png") }}" class="h-10" alt="App Store"></a>
                    <a href="#"><img src="{{ asset("assets/images/app-store.png") }}" class="h-10" alt="Google Play"></a>
                </div>
            </div>

        </div>
    </footer>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @yield('scripts')
</body>

</html> 