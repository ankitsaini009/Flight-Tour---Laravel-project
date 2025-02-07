@extends('frontend.layout.main')

@section('manage_front')
<section class="lg:pb-[128px] md:pb-20 pb-10">
    <div class="bg-[#1157791a] py-3 md:overflow-x-unset overflow-x-auto whitespace-nowrap md:whitespace-normal">
        <div class="container flex items-center mx-auto gap-x-[15px] ">
            <a href="#" class="text-base  text-[#1a1e1fcc] ">Recommended Hotels</a>
            <i class="fa-solid fa-angle-right text-[#434849] "></i>
            <a href="#" class="text-base  text-[#1a1e1fcc]">Indian Hotels</a>
            <i class="fa-solid fa-angle-right text-[#434849] "></i>
            <a href="#" class="text-base  text-[#1a1e1fcc]">New Delhi</a>
            <i class="fa-solid fa-angle-right text-[#434849] "></i>
            <a href="#" class="text-base font-medium text-dark-blue">Hotel Tara Mandal</a>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-12 lg:gap-[15px] gap-2 md:mt-[30px] mt-5">
            <div class="col-span-12 md:col-span-8">
                <img src="{{asset('front_assets/images/flight-tour-hotel-detail-one.webp')}}" alt="hotel-tour" width="833" height="400"
                    class="w-full rounded-[10px] h-full">
            </div>
            <div class="col-span-12 md:col-span-4">
                <div class="grid grid-cols-2  lg:gap-x-4 gap-x-2 lg:mb-3.5 mb-2">
                    <img src="{{asset('front_assets/images/flight-tour-hotel-detail-two.webp')}}" width="168" height="193"
                        class="w-full  rounded-[10px]">
                    <img src="{{asset('front_assets/images/flight-tour-hotel-detail-three.webp')}}" width="168" height="193"
                        class="w-full  rounded-[10px]">
                </div>
                <div class="grid grid-cols-2 lg:gap-x-4 gap-x-2">
                    <img src="{{asset('front_assets/images/flight-tour-hotel-detail-four.webp')}}" width="168" height="193"
                        class="w-full  rounded-[10px]">
                    <div class="relative bg-img-color">
                        <img src="{{asset('front_assets/images/flight-tour-hotel-detail-five.webp')}}" width="168" height="193"
                            class="w-full  rounded-[10px]">
                        <a href="#"
                            class="absolute left-0 lg:text-[22px] text-base font-medium text-white translate-x-1/2 translate-y-1/2 bottom-1/2 right-1/2 text-center">View
                            All</a>
                    </div>

                </div>
            </div>
        </div>

        <div
            class="flex items-center justify-between border border-[#CBCFD2] rounded py-3 lg:px-5 my-5 px-2 flex-wrap ">
            <div>
                <ul class="flex items-center lg:gap-x-[30px] md:gap-x-2 gap-x-4 flex-wrap">
                    <li><a href="#" class="xl:text-base md:text-sm text-xs text-[#041614]">Overview</a></li>
                    <li><a href="#" class="xl:text-base md:text-sm text-xs text-[#041614]">Rooms</a></li>
                    <li><a href="#" class="xl:text-base md:text-sm text-xs text-[#041614]">Things to do</a></li>
                    <li><a href="#" class="xl:text-base md:text-sm text-xs text-[#041614]">Facilities</a></li>
                    <li><a href="#" class="xl:text-base md:text-sm text-xs text-[#041614]">Reviews</a></li>
                    <li><a href="#" class="xl:text-base md:text-sm text-xs text-[#041614]">Location</a></li>
                    <li><a href="#" class="xl:text-base md:text-sm text-xs text-[#041614]">Policies</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-3 md:mt-0 lg:gap-x-8 gap-x-2 ">
                <p class="flex items-center"><span
                        class="text-sm text-[#505673] inline-block lg:mr-3 mr-2">from</span><small
                        class="text-lg text-[#041614]">Rs.</small><span
                        class="lg:text-[34px] text-3xl  text-[#041614] font-semibold">2,500</span></p>
                <a href="#"
                    class="px-2 py-2 text-base font-medium rounded lg:py-3 lg:px-5 lg:text-xl bg-dark-blue text-light-brown">Grab
                    This Deal</a>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-2 lg:gap-5">
            <div class="col-span-12 md:col-span-8">
                <div class="border border-[#CBCFD2] rounded md:p-5 p-3">
                    <div class="flex items-center  xl:gap-x-[10px] gap-x-2">
                        <p
                            class="text-[#45C9A5] flex items-center rounded-[100px] gap-2 text-sm font-medium bg-[#45c9a51a] py-1 px-[6px]">
                            <img src="{{asset('front_assets/images/flight-tour-badge-check-icon.svg')}}">Verified by Abhiyas Tour
                        </p>
                        <p
                            class="text-[#F59E00] flex items-center rounded-[100px] gap-2 text-sm font-medium bg-[#f59e001a] py-1 px-[6px]">
                            <i class="fa-solid fa-star"></i>4.5/5
                        </p>
                    </div>
                    <div class="flex items-center gap-4 mt-3.5 mb-2.5">
                        <h3 class="text-[#041614] text-[28px] font-semibold">Agrasen Rooms</h3>
                        <a href="#"
                            class="text-xs underline text-dark-blue text-underline decoration-dark-blue">View on
                            Map</a>
                    </div>
                    <p class="text-[#505673] md:text-sm text-xs flex items-center gap-1 "><i
                            class="text-lg fa-solid fa-location-dot text-dark-blue"></i>Noida, New Delhi and NCR -
                        23.1 km to center</p>
                    <hr class="my-3.5 text-[#CBCFD2]">
                    <p class="text-base text-[#505673]">Welcome to Agrasen Rooms, a charming hotel in the heart of
                        Delhi. Enjoy modern amenities,
                        comfortable accommodations, and personalized service, all within easy reach of the city’s
                        top attractions. Your perfect stay awaits! <a href="#" class="font-medium text-dark-blue">
                            Read More...</a></p>
                </div>
                <div class="border border-[#CBCFD2] rounded md:p-5 p-3 my-5">
                    <h2 class="text-[#041614] font-medium text-2xl mb-3">Hotel Features</h2>
                    <div class="flex flex-wrap gap-3">
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-breakfast-icon.svg')}}" alt="breakfast" width="24"
                                height="24"> <span class="block text-[#041614] font-medium text-xs mt-[5px]">Very
                                good breakfast</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-swimming-pool-icon.svg')}}" alt="swimming-pool" width="24"
                                height="24"> <span class="block text-[#041614] font-medium text-xs mt-[5px]">Outdoor
                                swimming pool</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-Restaurants-icon.svg')}}" alt="Restaurants" width="24"
                                height="24"> <span class="block text-[#041614] font-medium text-xs mt-[5px]">2
                                Restaurants</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-detail-bathroom-icon.svg')}}" alt="bathroom" width="24"
                                height="24"> <span class="block text-[#041614] font-medium text-xs mt-[5px]">Private
                                bathroom</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-wellnesscenter-icon.svg')}}" alt="wellnesscenter"
                                width="24" height="24"> <span
                                class="block text-[#041614] font-medium text-xs mt-[5px]">Spa & wellness
                                centre</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-roomservices-icon.svg')}}" alt="roomservices" width="24"
                                height="24"> <span class="block text-[#041614] font-medium text-xs mt-[5px]">Room
                                Service</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-detail-wifi-icon.svg')}}" alt="wifi" width="24"
                                height="24"> <span class="block text-[#041614] font-medium text-xs mt-[5px]">Free
                                wifi</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-parking-icon.svg')}}" alt="parking" width="24"
                                height="24"> <span class="block text-[#041614] font-medium text-xs mt-[5px]">Free
                                on-site parking</span></p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-nonsmoking-icon.svg')}}" alt="nonsmoking" width="24"
                                height="24"> <span
                                class="block text-[#041614] font-medium text-xs mt-[5px]">Non-smoking rooms</span>
                        </p>
                        <p class="border border-[#CBCFD2] rounded p-2.5"><img
                                src="{{asset('front_assets/images/flight-tour-hotel-family-icon.svg')}}" alt="family" width="24" height="24">
                            <span class="block text-[#041614] font-medium text-xs mt-[5px]">Family rooms</span>
                        </p>

                    </div>
                </div>
                <div class="border border-[#CBCFD2] rounded md:p-5 p-3">
                    <h2 class="text-[#041614] font-medium text-2xl">Space & Rooms</h2>
                    <hr class="my-3">
                    <p class="text-[#041614] text-lg font-medium">Villa <span
                            class="text-base text-[#04161499]">(Room size: 372 m2/4004 ft2) </span></p>
                    <p
                        class="flex items-center md:gap-3 font-medium text-[#041614] lg:text-lg md:text-base gap-1.5 text-xs mt-2.5 mb-[18px]">
                        Max 8 guests<span class="inline-block h-5 bg-[#CBCFD2] w-[1px]"></span>1 bedroom/studio<span
                            class="inline-block h-5 bg-[#CBCFD2] w-[1px]"></span>1 bathroom<span
                            class="inline-block h-5 bg-[#CBCFD2] w-[1px]"></span>Kitchen</p>
                    <div class="flex flex-wrap items-center md:gap-[18px] gap-3">
                        <div class="border border-[#CBCFD2] rounded p-2.5 xl:w-[202px] lg:w-40 w-32">
                            <h3 class="text-lg text-[#041614] font-medium">Bedroom 1</h3>
                            <span class="block my-2.5 text-xs text-[#041614cc] font-medium">2 double bed</span>
                            <img src="{{asset('front_assets/images/flight-tour-hotel-bed-icon.svg')}}" alt="bed-icon" width="30" height="30">
                        </div>
                        <div class="border border-[#CBCFD2] rounded p-2.5 xl:w-[314px] w-72">
                            <h3 class="text-lg text-[#041614] font-medium">Bedroom 1</h3>
                            <span class="block my-2.5 text-xs text-[#041614cc] font-medium">Private bathroom,
                                Toiletries, Whirlpool bathroom</span>
                            <img src="{{asset('front_assets/images/flight-tour-hotel-detail-bathroom-icon.svg')}}" alt="bathroom-icon"
                                width="30" height="30">
                        </div>
                        <div class="border border-[#CBCFD2] rounded p-2.5 xl:w-[202px] lg:w-40 w-32">
                            <h3 class="text-lg text-[#041614] font-medium">Bedroom 1</h3>
                            <span class="block my-2.5 text-xs text-[#041614cc] font-medium">Full kitchen</span>
                            <img src="{{asset('front_assets/images/flight-tour-hotel-kitchen-icon.svg')}}" alt="kitchen" width="30"
                                height="30">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-span-12 md:col-span-4">
                <div class="border border-[#CBCFD2] rounded lg:px-4 px-2 py-3.5 mb-5">
                    <p class="flex items-center justify-between"><span
                            class="text-base font-semibold lg:text-lg text-black-400">4.2 Review score</span><a
                            href="#" class="lg:text-sm text-xs font-medium text-[#115779cc]">View all reviews</a>
                    </p>
                    <span class="lg:text-sm text-xs font-medium text-[#115779cc]">124 reviews</span>
                </div>
                <div class="border border-[#CBCFD2] rounded lg:px-4 px-2 py-3.5">
                    <div
                        class="relative mb-[18px] before:bg-[#00000026] before:content-[''] before-top-0 before-left-0 before:absolute before:w-full before:h-full before:rounded cursor-pointer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                            width="100%" height="160" frameborder="0" style="border:0" class="rounded "></iframe>

                        <div
                            class="absolute bottom-1/2 right-1/2 translate-x-1/2 translate-y-1/2 flex items-center text-white rounded-md bg-dark-blue gap-x-1 py-1.5 lg:px-2.5 px-2">
                            <i class="fa-solid fa-location-dot"></i><a herf="#" class="text-sm">View on Map</a>
                        </div>
                    </div>
                    <div>
                        <p class="flex items-center justify-between text-lg font-semibold text-black-400">
                            <span>Check-in</span><span>Check-out</span>
                        </p>
                        <p
                            class="flex items-center justify-between lg:text-sm text-xs text-[#115779cc] font-medium">
                            <span>12:00 AM to 12:00 AM</span> <span>until 03:00 PM</span>
                        </p>
                    </div>
                    <hr class="my-4">
                    <div>
                        <h3 class="mb-3.5 text-base font-medium text-black">Popular Landmarks</h3>
                        <ul>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20"> Qutub Minar</span> <span
                                    class="text-[#1a1e1fe6]">33.33 km</span></li>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20">Lodhi Garden</span> <span
                                    class="text-[#1a1e1fe6]">28.4 km</span></li>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20"> Lotus Temple</span> <span
                                    class="text-[#1a1e1fe6]">23.3 km</span></li>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20"> Gurdwara Bangla Sahib</span> <span
                                    class="text-[#1a1e1fe6]">11.45 km</span></li>
                            <li class="flex items-center justify-between text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20"> India Gate</span> <span
                                    class="text-[#1a1e1fe6]">11.45 km</span></li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div>
                        <h3 class="mb-3.5 text-base font-medium text-black">Closest Landmarks</h3>
                        <ul>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20">Tau Devi Lal Cricket Stadium</span> <span
                                    class="text-[#1a1e1fe6]">460m</span></li>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20">Tau Devi Lal Stadium</span> <span
                                    class="text-[#1a1e1fe6]">700m</span></li>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20"> Tau Devi Lal Football Stadium</span> <span
                                    class="text-[#1a1e1fe6]">250m</span></li>
                            <li class="flex items-center justify-between mb-3 text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20"> Apollo Tyres Ltd</span> <span
                                    class="text-[#1a1e1fe6]">350m</span></li>
                            <li class="flex items-center justify-between text-xs lg:text-sm "><span
                                    class="flex items-center text-black-400 gap-x-1"><img
                                        src="{{asset('front_assets/images/flight-tour-hotel-Qutub-Minar-icons.svg')}}" alt="Qutub Minar"
                                        width="20" height="20">Medanta</span> <span
                                    class="text-[#1a1e1fe6]">420m</span></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

        <div class="border border-[#CBCFD2] rounded p-5 overflow-auto my-5">
            <h2 class="text-2xl font-medium text-black-400">Availability</h2>
            <div class="flex  md:gap-[18px] my-3 md:flex-row flex-col  gap-3">
                <p class="border border-[#CBCFD2] rounded px-2.5 py-1.5 flex items-center gap-x-2.5 h-[39px]"><img
                        src="{{asset('front_assets/images/flight-tour-hotel-calendar-icon.svg')}}" width="20" height="20"> <span
                        class="text-sm font-medium text-black-400">Tue 5 Nov - Fri 15 Nov</span></p>
                <p class="border border-[#CBCFD2] rounded px-2.5 py-1.5 flex items-center gap-x-2.5 h-[39px]"><img
                        src="{{asset('front_assets/images/flight-tour-hotel-user-icon.svg')}}" width="20" height="20"> <span
                        class="text-sm font-medium text-black-400">2 adults - 2 children - 1 big room</span></p>
                <button
                    class="py-3 px-[19px] text-sm font-medium rounded bg-dark-blue text-light-brown leading-[120%] h-[39px] hover:bg-transparent hover:text-dark-blue hover:border hover:border-dark-blue transition">Change
                    search</button>
            </div>
            <div>
                <table class="border table-fixed lg:whitespace-normal whitespace-nowrap border-slate-300">

                    <tr>
                        <th
                            class="py-2 xl:px-2.5 px-1.5 bg-[#1157790D] border border-slate-300 text-start text-sm text-[#041614] font-medium  xl:w-[23%] w-[24%]">
                            Room type</th>
                        <th
                            class="py-2 px-2.5 bg-[#1157790D] border border-slate-300 text-start text-sm text-[#041614] font-medium">
                            Number of guests</th>
                        <th
                            class="py-2 xl:px-2.5 px-1.5 bg-[#1157790D] border border-slate-300 text-start text-sm text-[#041614] font-medium">
                            Price for 10 nights</th>
                        <th
                            class="py-2 xl:px-2.5 px-1.5 bg-[#1157790D] border border-slate-300 text-start text-sm text-[#041614] font-medium  w-[22%]">
                            Your Choices</th>
                        <th
                            class="py-2 xl:px-2.5 px-1.5 bg-[#1157790D] border border-slate-300 text-start text-sm text-[#041614] font-medium">
                            Select rooms</th>
                        <th
                            class="py-2 xl:px-2.5 px-1.5 bg-[#1157790D] border border-slate-300 text-start text-sm text-[#041614] font-medium w-[15%]">
                        </th>
                    </tr>


                    <tr>
                        <td class="py-3.5 px-2.5 align-top" rowspan="4">
                            <h2 class="text-[#041614] font-semibold text-[17px] underline underline-offset-4">
                                Deluxe Twin Room</h2>
                            <p class="flex items-center gap-x-2.5 my-2.5"><span
                                    class="text-sm text-[#041614] font-medium">2 single beds</span><img
                                    src="{{asset('front_assets/images/flight-tour-hotel-bed-icon.svg')}}" width="20" height="20"><img
                                    src="{{asset('front_assets/images/flight-tour-hotel-bed-icon.svg')}}" width="20" height="20"></p>
                            <div class="flex items-center gap-x-2.5">
                                <p class=" text-sm text-[#041614] font-medium"><span
                                        class="text-[#008234] font-bold">FREE </span>cot available on request
                                </p><img src="{{asset('front_assets/images/flight-tour-hotel-cot-icon.svg')}}" width="20" height="20">
                            </div>
                            <p class="text-sm text-[#505673] mt-2.5 mb-4 w-[270px]  whitespace-normal">Providing
                                free toiletries and
                                bathrobes, this twin room includes a private
                                bathroom with a walk-in shower, a bath and a hairdryer. The spacious
                                air-conditioned twin room provides a flat-screen TV with satellite channels, a
                                private entrance, a minibar, a seating area as well as pool views. The unit
                                offers 2 beds.</p>

                            <div>
                                <ul class="flex flex-wrap items-center gap-[15px]">
                                    <li class="flex gap-x-2.5 items-center text-xs text-[#041614]"><img
                                            src="{{asset('front_assets/images/flight-tour-hotel-meter-icon.svg')}}" width="20" height="20">35
                                        m2</li>
                                    <li class="flex gap-x-2.5 items-center text-xs text-[#041614]"><img
                                            src="{{asset('front_assets/images/flight-tour-hotel-swimming-pool-icon.svg')}}" width="20"
                                            height="20">Pool view</li>
                                    <li class="flex gap-x-2.5 items-center text-xs text-[#041614]"><img
                                            src="{{asset('front_assets/images/flight-tour-hotel-airconditioning-icon.svg')}}" width="20"
                                            height="20">Air conditioning</li>
                                    <li class="flex gap-x-2.5 items-center text-xs text-[#041614]"><img
                                            src="{{asset('front_assets/images/flight-tour-hotel-minibar-icon.svg')}}" width="20"
                                            height="20">Minibar</li>
                                    <li class="flex gap-x-2.5 items-center text-xs text-[#041614]"><img
                                            src="{{asset('front_assets/images/flight-tour-hotel-detail-wifi-icon.svg')}}" width="20"
                                            height="20">Free Wifi</li>
                                    <li class="flex gap-x-2.5 items-center text-xs text-[#041614]"><img
                                            src="{{asset('front_assets/images/flight-tour-hotel-bathroom-icon.svg')}}" width="20"
                                            height="20">Private bathroom</li>
                                    <li class="flex gap-x-2.5 items-center text-xs text-[#041614]"><img
                                            src="{{asset('front_assets/images/flight-tour-hotel-tv-icon.svg')}}" width="20" height="20">Flat
                                        tv screen</li>

                                </ul>
                            </div>
                            <hr class="mt-3.5 mb-[9px]">
                            <div>
                                <ul class="flex flex-wrap items-center gap-[15px]">
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Free toiletries</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Bathrobe</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Safety deposit box</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Toilet</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Sofa</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Bath or shower</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Hardwood or parquet floor</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Towels</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Socket near the bed</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Desk</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Slippers</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Telephone</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Video</span>
                                    </li>
                                    <li class="flex items-center gap-x-2">
                                        <i class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                            class="text-[#041614] text-sm">Satellite channels</span>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top ">
                            <p class="flex items-center gap-x-2.5 text-sm tet-[#041614] font-medium"><i
                                    class="fa-solid fa-user"></i>
                                <span>2</span>
                            </p>
                        </td>
                        <td class="align-top border border-slate-300 py-3.5 xl:px-2.5 px-1.5"><span
                                class="text-base font-semibold text-[#041614]">₹ 169,490</span> <span
                                class="block text-xs text-[#041614cc] font-medium">+₹ 30,508
                                taxes and charges</span></td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top">
                            <p class="flex items-center gap-x-[5px]"><img
                                    src="{{asset('front_assets/images/flight-tour-hotel-breakfast-icon.svg')}}"> <span
                                    class="text-[#041614] xl:text-sm text-xs font-semibold">Very good breakfast
                                    ₹ 1,415</span></p>
                            <ul class="mt-[15px] mb-[22px]">

                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Includes 1000INR food/drink
                                        credit</span>
                                </li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Free cancellation before 5
                                        November
                                        2024</span></li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">No prepayment needed – pay at
                                        the
                                        property</span></li>
                                <li class="text-[#E72A2A] flex items-center gap-x-2"><span
                                        class="w-2 h-2 bg-[#E72A2A] rounded-full"></span><span
                                        class="text-xs xl:text-sm">Only
                                        1 room left on our site</span></li>
                            </ul>

                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top text-center">
                            <select class="border border-[#CBCFD2] rounded-sm p-2.5 w-[80px]">
                                <option>0</option>
                                <option>0</option>
                                <option>0</option>
                            </select>
                        </td>
                        <td rowspan="4" class="  py-3.5 xl:px-2.5 px-1.5  align-top text-center"> <button
                                class="py-3 xl:px-[19px] px-3 xl:text-lg text-base font-medium rounded bg-dark-blue text-light-brown leading-[120%] mb-[18px] hover:bg-transparent hover:text-dark-blue hover:border hover:border-dark-blue transition">I’ll Reserve</button>
                            <p class="text-[#041614] flex items-center justify-center xl:gap-x-2 gap-x-1"><span
                                    class="w-1.5 h-1.5 bg-[#041614] rounded-full"></span><span
                                    class="xl:text-xs text-[11px]">Confirmation is immediate</span></p>
                        </td>
                    </tr>
                    <tr>

                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top ">
                            <p class="flex items-center gap-x-2.5 text-sm tet-[#041614] font-medium"><i
                                    class="fa-solid fa-user"></i>
                                <span>3</span>
                            </p>
                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5  align-top"><span
                                class="text-base font-semibold text-[#041614]">₹ 194,490</span> <span
                                class="block text-xs text-[#041614cc] font-medium">+₹ 35,008 taxes and
                                charges</span></td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top">
                            <p class="flex items-center gap-x-[5px]"><img
                                    src="{{asset('front_assets/images/flight-tour-hotel-breakfast-icon.svg')}}"> <span
                                    class="text-[#041614] xl:text-sm text-xs font-semibold">Very good breakfast
                                    ₹ 1,415</span></p>
                            <ul class="mt-[15px] mb-[22px]">

                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Includes 1000INR food/drink
                                        credit</span>
                                </li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Free cancellation before 5
                                        November
                                        2024</span></li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">No prepayment needed – pay at
                                        the
                                        property</span></li>
                                <li class="text-[#E72A2A] flex items-center gap-x-2"><span
                                        class="w-2 h-2 bg-[#E72A2A] rounded-full"></span><span
                                        class="text-xs xl:text-sm">Only
                                        1 room left on our site</span></li>
                            </ul>

                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5  align-top text-center">
                            <select class="border border-[#CBCFD2] rounded-sm p-2.5 w-[80px]">
                                <option>0</option>
                                <option>0</option>
                                <option>0</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top ">
                            <p class="flex items-center gap-x-2.5 text-sm tet-[#041614] font-medium"><i
                                    class="fa-solid fa-user"></i>
                                <span>2</span>
                            </p>
                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5  align-top"><span
                                class="text-base font-semibold text-[#041614]">₹ 185,490</span> <span
                                class="block text-xs text-[#041614cc] font-medium">+₹ 35,008 taxes and
                                charges</span></td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top">
                            <p class="flex items-center gap-x-[5px]"><img
                                    src="{{asset('front_assets/images/flight-tour-hotel-breakfast-icon.svg')}}"> <span
                                    class="text-[#041614] xl:text-sm text-xs font-semibold">Very good breakfast
                                    ₹ 1,415</span></p>
                            <ul class="mt-[15px] mb-[22px]">

                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Includes 1000INR food/drink
                                        credit</span>
                                </li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Free cancellation before 5
                                        November
                                        2024</span></li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">No prepayment needed – pay at
                                        the
                                        property</span></li>
                                <li class="text-[#E72A2A] flex items-center gap-x-2"><span
                                        class="w-2 h-2 bg-[#E72A2A] rounded-full"></span><span
                                        class="text-xs xl:text-sm">Only
                                        1 room left on our site</span></li>
                            </ul>

                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5  align-top text-center">
                            <select class="border border-[#CBCFD2] rounded-sm p-2.5 w-[80px] ">
                                <option>0</option>
                                <option>0</option>
                                <option>0</option>
                            </select>
                        </td>
                    </tr>

                    <tr>

                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top ">
                            <p class="flex items-center gap-x-2.5 text-sm tet-[#041614] font-medium"><i
                                    class="fa-solid fa-user"></i>
                                <span>3</span>
                            </p>
                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top"><span
                                class="text-base font-semibold text-[#041614]">₹ 194,490</span> <span
                                class="block text-xs text-[#041614cc] font-medium">+₹ 35,008 taxes and
                                charges</span></td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top">
                            <p class="flex items-center gap-x-[5px]"><img
                                    src="{{asset('front_assets/images/flight-tour-hotel-breakfast-icon.svg')}}"> <span
                                    class="text-[#041614] xl:text-sm text-xs font-semibold">Very good breakfast
                                    ₹ 1,415</span></p>
                            <ul class="mt-[15px] mb-[22px]">

                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Includes 1000INR food/drink
                                        credit</span>
                                </li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">Free cancellation before 5
                                        November
                                        2024</span></li>
                                <li class="flex items-center mb-[5px] gap-x-2"><i
                                        class="fa-regular fa-circle-check text-base text-[#008234]"></i><span
                                        class="text-[#041614] xl:text-sm text-xs">No prepayment needed – pay at
                                        the
                                        property</span></li>
                                <li class="text-[#E72A2A] flex items-center gap-x-2"><span
                                        class="w-2 h-2 bg-[#E72A2A] rounded-full"></span><span
                                        class="text-xs xl:text-sm">Only
                                        1 room left on our site</span></li>
                            </ul>

                        </td>
                        <td class="border border-slate-300 py-3.5 xl:px-2.5 px-1.5 align-top text-center">
                            <select class="border border-[#CBCFD2] rounded-sm p-2.5 w-[80px]">
                                <option>0</option>
                                <option>0</option>
                                <option>0</option>
                            </select>
                        </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="border border-[#CBCFD2] rounded p-5  mt-5">
            <h2 class="text-2xl font-medium text-black-400">Guest Reviews</h2>
            <hr class="my-3">
            <div class="flex items-center gap-x-[10px] md:mt-0 mt-2">
                <div class="bg-dark-blue h-[44px] w-[44px] rounded-sm flex justify-center ">
                    <img src="{{asset('front_assets/images/flight-tour-rating-icon.svg')}}" width="28" height="28">
                </div>

                <div class="flex items-center gap-x-[15px]">
                    <span class="text-lg font-medium text-[#041614]">Very good </span>
                    <span class="block w-[9px] h-[9px] rounded-full bg-[#041614]"></span>
                    <span class="text-lg font-medium text-[#041614] ">1,101 reviews</span>
                </div>

            </div>
            <div class="mt-5">
                <h3 class="text-[#041614] font-medium text-[22px] mb-[30px]">Categories</h3>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 md:gap-[30px] gap-5 ">
                    <div class="w-full ">
                        <div class="flex justify-between mb-1 text-base font-medium dark:text-white text-[#041614]">
                            <span>Staff</span><span>7.9</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2  dark:bg-[#D9D9D9]">
                            <div class="bg-[#008234] h-2 rounded-full dark:bg-[#008234]" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="w-full ">
                        <div class="flex justify-between mb-1 text-base font-medium dark:text-white text-[#041614]">
                            <span>Staff</span><span>7.9</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2  dark:bg-[#D9D9D9]">
                            <div class="bg-[#008234] h-2 rounded-full dark:bg-[#008234]" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="w-full ">
                        <div class="flex justify-between mb-1 text-base font-medium dark:text-white text-[#041614]">
                            <span>Staff</span><span>7.9</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2  dark:bg-[#D9D9D9]">
                            <div class="bg-[#008234] h-2 rounded-full dark:bg-[#008234]" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="w-full ">
                        <div class="flex justify-between mb-1 text-base font-medium dark:text-white text-[#041614]">
                            <span>Staff</span><span>7.9</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2  dark:bg-[#D9D9D9]">
                            <div class="bg-[#008234] h-2 rounded-full dark:bg-[#008234]" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="w-full ">
                        <div class="flex justify-between mb-1 text-base font-medium dark:text-white text-[#041614]">
                            <span>Staff</span><span>7.9</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2  dark:bg-[#D9D9D9]">
                            <div class="bg-[#008234] h-2 rounded-full dark:bg-[#008234]" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="w-full ">
                        <div class="flex justify-between mb-1 text-base font-medium dark:text-white text-[#041614]">
                            <span>Staff</span><span>7.9</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2  dark:bg-[#D9D9D9]">
                            <div class="bg-[#008234] h-2 rounded-full dark:bg-[#008234]" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection