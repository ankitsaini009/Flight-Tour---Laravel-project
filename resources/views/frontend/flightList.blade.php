@extends('frontend.layout.main')



@section('manage_front')



<section>

    <div class="container mx-auto">

        <div class="flex py-0 md:py-6 select-option ">

            <form class="grid items-center justify-center text-center md:gap-5 md:flex gird-row gap-y-2">

                <div class="flex items-center gap-3">

                    <input type="radio" id="One_way" name="Trip" value="One_way"

                        class="block cursor-pointer w-7 h-7 accent-dark-blue"

                        {{ isset($myTrip) && ($myTrip === "One_way") ? 'checked' : '' }}>

                    <label for="One_way" class="block text-lg text-light-gray">One Way</label>

                </div>



                <div class="flex items-center gap-3">

                    <input type="radio" id="Round_Trip" name="Trip" value="Round_Trip"

                        class="block cursor-pointer w-7 h-7 accent-dark-blue"

                        {{ isset($myTrip) && ($myTrip === "Round_Trip") ? 'checked' : '' }}>

                    <label for="Round_Trip" class="block text-lg text-light-gray">Round Trip</label>

                </div>



                <div class="flex items-center gap-3">

                    <input type="radio" id="Multicity" name="Trip" value="Multicity"

                        class="block cursor-pointer w-7 h-7 accent-dark-blue"

                        {{ isset($myTrip) && ($myTrip === "Multicity") ? 'checked' : '' }}>

                    <label for="Multicity" class="block text-lg text-light-gray">Multi City</label>

                </div>

            </form>



        </div><br>

        <div class="grid grid-cols-2 gap-5">

            <div class="flex items-center col-span-6 gap-4">

                <div class="border border-[#4F575E] rounded-md py-2 px-[10px] flex items-center gap-3 w-full h-14">

                    <i class="text-2xl fa-solid fa-location-dot text-[#041614]"></i>

                    <p class="text-base"><span class="block text-[12px] opacity-80">Flying from</span>{{ substr($myorigin, 0, strpos($myorigin, ' (')) }} ({{ substr($myorigin, strpos($myorigin, '(') + 1, 3) }})</p>

                </div>

                <i class="text-2xl text-dark-blue fa-solid fa-right-left"></i>

                <div class="border border-[#4F575E] rounded-md py-2 px-[10px] flex items-center gap-3 w-full h-14">

                    <i class="text-2xl fa-solid fa-location-dot text-[#041614]"></i>

                    <p class="text-base"><span class="block text-[12px] opacity-80">Flying to</span>{{ substr($mydestination, 0, strpos($mydestination, ' (')) }} ({{ substr($mydestination, strpos($mydestination, '(') + 1, 3) }})</p>

                </div>

            </div>

            <div class="flex col-span-6 gap-5">

                <div class="border border-[#4F575E] rounded-md py-2 px-[10px] flex items-center gap-3 w-full h-14">

                    <i class="text-2xl fa-regular fa-calendar-days text-[#041614]"></i>

                    <p class="text-base"><span class="block text-[12px] opacity-80">Departing</span>{{ \Carbon\Carbon::parse($departureDate)->format('d-m-Y')}}</p>

                </div>

                <!-- <button class="h-14 flex items-center w-40 gap-x-[7px] bg-dark-blue text-xl text-light-brown rounded-md px-8 gap-2 hover:bg-transparent hover:text-dark-blue transition hover:border hover:border-dark-blue">

                    <i class="text-lg fa-solid fa-magnifying-glass"></i> Search

                </button> -->

            </div>

        </div>





        <div class="grid grid-cols-12 gap-6 mt-[30px]">

            <div class="col-span-4 px-3 py-[15px] border border-[#CBCFD2] rounded-lg">

                <div>

                    <h2 class="text-xl font-medium text-black-400">Fliters</h2>

                    <p class="mt-2 text-sm text-black-400">Showing {{ isset($totleflight)?$totleflight:'' }} results</p>

                </div>

                <hr class="my-[18px]">

                <div>

                    <h3 class="flex justify-between mb-3 text-base text-black-400">Stops <span class="text-dark-blue">clear</span></h3>

                    <div>

                        <div class="mb-[10px] flex items-center gap-x-1">

                            <input type="checkbox" name="" value="Direct" class="w-5 h-5">

                            <label for="Direct" class="text-sm text-dark-400">Direct</label>

                        </div>

                        <div class="mb-[10px] flex items-center gap-x-1">

                            <input type="checkbox" name="" value="1 Stop" class="w-5 h-5">

                            <label for="" class="text-sm text-dark-400"> 1 Stop</label>

                        </div>

                        <div class="flex items-center gap-x-1">

                            <input type="checkbox" name="vehicle" value="2 Stops" class="w-5 h-5">

                            <label for="" class="text-sm text-dark-400"> 2 Stops</label>

                        </div>

                    </div>



                </div>

                <hr class="my-[18px]">
                <!--
                <div>

                    <h3 class="flex justify-between mb-3 text-base text-black-400">Airlines <span class="text-dark-blue">clear</span></h3>



                    <div>

                        <p>Select all Airlines</p>



                    </div>

                    <div>

                        <div class="mb-[10px] flex items-center gap-x-1">

                            <input type="checkbox" name="" value="Direct" class="w-5 h-5">

                            <label for="Direct" class="text-sm text-dark-400">IndiGo</label>

                        </div>

                        <div class="mb-[10px] flex items-center gap-x-1">

                            <input type="checkbox" name="" value="1 Stop" class="w-5 h-5">

                            <label for="" class="text-sm text-dark-400">Air India</label>

                        </div>

                        <div class="mb-[10px] flex items-center gap-x-1">

                            <input type="checkbox" name="" value="1 Stop" class="w-5 h-5">

                            <label for="" class="text-sm text-dark-400">Air India Express</label>

                        </div>

                        <div class="mb-[10px] flex items-center gap-x-1">

                            <input type="checkbox" name="" value="1 Stop" class="w-5 h-5">

                            <label for="" class="text-sm text-dark-400">SpiceJet</label>

                        </div>

                        <div class="flex items-center gap-x-1">

                            <input type="checkbox" name="vehicle" value="2 Stops" class="w-5 h-5">

                            <label for="" class="text-sm text-dark-400"> Air Arabia</label>

                        </div>

                    </div>



                </div> -->

                <!-- <hr class="my-[18px]">

                <div>

                    <p class="flex justify-between text-base text-black-400">Flight Times <span class="text-dark-blue">clear</span></p>

                    <div x-data="{ openTab: 1 }" class="w-full ">

                        <div class="mx-auto">

                            <div class="flex items-center gap-x-6">

                                <button x-on:click="openTab = 1"

                                    :class="{ ' border-b text-dark-blue border-dark-blue ': openTab === 1 }"

                                    class="pb-2">

                                    Onboarding Flight</button>

                                <button x-on:click="openTab = 2"

                                    :class="{ '  border-b text-dark-blue border-dark-blue ': openTab === 2 }"

                                    class="pb-2 ">

                                    Returning Flight</button>

                            </div>



                            <div x-show="openTab === 1" class="transition-all duration-300 bg-white tab-content ">

                                <div>

                                    <p class="text-base text-black ">Departs Jaipur International Airport</p>

                                    <ul class="my-4">

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">00:00-05:59</label>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">06:00-07:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">08:00-10:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">11:00-12:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">15:00-20:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                    </ul>

                                </div>

                                <div>

                                    <p class="mb-4 text-base text-black">Arrival to Delhi International Airport</p>

                                    <ul>

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">00:00-05:59</label>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">06:00-07:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">08:00-10:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between mb-[10px]">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">11:00-12:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                        <li class="flex justify-between">

                                            <div class="flex items-center gap-x-1"> <input type="checkbox" name="" value="Direct" class="w-4 h-4">

                                                <label for="Direct" class="text-sm">15:00-20:59</label><br>

                                            </div>

                                            <span class="text-sm">25</span>

                                        </li>

                                    </ul>

                                </div>









                            </div>





                        </div>

                    </div>

                </div> -->

                <!-- <hr class="my-[18px]">

                <div>

                    <h2 class="text-base text-black-400">Duration</h2>

                    <p class="flex items-center justify-between mt-3 text-sm text-black-400"><span>Maximum Travel Time</span><span>35+ hours</span></p>

                </div> -->

            </div>

            <div class="col-span-8">



                <div class="flex items-center gap-x-[15px] mb-[18px]">

                    <a href="" class="text-base font-medium text-dark-blue">Choose depating Flight</a>

                    <i class="fa-solid fa-angle-right text-dark-blue"></i>

                    <a href="" class="text-base text-black">Choose returning flight</a>

                    <!-- <i class="fa-solid fa-angle-right"></i> -->

                    <!-- <a href="" class="text-base text-black">Choose returning flight</a> -->

                </div>



                <div x-data="{ openTab: 1 }" class="w-full ">

                    <div class="mx-auto">

                        <!-- <div class="flex items-center gap-x-4">

                            <button x-on:click="openTab = 1"

                                :class="{ ' bg-[#11577926] text-dark-blue border-dark-blue ': openTab === 1 }"

                                class="border boder-[#4f575e99] rounded-md h-14 w-[120px]  "><span

                                    class="block text-xs">Sun, Nov 4</span> <span

                                    class="text-lg font-medium">Rs.2,500</span></button>

                            <button x-on:click="openTab = 2"

                                :class="{ ' bg-[#11577926] text-dark-blue border-dark-blue ': openTab === 2}"

                                class="border boder-[#4f575e99] rounded-md h-14 w-[120px] "><span

                                    class="block text-xs">Sun, Nov 4</span> <span

                                    class="text-lg font-medium">Rs.2,500</span></button>

                            <button x-on:click="openTab = 3"

                                :class="{ ' bg-[#11577926] text-dark-blue border-dark-blue ': openTab === 3 }"

                                class="border boder-[#4f575e99] rounded-md h-14 w-[120px]  "><span

                                    class="block text-xs">Sun, Nov 4</span> <span

                                    class="text-lg font-medium">Rs.2,500</span></button>

                            <button x-on:click="openTab = 4"

                                :class="{ ' bg-[#11577926] text-dark-blue border-dark-blue ': openTab === 4 }"

                                class="border boder-[#4f575e99] rounded-md h-14 w-[120px]  "><span

                                    class="block text-xs">Sun, Nov 4</span> <span

                                    class="text-lg font-medium">Rs.2,500</span></button>

                            <button x-on:click="openTab = 5"

                                :class="{ ' bg-[#11577926] text-dark-blue border-dark-blue ': openTab === 5 }"

                                class="border boder-[#4f575e99] rounded-md h-14 w-[120px]  "><span

                                    class="block text-xs">Sun, Nov 4</span> <span

                                    class="text-lg font-medium">Rs.2,500</span></button>

                            <button x-on:click="openTab = 6"

                                :class="{ ' bg-[#11577926] text-dark-blue border-dark-blue ': openTab === 6 }"

                                class="border boder-[#4f575e99] rounded-md h-14 w-[120px] "><span

                                    class="block text-xs">Sun, Nov 4</span> <span

                                    class="text-lg font-medium">Rs.2,500</span></button>

                        </div> -->

                        <div x-show="openTab === 1" class="transition-all duration-300 bg-white tab-content ">

                            <div class="mb-5 mt-7">

                                <h2 class="text-lg font-medium text-black">Recommended departing flights</h2>

                                <p class="text-xs text-black-400">Average price per person. The price includes taxes

                                    and fares.</p>

                            </div>

                            @if(!empty($flights) && $flights->count() > 0)

                            @foreach($flights as $flight) {{-- Use $flights directly as it's now paginated --}}

                            <div class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="{{ asset('front_assets/images/flight-tour-indigo.svg') }}" alt="{{ $flight['validatingAirlineCodes'][0] ?? 'Unknown' }}" width="94" height="20">

                                    <p class="text-base text-black-400">{{ $flight['validatingAirlineCodes'][0] ?? 'Unknown' }}</p>

                                </div>



                                <div class="flex items-center gap-x-2">

                                    <div>

                                        <p class="text-black-400">

                                            @if(!empty($flight['itineraries']) && count($flight['itineraries']) > 0)

                                            <span class="text-lg">

                                                {{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['departure']['at'])->format('H:i') }}

                                            </span>

                                            <span class="block text-xs">{{ $flight['itineraries'][0]['segments'][0]['departure']['iataCode'] }}</span>

                                            @else

                                            <span class="text-lg">N/A</span>

                                            @endif

                                        </p>

                                        <p class="text-black-400 text-xs">

                                            @if(!empty($flight['itineraries']) && count($flight['itineraries']) > 0)

                                            {{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['departure']['at'])->format('d M Y') }}

                                            @else

                                            N/A

                                            @endif

                                        </p>

                                    </div>

                                    <img src="{{ asset('front_assets/images/Flight-tour-timing-flight-icon.svg') }}">

                                    <div>

                                        <p class="text-black-400">

                                            @if(!empty($flight['itineraries']) && count($flight['itineraries']) > 0)

                                            <span class="text-lg">

                                                {{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['arrival']['at'])->format('H:i') }}

                                            </span>

                                            <span class="block text-xs">{{ $flight['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</span>

                                            @else

                                            <span class="text-lg">N/A</span>

                                            @endif

                                        </p>

                                        <p class="text-black-400 text-xs">

                                            @if(!empty($flight['itineraries']) && count($flight['itineraries']) > 0)

                                            {{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['arrival']['at'])->format('d M Y') }}

                                            @else

                                            N/A

                                            @endif

                                        </p>

                                    </div>

                                </div>



                                <div class="flex items-center gap-x-[50px]">

                                    <p>

                                        <span class="block text-xs text-black-400">

                                            <s>
                                                {{ optional($flight['price'])['grandTotal'] ?? 'N/A' }}
                                            </s>

                                        </span>

                                        <span class="text-xl font-semibold text-dark-blue">

                                            {{ optional($flight['price'])['base'] ?? 'N/A' }}

                                            {{ optional($flight['price'])['currency'] ?? '' }}

                                        </span>

                                    </p>



                                    <a target="_blank" href="{{ route('flights.detals', $flight['id']) }}"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">

                                        View Details

                                    </a>

                                </div>

                            </div>

                            @endforeach

                            @else

                            <p class="text-center text-gray-500">No flights found.</p>

                            @endif





                            <div class="paginations mt-[26px]">

                                <ul class="flex items-center justify-center gap-x-3">

                                    {{-- Previous Page Link --}}

                                    @if ($flights->onFirstPage())

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px] flex items-center justify-center">

                                        <i class="fa-solid fa-angle-left"></i>

                                    </li>

                                    @else

                                    <li class="w-[30px] h-[30px] flex items-center justify-center">

                                        <a href="{{ $flights->previousPageUrl() }}" class="text-[#CBCFD2]">

                                            <i class="fa-solid fa-angle-left"></i>

                                        </a>

                                    </li>

                                    @endif



                                    {{-- Pagination Elements --}}

                                    @for ($i = 1; $i <= $flights->lastPage(); $i++)

                                        <li class="w-[30px] h-[30px] flex items-center justify-center">

                                            @if ($i == $flights->currentPage())

                                            <span class="w-full h-full rounded border border-dark-blue flex items-center justify-center text-center text-base text-dark-blue">{{ $i }}</span>

                                            @else

                                            <a href="{{ $flights->url($i) }}" class="text-base text-[#CBCFD2]">{{ $i }}</a>

                                            @endif

                                        </li>

                                        @endfor



                                        {{-- Next Page Link --}}

                                        @if ($flights->hasMorePages())

                                        <li class="w-[30px] h-[30px] flex items-center justify-center">

                                            <a href="{{ $flights->nextPageUrl() }}" class="text-[#CBCFD2]">

                                                <i class="fa-solid fa-angle-right"></i>

                                            </a>

                                        </li>

                                        @else

                                        <li class="text-[#CBCFD2] w-[30px] h-[30px] flex items-center justify-center">

                                            <i class="fa-solid fa-angle-right"></i>

                                        </li>

                                        @endif

                                </ul>

                            </div>
                        </div>



                        <!-- <div x-show="openTab === 2" class="transition-all duration-300 bg-white tab-content ">



                            <div class="mb-5 mt-7">

                                <h2 class="text-lg font-medium text-black">Recommended departing flights</h2>

                                <p class="text-xs text-black-400">Average price per person. The price includes taxes

                                    and fares.</p>

                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>



                            <div class="paginations mt-[26px]">

                                <ul class="flex items-center justify-center gap-x-3">

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-left"></i>

                                    </li>

                                    <li

                                        class="w-[30px] h-[30px] rounded border border-dark-blue flex items-center justify-center text-center">

                                        <a href="" class="text-base text-dark-blue">1</a>

                                    </li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">2</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">3</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center "><a href=""

                                            class="text-base text-[#CBCFD2]">4</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">5</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">6</a></li>

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-right"></i>

                                    </li>

                                </ul>

                            </div>



                        </div>

                        <div x-show="openTab === 3" class="transition-all duration-300 bg-white tab-content ">



                            <div class="mb-5 mt-7">

                                <h2 class="text-lg font-medium text-black">Recommended departing flights</h2>

                                <p class="text-xs text-black-400">Average price per person. The price includes taxes

                                    and fares.</p>

                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>



                            <div class="paginations mt-[26px]">

                                <ul class="flex items-center justify-center gap-x-3">

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-left"></i>

                                    </li>

                                    <li

                                        class="w-[30px] h-[30px] rounded border border-dark-blue flex items-center justify-center text-center">

                                        <a href="" class="text-base text-dark-blue">1</a>

                                    </li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">2</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">3</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center "><a href=""

                                            class="text-base text-[#CBCFD2]">4</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">5</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">6</a></li>

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-right"></i>

                                    </li>

                                </ul>

                            </div>



                        </div>

                        <div x-show="openTab === 4" class="transition-all duration-300 bg-white tab-content ">



                            <div class="mb-5 mt-7">

                                <h2 class="text-lg font-medium text-black">Recommended departing flights</h2>

                                <p class="text-xs text-black-400">Average price per person. The price includes taxes

                                    and fares.</p>

                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>



                            <div class="paginations mt-[26px]">

                                <ul class="flex items-center justify-center gap-x-3">

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-left"></i>

                                    </li>

                                    <li

                                        class="w-[30px] h-[30px] rounded border border-dark-blue flex items-center justify-center text-center">

                                        <a href="" class="text-base text-dark-blue">1</a>

                                    </li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">2</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">3</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center "><a href=""

                                            class="text-base text-[#CBCFD2]">4</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">5</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">6</a></li>

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-right"></i>

                                    </li>

                                </ul>

                            </div>



                        </div>

                        <div x-show="openTab === 5" class="transition-all duration-300 bg-white tab-content ">



                            <div class="mb-5 mt-7">

                                <h2 class="text-lg font-medium text-black">Recommended departing flights</h2>

                                <p class="text-xs text-black-400">Average price per person. The price includes taxes

                                    and fares.</p>

                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>



                            <div class="paginations mt-[26px]">

                                <ul class="flex items-center justify-center gap-x-3">

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-left"></i>

                                    </li>

                                    <li

                                        class="w-[30px] h-[30px] rounded border border-dark-blue flex items-center justify-center text-center">

                                        <a href="" class="text-base text-dark-blue">1</a>

                                    </li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">2</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">3</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center "><a href=""

                                            class="text-base text-[#CBCFD2]">4</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">5</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">6</a></li>

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-right"></i>

                                    </li>

                                </ul>

                            </div>



                        </div>

                        <div x-show="openTab === 6" class="transition-all duration-300 bg-white tab-content ">



                            <div class="mb-5 mt-7">

                                <h2 class="text-lg font-medium text-black">Recommended departing flights</h2>

                                <p class="text-xs text-black-400">Average price per person. The price includes taxes

                                    and fares.</p>

                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="mb-[15px] flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-air-india.svg" alt="airindea" width="94"

                                        height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>

                            <div

                                class="flex justify-between border border-[#CBCFD2] rounded h-[74px] text-center items-center px-[30px]">

                                <div class="flex items-center gap-x-6">

                                    <img src="images/flight-tour-indigo.svg" alt="indigo" width="94" height="20">

                                    <p class="text-base text-black-400">Indigo</p>

                                </div>

                                <div class="flex items-center gap-x-2">

                                    <p class="text-black-400"><span class="text-lg ">06:25 </span><span

                                            class="block text-xs ">JAI</span></p>

                                    <img src="images/Flight-tour-timing-flight-icon.svg">

                                    <p class="text-black-400"><span class="text-lg ">12:25 </span><span

                                            class="block text-xs ">DEL</span></p>

                                </div>

                                <div class="flex items-center gap-x-[50px]">

                                    <p><span class="block text-xs text-black-400"><s>Rs.2,959</s></span><span

                                            class="text-xl font-semibold text-dark-blue">Rs. 2,500</span></p>

                                    <a href="#"

                                        class="w-[112px] h-8 border rounded border-dark-blue text-dark-blue flex items-center justify-center text-center text-sm font-medium hover:text-light-brown hover:bg-dark-blue transition">View

                                        Details</a>



                                </div>



                            </div>



                            <div class="paginations mt-[26px]">

                                <ul class="flex items-center justify-center gap-x-3">

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-left"></i>

                                    </li>

                                    <li

                                        class="w-[30px] h-[30px] rounded border border-dark-blue flex items-center justify-center text-center">

                                        <a href="" class="text-base text-dark-blue">1</a>

                                    </li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">2</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">3</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center "><a href=""

                                            class="text-base text-[#CBCFD2]">4</a></li>

                                    <li class="w-[30px] h-[30px]  flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">5</a></li>

                                    <li class="w-[30px] h-[30px] flex items-center justify-center"><a href=""

                                            class="text-base text-[#CBCFD2]">6</a></li>

                                    <li class="text-[#CBCFD2] w-[30px] h-[30px]  flex items-center justify-center">

                                        <i class="fa-solid fa-angle-right"></i>

                                    </li>

                                </ul>

                            </div>



                        </div> -->

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection