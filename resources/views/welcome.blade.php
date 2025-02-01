<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Booking Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
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
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="flex w-full items-center bg-white border-gray-200 fixed w-full z-50 h-32 border-b">
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
                <button class="px-4 py-2 text-sm font-medium text-white bg-black hover:bg-gray-800 rounded-lg">
                    ثبت کسب و کار
                </button>
            </div>
        </div>
    </nav>

    <!-- Drawer component -->
    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">منوی
            اصلی</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <!-- Add your drawer menu items here -->
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white dark:bg-gray-900 pt-32">
        <div
            class="flex  pt-32 max-w-full 2xl:max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 bg-[#002918] text-white">
            <div class="flex flex-col flex-grow mx-auto place-self-center text-center w-full lg:w-3/5 items-center">
                <h1 class="max-w-2xl mb-4 xl:mb-8 text-4xl font-bold  md:text-2xl/12 xl:text-4xl/12 dark:text-white">
                    بهترین متخصصین زیبایی<br> در یک قدمی شما
                </h1>
                {{-- <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Find and book beauty professionals near you
                </p> --}}


                <form class="flex items-center w-full md:w-3/4 max-w-lg 2xl: mx-auto bg-white rounded-full px-5 py-2.5">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z" />
                            </svg>
                        </div>
                        <input type="text" id="voice-search"
                            class=" text-gray-900 text-lg rounded-lg  block w-full ps-10 p-2.5  dark:bg-gray-700  border-none focus:ring-0 focus:border-none placeholder:text-lg rtl"
                            placeholder="جستجوی خدمات، آرایشگر یا سالن" required />
                        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 16 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                            </svg>
                        </button>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center p-2.5 text-sm font-medium text-white bg-black rounded-full border border-black hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </form>


            </div>
            <div class="hidden lg:block lg:w-2/5">
                <img src="{{ asset('assets/images/hero/1.png') }}" alt="Hero image">
            </div>
        </div>
    </section>

    <!-- Popular Services Section -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-screen-lg mx-auto px-4">
            <h2 class="text-xl font-black mb-8 text-center">حرفه‌ای‌ها رو بر اساس خدمات پیدا کن</h2>
            <div class="grid grid-cols-2 md:grid-cols-6 gap-8">
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="مو">
                    <h3 class="font-semibold">مو</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="ناخن">
                    <h3 class="font-semibold">ناخن</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="آرایش">
                    <h3 class="font-semibold">آرایش</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="روتین پوستی">
                    <h3 class="font-semibold">روتین پوستی</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="مو">
                    <h3 class="font-semibold">مو</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="ناخن">
                    <h3 class="font-semibold">ناخن</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="آرایش">
                    <h3 class="font-semibold">آرایش</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="روتین پوستی">
                    <h3 class="font-semibold">روتین پوستی</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="مو">
                    <h3 class="font-semibold">مو</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="ناخن">
                    <h3 class="font-semibold">ناخن</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="آرایش">
                    <h3 class="font-semibold">آرایش</h3>
                </div>
                <div class="bg-white rounded-lg shadow text-center">
                    <img src="https://placehold.co/200" class="w-full rounded-lg mb-1" alt="روتین پوستی">
                    <h3 class="font-semibold">روتین پوستی</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Professionals Section -->
    <section class="py-12">
        <div class="max-w-screen-xl mx-auto px-4">


            <div
                class="flex  pt-32 max-w-full 2xl:max-w-screen-lg px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 bg-[#cec2ff] text-dark">
                <div
                    class="flex flex-col flex-grow mx-auto place-self-center text-center w-full lg:w-3/5 items-center">
                    <h2 class="text-3xl font-bold mb-8 text-center">کسب‌وکار خود را در ستارا راه‌اندازی کنید</h2>
                    <p
                        class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        به بزرگترین شبکه‌ی متخصصین زیبایی بپیوندید
                    </p>


                    <button type="button"
                        class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        بیشتر بدانید
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>


                    <div class="grid grid-cols-3 gap-4 mt-6">
                        <div class="bg-white rounded-lg shadow text-start p-4 flex flex-col justify-around">
                            <p class="font-bold text-sm">کسب و کار خود را توسعه دهید</p>
                            <p class="py-2 text-sm">مشتریان جدید جذب کنید</p>
                            <div> <button type="button"
                                    class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-xs px-3 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    بیشتر بدانید

                                </button></div>
                        </div>
                        <div class="bg-white rounded-lg shadow text-start p-4 flex flex-col justify-around">
                            <p class="font-bold text-sm">کسب و کار خود را مدیریت کنید</p>
                            <p class="py-2 text-sm">رزرو و برنامه ریزی را آسان کنید</p>
                            <div> <button type="button"
                                    class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-xs px-3 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    بیشتر بدانید

                                </button></div>
                        </div>

                        <div class="bg-white rounded-lg shadow text-start p-4 flex flex-col justify-around">
                            <div>
                                <p class="font-bold text-sm">تجربهٔ مشتریان را بهبود دهید</p>
                            </div>
                            <div>
                                <p class=" text-sm">رضایت مشتریان را بهبود دهید</p>
                            </div>
                            <div> <button type="button"
                                    class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-xs px-3 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    بیشتر بدانید

                                </button></div>



                        </div>
                    </div>

                </div>
                <div class="hidden lg:block lg:w-2/5">
                    <img src="{{ asset('assets/images/hero/1.png') }}" alt="Hero image">
                </div>
            </div>

        </div>
    </section>



    <section class="bg-gray-50 py-12">
        <div class="max-w-screen-lg mx-auto px-4">
            <h2 class="text-xl font-black mb-8 text-center">مشتریا چی میگن</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-[#f7f4ff] rounded-lg shadow text-start p-3">
                    <div class="flex"><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg></div>
                    <h3 class="font-semibold my-2 text-sm">خیلی خوب بود</h3>
                    <p class="text-sm">ستارا یک راه شگفت انگیز برای رزرو هر گونه قرار مو است. این برنامه نه تنها جایی
                        را نزد آرایشگر مورد نظرتان برای شما محفوظ می‌دارد.</p>
                </div>
                <div class="bg-[#f7f4ff] rounded-lg shadow text-start p-3">
                    <div class="flex"><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg></div>
                    <h3 class="font-semibold my-2 text-sm">خیلی خوب بود</h3>
                    <p class="text-sm">ستارا یک راه شگفت انگیز برای رزرو هر گونه قرار مو است. این برنامه نه تنها جایی
                        را نزد آرایشگر مورد نظرتان برای شما محفوظ می‌دارد.</p>
                </div>
                <div class="bg-[#f7f4ff] rounded-lg shadow text-start p-3">
                    <div class="flex"><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg></div>
                    <h3 class="font-semibold my-2 text-sm">خیلی خوب بود</h3>
                    <p class="text-sm">ستارا یک راه شگفت انگیز برای رزرو هر گونه قرار مو است. این برنامه نه تنها جایی
                        را نزد آرایشگر مورد نظرتان برای شما محفوظ می‌دارد.</p>
                </div>
                <div class="bg-[#f7f4ff] rounded-lg shadow text-start p-3">
                    <div class="flex"><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg><svg width="16" height="16" viewBox="0 0 18 18" fill="#3313B3"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.99995 14.27L13.1499 16.78C13.9099 17.24 14.8399 16.56 14.6399 15.7L13.5399 10.98L17.2099 7.80001C17.8799 7.22001 17.5199 6.12001 16.6399 6.05001L11.8099 5.64001L9.91995 1.18001C9.57995 0.37001 8.41995 0.37001 8.07995 1.18001L6.18995 5.63001L1.35995 6.04001C0.479951 6.11001 0.119951 7.21001 0.78995 7.79001L4.45995 10.97L3.35995 15.69C3.15995 16.55 4.08995 17.23 4.84995 16.77L8.99995 14.27Z"
                                fill="#3313B3"></path>
                        </svg></div>
                    <h3 class="font-semibold my-2 text-sm">خیلی خوب بود</h3>
                    <p class="text-sm">ستارا یک راه شگفت انگیز برای رزرو هر گونه قرار مو است. این برنامه نه تنها جایی
                        را نزد آرایشگر مورد نظرتان برای شما محفوظ می‌دارد.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-white py-12">
        <div class="max-w-screen-md mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">خدمات محبوب را مرور کنید</h2>
            <div class="grid grid-cols-1 gap-8">
                <div>


                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                aria-controls="accordion-flush-body-1">
                                <span>تهران</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex gap-6 text-gray-500 text-sm">
                                    <a href="#">رنگ مو</a>
                                    <a href="#">دکلره</a>
                                    <a href="#">کوتاهی مو</a>
                                    <a href="#">بافتن مو</a>
                                    

                                </div>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                aria-controls="accordion-flush-body-2">
                                <span>اصفهان</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex gap-6 text-gray-500 text-sm">
                                    <a href="#">رنگ مو</a>
                                    <a href="#">دکلره</a>
                                    <a href="#">کوتاهی مو</a>
                                    <a href="#">بافتن مو</a>
                                    

                                </div>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                aria-controls="accordion-flush-body-3">
                                <span>شیراز</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex gap-6 text-gray-500 text-sm">
                                    <a href="#">رنگ مو</a>
                                    <a href="#">دکلره</a>
                                    <a href="#">کوتاهی مو</a>
                                    <a href="#">بافتن مو</a>
                                    

                                </div>
                            </div>
                        </div>

                        <h2 id="accordion-flush-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                                aria-controls="accordion-flush-body-4">
                                <span>کرمان</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex gap-6 text-gray-500 text-sm">
                                    <a href="#">رنگ مو</a>
                                    <a href="#">دکلره</a>
                                    <a href="#">کوتاهی مو</a>
                                    <a href="#">بافتن مو</a>
                                    

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                


            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">درباره ما</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4"><a href="#" class="hover:underline">درباره ما</a></li>
                            <li class="mb-4"><a href="#" class="hover:underline">فرصت‌های شغلی</a></li>
                            <li class="mb-4"><a href="#" class="hover:underline">اخبار</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">برای متخصصان</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4"><a href="#" class="hover:underline">ثبت نام</a></li>
                            <li class="mb-4"><a href="#" class="hover:underline">منابع</a></li>
                            <li class="mb-4"><a href="#" class="hover:underline">پشتیبانی</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">قوانین</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4"><a href="#" class="hover:underline">حریم خصوصی</a></li>
                            <li class="mb-4"><a href="#" class="hover:underline">شرایط استفاده</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">تماس با ما</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4"><a href="#" class="hover:underline">مرکز پشتیبانی</a></li>
                            <li class="mb-4"><a href="#" class="hover:underline">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© ۱۴۰۳ ستارا™. تمامی حقوق محفوظ است.</span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
