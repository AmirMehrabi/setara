@extends('layouts.app')

@section('title', 'فریده فاطمی')

@section('styles')
    <style>
        #map {
            height: 100%;
        }

        /* Custom CSS for responsive layout */
        .half {
            width: 50%;
        }

        @media (max-width: 1024px) {
            .half {
                width: 0%;
            }

            #search-container {
                order: 2;
            }

            #map-container {
                order: 1;
                height: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Search Section -->
    <div class="flex">
        <div id="search-container" class="w-full lg:w-1/2 p-6 overflow-auto pt-32 relative bg-gray-50">
            <div class="max-w-4xl mx-auto p-4 space-y-4 bg-gray-100">
                <!-- Row 1: Search Inputs -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Service Input -->
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <input type="text" 
                            class="w-full p-2 lg:p-4 ps-10 lg:ps-10  lg:text-lg text-gray-900 bg-white rounded-lg border-none focus:ring-gray-200 focus:border-blue-500" 
                            placeholder="سرویس، خیاط یا سبک...">
                    </div>
            
                    <!-- Location Input -->
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <input type="text" 
                            class="w-full p-2 lg:p-4 ps-10 lg:ps-10  lg:text-lg text-gray-900 bg-white rounded-lg border-none focus:ring-gray-200 focus:border-blue-500" 
                            placeholder="موقعیت...">
                    </div>
                </div>
            
                <!-- Row 2: Filters -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Date Filter -->
                    <select class="w-full p-2 lg:p-4 lg:text-lg text-gray-900 bg-white rounded-lg border-none focus:ring-gray-200 focus:border-blue-500">
                        <option selected>تاریخ</option>
                        <option value="today">امروز</option>
                        <option value="tomorrow">فردا</option>
                        <option value="next-week">هفته آینده</option>
                    </select>
            
                    <!-- Sort Filter -->
                    <select class="w-full p-2 lg:p-4 lg:text-lg text-gray-900 bg-white rounded-lg border-none focus:ring-gray-200 focus:border-blue-500">
                        <option selected>مرتب‌سازی بر اساس</option>
                        <option value="best-match">بهترین تطابق</option>
                        <option value="highest-rated">بالاترین امتیاز</option>
                        <option value="distance">فاصله</option>
                        <option value="price-low">قیمت، کم به زیاد</option>
                        <option value="price-high">قیمت، زیاد به کم</option>
                    </select>
                </div>
            
                <!-- Row 3: Search Button -->
                <div class="flex justify-center">
                    <button type="submit" 
                        class="w-full mt-2 p-2 lg: text-lg font-medium text-white bg-black rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors">
                        جستجو
                    </button>
                </div>
            </div>


            <div class="space-y-6">
                <!-- List of professionals -->
                <div class="flex flex-col space-y-4">
                    <!-- Example item -->
                    <div class="max-w-4xl flex items-center space-x-4 gap-4 ">

                        <div class="flex-1 flex flex-col lg:flex-row  items-center gap-2 border-b p-4 space-y-4">
                            <div class="">
                                <img src="{{ asset('assets/images/avatars/faride.jpg') }}" alt="Professional Image"
                                    class="rounded-full w-52 lg:w-40 h-52 lg:h-40 object-cover">

                            </div>

                            <div class="grow text-center lg:text-start">
                                <h4 class="text-xl font-semibold">فریده فاطمی</h4>
                                <p class="text-gray-600">سالن زیبایی مهجبین</p>
                                <div class="flex space-x-2 mt-2">
                                    <div class="flex gap-1">
                                        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.17269 12.7532L3.41237 15.2788L4.32151 9.92949L0.470337 6.14108L5.79253 5.36063L8.17269 0.493652L10.5528 5.36063L15.875 6.14108L12.0239 9.92949L12.933 15.2788L8.17269 12.7532Z"
                                                fill="#FFD600" stroke="transparent"></path>
                                        </svg>
                                        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.17269 12.7532L3.41237 15.2788L4.32151 9.92949L0.470337 6.14108L5.79253 5.36063L8.17269 0.493652L10.5528 5.36063L15.875 6.14108L12.0239 9.92949L12.933 15.2788L8.17269 12.7532Z"
                                                fill="#FFD600" stroke="transparent"></path>
                                        </svg>
                                        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.17269 12.7532L3.41237 15.2788L4.32151 9.92949L0.470337 6.14108L5.79253 5.36063L8.17269 0.493652L10.5528 5.36063L15.875 6.14108L12.0239 9.92949L12.933 15.2788L8.17269 12.7532Z"
                                                fill="#FFD600" stroke="transparent"></path>
                                        </svg>
                                        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.17269 12.7532L3.41237 15.2788L4.32151 9.92949L0.470337 6.14108L5.79253 5.36063L8.17269 0.493652L10.5528 5.36063L15.875 6.14108L12.0239 9.92949L12.933 15.2788L8.17269 12.7532Z"
                                                fill="#FFD600" stroke="transparent"></path>
                                        </svg>
                                        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.17269 12.7532L3.41237 15.2788L4.32151 9.92949L0.470337 6.14108L5.79253 5.36063L8.17269 0.493652L10.5528 5.36063L15.875 6.14108L12.0239 9.92949L12.933 15.2788L8.17269 12.7532Z"
                                                fill="#FFD600" stroke="transparent"></path>
                                        </svg>
                                    </div>
                                    <span class="text-black font-bold">5.0 (130)</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="w-full ms-auto">
                                    <div class="portfolio-grid">
                                        <div class="grid grid-cols-4  lg:grid-cols-2 gap-1 lg:gap-2">
                                            @foreach (range(1,4) as $index)
                                                <img src="{{ asset("assets/images/placeholders/{$index}.jpg") }}"
                                                    class="w-full lg:w-20 aspect-square object-cover rounded-lg"
                                                    alt="Portfolio image {{ $index }}"
                                                    loading="lazy">
                                            @endforeach
                                        </div>
                                        
                                        <button class="w-full mt-2 px-4 py-2.5 text-sm font-medium text-white bg-black rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 transition-colors"
                                                aria-label="View all services">
                                            نمایش تمام خدمات
                                        </button>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                    

                    

                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div id="map-container" class="half lg:w-1/2 bg-gray-200 h-screen">
            <div id="map"></div>
        </div>
    </div>

@endsection


@section('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Initialize Leaflet map
        var map = L.map('map').setView([29.384016, -94.902549], 12); // Texas City coords

        // Add tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add some markers (example locations)
        L.marker([29.384016, -94.902549]).addTo(map)
            .bindPopup('<b>Locs By Jas</b><br>RazorSharp Barbershop');
        L.marker([29.764016, -95.902549]).addTo(map)
            .bindPopup('<b>Anyasbraid</b><br>Anyasbraid Studio');
        L.marker([29.604016, -94.902549]).addTo(map)
            .bindPopup('<b>Sean Dapper</b><br>Sean Dapper Studio');
    </script>
@endsection
