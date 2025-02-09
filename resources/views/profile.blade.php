@extends('layouts.app')

@section('title', 'فریده فاطمی')

@section('styles')
    <style>
        /* Additional custom styles if needed */
        @media (min-width: 768px) {
            .profile-banner {
                height: 300px;
            }
        }

        #map {
            width: 100%;
            height: 300px;
            /* Adjust the height of the map as per your need */
            border-radius: 8px;
        }
    </style>
@endsection

@section('content')
    <div class="min-h-screen">


        <div class="pt-20 lg:pt-32">
            <div class="max-w-screen-lg mx-auto p-6">
                <div class="flex items-center  gap-2 space-x-4">
                    <!-- Avatar Section -->
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/avatars/faride.jpg') }}" alt="Profile Avatar"
                            class="w-full h-full rounded-full object-cover">
                    </div>

                    <!-- Profile Info Section -->
                    <div class="gap-3">
                        <h1 class="text-2xl font-semibold">فریده فاطمی</h1>
                        <p class="text-gray-800 my-2">استایلیست سالن زیبایی مهجبین</p>

                        <div class="flex gap-3 text-sm text-[#121111]">
                            <div class="flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.17269 12.7532L3.41237 15.2788L4.32151 9.92949L0.470337 6.14108L5.79253 5.36063L8.17269 0.493652L10.5528 5.36063L15.875 6.14108L12.0239 9.92949L12.933 15.2788L8.17269 12.7532Z"
                                        fill="#121111" stroke="transparent"></path>
                                </svg>
                                ۴.۹
                            </div>

                            <div>
                                +۱۰۰۰ رزرو
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="max-w-screen-lg mx-auto p-6">


            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-40 w-full object-cover max-w-full rounded-lg"
                            src="{{ asset('assets/images/placeholders/1.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-full max-w-full rounded-lg" src="{{ asset('assets/images/placeholders/2.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-full max-w-full rounded-lg" src="{{ asset('assets/images/placeholders/3.jpg') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-40 w-full object-cover max-w-full rounded-lg"
                            src="{{ asset('assets/images/placeholders/4.jpg') }}" alt="">
                    </div>

                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-40 w-full object-cover max-w-full rounded-lg"
                            src="{{ asset('assets/images/placeholders/5.jpg') }}" alt="">
                    </div>

                    <div>
                        <img class="h-full max-w-full rounded-lg" src="{{ asset('assets/images/placeholders/6.jpg') }}"
                            alt="">
                    </div>

                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-full max-w-full rounded-lg" src="{{ asset('assets/images/placeholders/7.jpg') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-40 w-full object-cover max-w-full rounded-lg"
                            src="{{ asset('assets/images/placeholders/8.jpg') }}" alt="">
                    </div>
                </div>
            </div>


        </div>


        <!-- Main Content -->
        <div class="max-w-screen-lg mx-auto px-4 pb-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column -->
                <div class="lg:col-span-2">
                    <!-- About Section -->
                    <div class="mx-auto p-4 mb-4">
                        <h2 class="text-2xl font-semibold mb-4">خدمات پرطرفدار</h2>

                        <div class="space-y-4">
                            <!-- Barbering Service -->
                            <div class="flex items-center justify-between py-4 rounded-lg border-b gap-2">
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-800">آرایش موی مردانه</h3>
                                    <div class="flex items-center space-x-2 mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-1 rounded-lg ">برجسته</span>
                                        <span class="text-sm font-medium text-gray-600">۵۰ دلار +</span>
                                        <span class="text-sm text-gray-500">۳۰ دقیقه</span>
                                    </div>
                                    <p class="text-sm text-gray-500 my-3">کوتاهی موی ساده با ماشین (سزار یا تدریجی)</p>

                                    <div class="flex items-center mt-2">
                                        <span
                                            class="flex gap-1 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-xl  ">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.17022 14.8942L4.794 22.9182L12 19.1298L19.206 22.9182L17.8297 14.8942L23.6595 9.21159L15.603 8.04091L12 0.740448L8.39699 8.04091L0.340454 9.21159L6.17022 14.8942ZM15.6808 14.196L16.5497 19.2622L12 16.8702L7.45026 19.2622L8.31918 14.196L4.63838 10.6081L9.72512 9.86892L12 5.25955L14.2748 9.86892L19.3616 10.6081L15.6808 14.196Z"
                                                    fill="#494948"></path>
                                            </svg>
                                            ۴.۳</span>
                                    </div>
                                </div>


                                <!-- Modal toggle -->
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                    class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-700" type="button">
                                    رزرو
                                </button>

                                <!-- Main modal -->
                                <div id="default-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[5001] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    رزرو وقت با فریده فاطمی
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="default-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">بستن</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">

                                                <div class="flex-1 mb-4 mb-4 border-b">
                                                    <h3 class="text-lg font-semibold text-gray-800">آرایش موی مردانه</h3>
                                                    <div class="flex items-center space-x-2 mt-2 ">
                                                        <span
                                                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-1 rounded-lg ">برجسته</span>
                                                        <span class="text-sm font-medium text-gray-600">۵۰ دلار +</span>
                                                        <span class="text-sm text-gray-500">۳۰ دقیقه</span>
                                                    </div>
                                                    <p class="text-sm text-gray-500 my-3">کوتاهی موی ساده با ماشین (سزار یا
                                                        تدریجی)</p>
                                                </div>
                                                <div id="datepicker-inline" inline-datepicker data-date="02/25/2024" class="w-full">
                                                </div>

                                                
                                                <div class="border-b">
                                                  <h4 class="text-lg font-bold">
                                                    صبح
                                                  </h4>
                                                  <div class="flex gap-4 py-2">
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۱۰:۳۰</a>
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۱۱:۰۰</a>

                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۱۱:۳۰</a>


                                                  </div>


                                                </div>


                                                <div class="border-b">
                                                  <h4 class="text-lg font-bold">
                                                    بعد از ظهر
                                                  </h4>
                                                  <div class="flex gap-4 py-2">
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۱:۳۰</a>
                                                    <a href="#" disabled class="px-2 py-1 lg: text-lg font-medium text-white hover:text-white bg-red-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۲:۰۰</a>

                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۲:۳۰</a>
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۳:۰۰</a>
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۳:۳۰</a>
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۴:۰۰</a>


                                                  </div>


                                                </div>

                                                <div class="border-b">
                                                  <h4 class="text-lg font-bold">
                                                    عصر
                                                  </h4>
                                                  <div class="flex gap-4 py-2">
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۶:۳۰</a>
                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۷:۰۰</a>

                                                    <a href="#" class="px-2 py-1 lg: text-lg font-medium text-black hover:text-white bg-gray-100 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">۰۷:۳۰</a>


                                                  </div>


                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 ms-auto text-end justify-end gap-2">
                                                
                                                <button data-modal-hide="default-modal" type="button"
                                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">انصراف</button>
                                                    <button data-modal-hide="default-modal" type="button"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">تکمیل رزرو</button>
                                                  </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Keratin Treatment Service -->
                            <div class="flex items-center justify-between py-4 rounded-lg border-b gap-2">
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-800">ترمیم کراتین</h3>
                                    <div class="flex items-center space-x-2 mt-2">
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-1 rounded-lg ">رزرو
                                            #۱</span>
                                        <span class="text-sm font-medium text-gray-600">۵۰ دلار +</span>
                                        <span class="text-sm text-gray-500">۳۰ دقیقه</span>
                                    </div>
                                    <p class="text-sm text-gray-500 my-3">نیاز به پیش‌پرداخت: ۱۰۰ دلار. پیش‌پرداخت برای
                                        قرار ملاقات محاسبه می‌شود مگر در صورت لغو یا تغییر زمان. ایمیل/پیامک...</p>

                                    <div class="flex items-center mt-2">
                                        <span
                                            class="flex gap-1 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-xl  ">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.17022 14.8942L4.794 22.9182L12 19.1298L19.206 22.9182L17.8297 14.8942L23.6595 9.21159L15.603 8.04091L12 0.740448L8.39699 8.04091L0.340454 9.21159L6.17022 14.8942ZM15.6808 14.196L16.5497 19.2622L12 16.8702L7.45026 19.2622L8.31918 14.196L4.63838 10.6081L9.72512 9.86892L12 5.25955L14.2748 9.86892L19.3616 10.6081L15.6808 14.196Z"
                                                    fill="#494948"></path>
                                            </svg>
                                            ۴.۶</span>
                                    </div>
                                </div>
                                <button class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-700">رزرو</button>
                            </div>

                            <!-- Silk Press Service -->
                            <div class="flex items-center justify-between py-4 rounded-lg border-b gap-2">
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-800">صاف کردن مو با سیلک پرس</h3>
                                    <div class="flex items-center space-x-2 mt-2">
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-1 rounded-lg ">رزرو
                                            #۲</span>
                                        <span class="text-sm font-medium text-gray-600">۵۰ دلار +</span>
                                        <span class="text-sm text-gray-500">۳۰ دقیقه</span>
                                    </div>
                                    <p class="text-sm text-gray-500 my-3">صاف و مستقیم کردن موهای فر یا بافت‌دار طبیعی با
                                        سیلک پرس. بدون نیاز به شانه داغ، این روش...</p>

                                    <div class="flex items-center mt-2">
                                        <span
                                            class="flex gap-1 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-xl  ">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.17022 14.8942L4.794 22.9182L12 19.1298L19.206 22.9182L17.8297 14.8942L23.6595 9.21159L15.603 8.04091L12 0.740448L8.39699 8.04091L0.340454 9.21159L6.17022 14.8942ZM15.6808 14.196L16.5497 19.2622L12 16.8702L7.45026 19.2622L8.31918 14.196L4.63838 10.6081L9.72512 9.86892L12 5.25955L14.2748 9.86892L19.3616 10.6081L15.6808 14.196Z"
                                                    fill="#494948"></path>
                                            </svg>
                                            ۴.۷</span>
                                    </div>
                                </div>
                                <button class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-700">رزرو</button>
                            </div>
                        </div>
                    </div>




                    <div class="mx-auto p-4 mb-4">
                        <h2 class="text-2xl font-semibold mb-4">مشاوره</h2>

                        <div class="space-y-4">
                            <!-- Barbering Service -->
                            <div class="flex items-center justify-between py-4 rounded-lg border-b gap-2">
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-800">مشاوره ویدیویی</h3>
                                    <div class="flex items-center space-x-2 mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-1 rounded-lg ">برجسته</span>
                                        <span class="text-sm font-medium text-gray-600">۵۰ دلار +</span>
                                        <span class="text-sm text-gray-500">۳۰ دقیقه</span>
                                    </div>
                                    <p class="text-sm text-gray-500 my-3">لطفا عکسی از آخرین وضعیت موی خود ایمیل کنید.
                                        همچنین دو عکس از نتیجه‌ای که میخواهید به دست آورید ارسال کنید.</p>

                                    <div class="flex items-center mt-2">
                                        <span
                                            class="flex gap-1 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-xl  ">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.17022 14.8942L4.794 22.9182L12 19.1298L19.206 22.9182L17.8297 14.8942L23.6595 9.21159L15.603 8.04091L12 0.740448L8.39699 8.04091L0.340454 9.21159L6.17022 14.8942ZM15.6808 14.196L16.5497 19.2622L12 16.8702L7.45026 19.2622L8.31918 14.196L4.63838 10.6081L9.72512 9.86892L12 5.25955L14.2748 9.86892L19.3616 10.6081L15.6808 14.196Z"
                                                    fill="#494948"></path>
                                            </svg>
                                            ۵</span>
                                    </div>
                                </div>
                                <button class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-700">رزرو</button>
                            </div>

                        </div>
                    </div>


                </div>

                <!-- Right Column -->
                <div class="lg:col-span-1">
                    <!-- Business Hours -->
                    <div class="bg-white rounded-lg shadow-sm mb-6 border">
                        <div class="space-y-2 flex flex-col ">
                            <div id="map" class="h-64 rounded-lg z-10"></div>

                            <!-- About Me Section -->
                            <div class="space-y-2 px-4 py-2">
                                <h3 class="font-semibold text-gray-800">موقعیت مکانی</h3>
                                {{-- <p class="text-gray-600"></p> --}}
                                <p class="text-gray-600 text-sm">کرمان، خیابان هزارویک‌شب، کوچه ۲۲، ساختمان سپید</p>
                                <p class="text-gray-600 text-sm">(034) 210-6735</p>
                            </div>

                            <!-- About Me Section -->
                            <div class="space-y-2 px-4 py-2">
                                <h3 class="font-semibold text-gray-800">درباره‌ی من</h3>
                                <p class="text-gray-600 text-sm">آرایشگر متخصص، استایلیست مو، و متخصص مراقبت از پوست و مو.
                                    با +۱۵ سال سابقه فعالیت در صنعت آرایشگری.</p>
                                <p class="text-gray-600 text-sm">IG: @faride_fatemiii</p>
                            </div>

                            <!-- Hours of Operation -->
                            <div class="space-y-2 px-4 py-2">
                                <h3 class="font-semibold text-gray-800">ساعت کار</h3>
                                <div class="space-y-1 flex flex-col">
                                    <div class="flex justify-between text-sm text-gray-600">
                                        <span>شنبه:</span>
                                        <span>تعطیل</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600">
                                        <span>یک‌شنبه:</span>
                                        <span>تعطیل</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600">
                                        <span>دوشنبه:</span>
                                        <span>تعطیل</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600">
                                        <span>سه‌شنبه:</span>
                                        <span> ۰۵:۰۰ عصر تا ۱۰:۰۰ عصر</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600">
                                        <span>چهارشنبه:</span>
                                        <span> ۰۵:۰۰ عصر تا ۱۰:۰۰ عصر</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600">
                                        <span>پنج‌شنبه:</span>
                                        <span> ۰۵:۰۰ عصر تا ۱۰:۰۰ عصر</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600">
                                        <span>جمعه:</span>
                                        <span> ۰۵:۰۰ عصر تا ۱۰:۰۰ عصر</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more days -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Map Coordinates for the location (use exact coordinates from the screenshot if available)
            const map = L.map('map').setView([40.6499, -73.9408], 13); // Set to Brooklyn, NY coordinates

            // Set up the OpenStreetMap Tile Layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Add a marker for the location
            L.marker([40.6499, -73.9408]).addTo(map)
                .bindPopup("<b>Aiyana Nicole</b><br>2230 Church Avenue Suite 117<br>Brooklyn, NY 11226")
                .openPopup();
        });
    </script>
@endsection
