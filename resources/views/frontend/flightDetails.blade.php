@extends('frontend.layout.main')
@section('manage_front')

<section>

    <div class="bg-[#1157791a] py-3">

        <div class="container flex items-center mx-auto gap-x-4">

            <a href="#" class="text-base text-black-400 ">Recommended Flights</a>

            <i class="fa-solid fa-angle-right text-dark-blue"></i>

            <a href="#" class="text-base text-dark-blue">Flight Detail</a>

        </div>

    </div>

    <div class="container mx-auto">

        <div class="grid grid-cols-12 gap-5 pt-[30px] md:pb-[128px] pb-10">

            <div class="col-span-12 md:col-span-8">

                <img src="{{asset('front_assets/images/flight-tour-indigo.svg')}}" alt="indigo" width="94" height="20">

                <div class="w-full xl:w-4/5 md:w-11/12">

                    <h2 class="text-[40px] text-[#041614] font-semibold my-[15px]">{{ $flightDetails['itineraries'][0]['segments'][0]['departure']['iataCode'] }} to {{ $flightDetails['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</h2>

                    <p class="text-base text-[#505673]">Looking to travel from the vibrant city of {{ $flightDetails['itineraries'][0]['segments'][0]['departure']['iataCode'] }} to the bustling capital, {{ $flightDetails['itineraries'][0]['segments'][0]['arrival']['iataCode'] }} ? Our flight booking website offers a seamless experience to find and book your ideal flight. Whether you're traveling for business, leisure, or a quick getaway, we provide a range of options to suit your schedule and budget.</p><br>

                    <p class="text-base text-[#505673]">Enjoy a hassle-free booking process with real-time flight availability, competitive prices, and user-friendly filters to find the best flights based on your preferences. With multiple airlines operating this popular route, you can choose from various departure times, flight durations, and amenities.</p>

                </div>

                <hr class="border-[#8F8F8F] md:my-[30px] my-5 border-t" />

                <div>

                    <h3 class="text-xl font-medium text-black-400">Facilities by Indigo</h3>

                    <span class="text-sm text-[#1a1e1fcc]">Facilities provide during the travel time</span>

                    <div class="flex flex-wrap gap-5 mt-5">

                        <div

                            class="border border-[#4F575E] rounded-md gap-[10px] px-3 py-[10px] h-12 items-center flex">

                            <img src="{{asset('front_assets/images/flight-tour-jet-icon.svg')}}" alt="jet-icon" width="28" height="28">

                            <p class="text-sm font-medium text-black-400">A320 Narrowbody jet</p>

                        </div>

                        <div

                            class="border border-[#4F575E] rounded-md gap-[10px] px-3 py-[10px] h-12 items-center flex">

                            <img src="{{asset('front_assets/images/flight-tour-beverages-icon.svg')}}" alt="beverages-icon" width="28"

                                height="28">

                            <p class="text-sm font-medium text-black-400">Beverages Available (Paid)</p>

                        </div>

                        <div

                            class="border border-[#4F575E] rounded-md gap-[10px] px-3 py-[10px] h-12 items-center flex">

                            <img src="{{asset('front_assets/images/flight-tour-streaming-icon.svg')}}" alt="streaming-icon" width="28"

                                height="28">

                            <p class="text-sm font-medium text-black-400">Streaming Entertainment (Paid)</p>

                        </div>

                        <div

                            class="border border-[#4F575E] rounded-md gap-[10px] px-3 py-[10px] h-12 items-center flex">

                            <img src="{{asset('front_assets/images/flight-tour-meal-icon.svg')}}" alt="meal-icon" width="28" height="28">

                            <p class="text-sm font-medium text-black-400">Light Meal Available (Paid)</p>

                        </div>

                        <div

                            class="border border-[#4F575E] rounded-md gap-[10px] px-3 py-[10px] h-12 items-center flex">

                            <img src="{{asset('front_assets/images/flight-tour-layout.svg')}}" alt="layout-icon" width="28" height="28">

                            <p class="text-sm font-medium text-black-400">3-3 Layout</p>

                        </div>





                    </div>

                </div>

                <hr class="border-[#8F8F8F] md:my-[30px] my-5 border-t" />

                <div>

                    <h3 class="text-xl font-medium text-black-400">Flight Travelling Details</h3>

                    <span class="text-sm text-[#1a1e1fcc]">Travelling details from {{ $flightDetails['itineraries'][0]['segments'][0]['departure']['iataCode'] }} to {{ $flightDetails['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</span>

                    <div class="border border-[#8F8F8F] rounded-lg py-5 md:px-8 px-3 xl:w-[65%] lg:w-9/12 w-full my-5">

                        <h3 class="text-xl font-medium text-black-400">Flight to {{ $flightDetails['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</h3>

                        <div class="flex flex-col gap-3 mt-4 md:flex-row ">

                            <div class="flex flex-row items-start justify-between md:flex-col">

                                <p><span class="block text-lg font-medium text-black-400">{{ \Carbon\Carbon::parse($flightDetails['itineraries'][0]['segments'][0]['departure']['at'])->format('d M Y') }}</span><span class="text-xs text-[#1a1e1fcc]">{{ $flightDetails['itineraries'][0]['segments'][0]['departure']['iataCode'] }}</span></p>

                                <span class="text-[#1a1e1fcc] text-base font-medium">{{$convertedTime}}</span>

                                <p><span class="block text-lg font-medium text-black-400">{{ \Carbon\Carbon::parse($flightDetails['itineraries'][0]['segments'][0]['arrival']['at'])->format('H:i') }}</span><span class="text-xs text-[#1a1e1fcc]">{{ $flightDetails['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</span></p>

                            </div>

                            <img src="{{asset('front_assets/images/flight-tour-timing-flight-icon-rotate.svg')}}" class="hidden md:block">

                            <img src="{{asset('front_assets/images/Flight-tour-timing-flight-icon.svg')}}" class="block md:hidden">

                            <div class="flex flex-col items-start justify-between gap-3 md:gap-0">

                                <p class="lg:text-lg text-base text-[#1a1e1fcc] flex items-center"><strong>{{ $flightDetails['itineraries'][0]['segments'][0]['departure']['iataCode'] }} ({{ $flightDetails['itineraries'][0]['segments'][0]['departure']['iataCode'] }})</strong><span class="inline-block w-2 h-2 bg-black-400 rounded-full mx-[10px]"></span>N\A</p>

                                <div>

                                    <div class="flex items-center mb-1 gap-x-4"><img src="{{asset('front_assets/images/flight-tour-indigo.svg')}}">

                                        <span class="lg:text-lg text-base text-[#1a1e1fcc]">{{ $flightDetails['validatingAirlineCodes'][0] ?? 'Unknown' }}</span>

                                    </div>

                                    <p class="lg:text-lg text-base text-[#1a1e1fcc] flex items-center">Economy Class<span class="inline-block w-[6px] h-[6px] bg-[#1a1e1fcc] rounded-full mx-2"></span>{{ $flightDetails['itineraries'][0]['segments'][0]['number']}}</p>

                                </div>

                                <p class="lg:text-lg text-base text-[#1a1e1fcc] flex items-center"><strong>{{ $flightDetails['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</strong><span class="inline-block w-2 h-2 bg-black-400 rounded-full mx-[10px]"></span>N\A</p>

                            </div>

                        </div>

                    </div>

                </div>

                <hr class="border-[#8F8F8F] md:my-[30px] my-5 border-t" />

                <div>

                    <h3 class="text-xl font-medium text-black-400 md:mb-3.5 mb-2">One-way tickets</h3>

                    <p class="text-base text-[#505673] xl:w-4/5 md:w-11/12 w-full">We’ve combined separate one-way tickets for this trip, each with its own rules for changes

                        and cancellations. For details, view our <span class="font-medium text-dark-blue"> terms and conditions</span>.</p>

                </div>

            </div>

            <div class="col-span-12 md:col-span-4">

                <div class="bg-[#F5F5F5] rounded  lg:p-[22px] p-4 border border-[#11577933]">

                    <h2 class="mb-6 text-2xl font-medium text-black-400">BOOK A TOUR</h2>

                    <div class="flex items-center justify-between mb-4">

                        <label class="text-lg font-medium text-black">From:</label>

                        <div class="bg-white border-[#11577966] rounded-sm py-1.5 lg:px-[15px] px-2 flex items-center lg:gap-6 gap-2 border lg:w-[201px] w-[120px]"><i class="fa-regular fa-calendar-days text-dark-blue"></i> <span>09/11/2024</span></div>

                    </div>

                    <div class="flex items-center justify-between">

                        <label class="text-lg font-medium text-black">To:</label>

                        <div class="bg-white border-[#11577966] rounded-sm py-1.5 lg:px-[15px] px-2 flex items-center lg:gap-6 gap-2 border lg:w-[201px] w-[120px]"><i class="fa-regular fa-calendar-days text-dark-blue"></i> <span>09/11/2024</span></div>

                    </div>

                    <hr class="border-[#8F8F8F] lg:my-[25px] my-5 border-t" />



                    <div>

                        <h3 class="mb-1 text-lg font-medium text-black">Total Guests:</h3>

                        <div class="flex items-center justify-between mb-4"><label class="text-sm font-medium text-black lg:text-base">Adults</label>

                            <select name="" class="bg-white border-[#11577966] rounded-sm py-1.5 lg:px-[15px] px-2 lg:w-[201px] w-[120px]  border">

                                <option value="">12</option>

                                <option value="">12</option>

                                <option value="">12</option>

                            </select>



                        </div>

                        <div class="flex items-center justify-between"><label class="text-sm font-medium text-black lg:text-base">Children</label>

                            <select name="" class="bg-white border-[#11577966] rounded-sm py-1.5 lg:px-[15px] px-2 lg:w-[201px] w-[120px]  border">

                                <option value="">12</option>

                                <option value="">12</option>

                                <option value="">12</option>

                            </select>



                        </div>

                    </div>

                    <hr class="border-[#8F8F8F] lg:my-[25px] my-5 border-t" />

                    <p class="flex items-center justify-between"><span class="text-lg font-medium text-black">Total:</span><span class="md:text-[28px] text-lg font-medium text-dark-blue">{{ optional($flightDetails['price'])['currency'] ?? '' }} {{ optional($flightDetails['price'])['base'] ?? 'N/A' }}</span></p>

                    <a href="#" class="flex items-center justify-center w-full mt-6 text-xl font-medium rounded text-light-brown bg-dark-blue h-14">Book Now</a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection