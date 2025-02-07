@extends('layouts.app')

@section('title', 'خانه')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white  pt-20 lg:pt-32">
        <div class="flex pt-20 lg:pt-32 max-w-full 2xl:max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 bg-[#002918] text-white">
            <div class="flex flex-col flex-grow mx-auto place-self-center text-center w-full lg:w-3/5 items-center">
                <h1 class="max-w-2xl mb-4 xl:mb-8 text-4xl font-bold md:text-2xl/12 xl:text-4xl/12 ">
                    بهترین متخصصین زیبایی<br> در یک قدمی شما
                </h1>

                <form class="flex items-center w-full md:w-3/4 max-w-lg 2xl: mx-auto bg-white rounded-full px-5 py-2.5">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z" />
                            </svg>
                        </div>
                        <input type="text" id="voice-search"
                            class=" text-gray-900 text-lg rounded-lg  block w-full ps-10 p-2.5    border-none focus:ring-0 focus:border-none placeholder:text-lg rtl"
                            placeholder="جستجوی خدمات، آرایشگر یا سالن" required />
                        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                            <svg class="w-4 h-4 text-gray-500  hover:text-gray-900 "
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 16 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                            </svg>
                        </button>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center p-2.5 text-sm font-medium text-white bg-black rounded-full border border-black hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   ">
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
            <div class="flex pt-32 max-w-full 2xl:max-w-screen-lg px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 bg-[#cec2ff] text-dark">
                <div class="flex flex-col flex-grow mx-auto place-self-center text-center w-full lg:w-3/5 items-center">
                    <h2 class="text-3xl font-bold mb-8 text-center">کسب‌وکار خود را در ستارا راه‌اندازی کنید</h2>
                    <p class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl ">
                        به بزرگترین شبکه‌ی متخصصین زیبایی بپیوندید
                    </p>

                    <button type="button"
                        class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center inline-flex items-center   ">
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
                                    class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-xs px-3 py-1.5 text-center inline-flex items-center   ">
                                    بیشتر بدانید

                                </button></div>
                        </div>
                        <div class="bg-white rounded-lg shadow text-start p-4 flex flex-col justify-around">
                            <p class="font-bold text-sm">کسب و کار خود را مدیریت کنید</p>
                            <p class="py-2 text-sm">رزرو و برنامه ریزی را آسان کنید</p>
                            <div> <button type="button"
                                    class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-xs px-3 py-1.5 text-center inline-flex items-center   ">
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
                                    class="text-white bg-[#002918] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-xs px-3 py-1.5 text-center inline-flex items-center   ">
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

    <!-- How It Works Section -->
    <section class="bg-white py-12">
        <div class="max-w-screen-md mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">خدمات محبوب را مرور کنید</h2>
            <div class="grid grid-cols-1 gap-8">
                <div>
                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white  text-gray-900 "
                        data-inactive-classes="text-gray-500 ">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200   gap-3"
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
                            <div class="py-5 border-b border-gray-200 ">
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
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200   gap-3"
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
                            <div class="py-5 border-b border-gray-200 ">
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
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200   gap-3"
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
                            <div class="py-5 border-b border-gray-200 ">
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
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200   gap-3"
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
                            <div class="py-5 border-b border-gray-200 ">
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
@endsection
