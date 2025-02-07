@extends('frontend.layout.main')

@section('manage_front')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<section class="hero">

    <img src="{{asset('front_assets/images/flight-tour-bg-home.webp')}}" alt="flight-tour-bg-home" width="1440" height="702" class="w-full">

</section>



<section class="flight-info md:mt-[-200px] mt-[-100px] ">

    <div class="container m-auto">

        <div class="flex items-center justify-center content ">

            <div x-data="{ openTab: 1 }" class="w-full ">

                <div class="mx-auto">

                    <div class="grid items-center justify-center w-full grid-cols-3 px-2 py-4 mx-auto space-x-2 bg-white md:space-x-6 md:w-10/12 md:flex lg:px-6 tab-links mb-[-1px]">



                        <button x-on:click="openTab = 1" :class="{ ' border-b-2 text-dark-blue border-dark-blue ': openTab === 1 }"

                            class="flex xl:gap-3 gap-1 xl:text-xl lg:text-base  text-xs transition-all duration-300 text-[#141A33] py-[14px]"><img

                                src="{{asset('front_assets/images/flight-tour-holiday-village-icon.svg')}}" width="24"

                                height="24">Tour</button>

                        <button x-on:click="openTab = 2" :class="{ 'border-b-2 text-dark-blue border-dark-blue': openTab === 2  }"

                            class="flex xl:gap-3 gap-1 xl:text-xl lg:text-base  text-xs transition-all duration-300 text-[#141A33] py-[14px]"><img

                                src="{{asset('front_assets/images/flight-tour-flight-takeoff-icon.svg')}}" width="24"

                                height="24">Flight</button>

                        <button x-on:click="openTab = 3" :class="{ ' border-b-2 text-dark-blue border-dark-blue': openTab === 3 }"

                            class="flex xl:gap-3 gap-1 xl:text-xl lg:text-base  text-xs transition-all duration-300 text-[#141A33]  py-[14px]"><img

                                src="{{asset('front_assets/images/flight-tour-hotel-icon.svg')}}" width="24" height="24">Hotel</button>

                        <button x-on:click="openTab = 4" :class="{ ' border-b-2 text-dark-blue border-dark-blue': openTab === 4 }"

                            class="flex xl:gap-3 gap-1 xl:text-xl lg:text-base  text-xs transition-all duration-300 text-[#141A33]  py-[14px]  "><img

                                src="{{asset('front_assets/images/flight-tour-car-icon.svg')}}" width="24" height="24">Car Rentals</button>

                        <button x-on:click="openTab = 5" :class="{ ' border-b-2 text-dark-blue border-dark-blue': openTab === 5 }"

                            class="flex xl:gap-3 gap-1 xl:text-xl lg:text-base  text-xs transition-all duration-300 text-[#141A33]  py-[14px]"><img

                                src="{{asset('front_assets/images/flight-tour-attraction-icon.svg')}}" width="24"

                                height="24">Attractions</button>

                        <button x-on:click="openTab = 6"

                            :class="{ ' border-b-2 text-dark-blue border-dark-blue': openTab === 6 }"

                            class="flex xl:gap-3 gap-1 xl:text-xl lg:text-base  text-xs transition-all duration-300 text-[#141A33] py-[14px]"><img

                                src="{{asset('front_assets/images/flight-tour-airport-icon.svg')}}" width="24" height="24">Airport
                            Taxis</button>
                    </div>

                    <div x-show="openTab === 1" class="transition-all duration-300 bg-white tab-content ">



                        <div class="grid items-center justify-center  md:grid-cols-2 lg:grid-cols-4 grid-row gap-4 px-3.5 py-6 trip-info ">

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-takeoff-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="1">

                                            <p>Shahjalal International Aipoert.

                                                Bangladesh</p>

                                        </option>

                                        <option value="2">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="3">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="4">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Going To</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-landing-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="">Qatar International Airport Qatar</option>

                                        <option value="">Qatar International Airport Qatar1</option>

                                        <option value="">Qatar International Airport Qatar2</option>

                                        <option value="">Qatar International Airport Qatar3</option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Date</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_calender-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base date text-light-gary-200">

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Person</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_user-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base person text-light-gary-200">

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                    </select>

                                </div>



                            </div>

                        </div>

                        <div class="flex justify-center pt-[29px] pb-6 text-center md:pt-8 md:pb-9 ">

                            <button

                                class="rounded-lg bg-dark-blue text-light-brown w-[177px] h-[56px] flex text-center justify-center items-center text-xl hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">Search

                                Flight</button>

                        </div>

                    </div>

                    <form action="{{ route('flights.search') }}" method="GET">

                        <div x-show="openTab === 2" class="transition-all duration-300 bg-white tab-content ">

                            <div class="flex justify-center py-0 md:py-6 select-option ">

                                <form class="grid items-center justify-center text-center md:gap-5 md:flex gird-row gap-y-2">



                                    <div class="flex items-center gap-3">

                                        <input type="radio" id="One_way" name="Trip" value="One_way"

                                            class="block cursor-pointer w-7 h-7 accent-dark-blue" checked>

                                        <label for="One_way" class="block text-lg text-light-gray">One Way</label>

                                    </div>

                                    <div class="flex items-center gap-3">

                                        <input type="radio" id="Round_Trip" name="Trip" value="Round_Trip"

                                            class="block cursor-pointer w-7 h-7 accent-dark-blue">

                                        <label for="Round_Trip" class="block text-lg text-light-gray">Round Trip</label>

                                    </div>



                                    <div class="flex items-center gap-3">

                                        <input type="radio" id="Multicity" name="Trip" value="Multicity"

                                            class="block cursor-pointer w-7 h-7 accent-dark-blue">

                                        <label for="Multicity" class="block text-lg text-light-gray">Multi City</label>

                                    </div>

                                </form>

                            </div>

                            <div class="grid items-center justify-center  md:grid-cols-2 lg:grid-cols-4 grid-row gap-4 px-3.5 py-6 trip-info ">

                                <div class="form-group">

                                    <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                    <div class="position-relative">

                                        <div class="d-flex align-items-center border rounded p-3">

                                            <img src="{{asset('front_assets/images/flight-tour-flight-takeoff-icon.svg')}}" width="24" height="24">

                                            <input type="text" class="form-control border-0 ml-2" name="origin" id="origin" placeholder="Select From">

                                        </div>

                                        <div id="origin-suggestions" class="autocomplete-suggestions list-group position-absolute w-100" style="z-index: 10;"></div>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label class="text-[13px] text-[#4F575E] mb-1">Going To</label>

                                    <div class="position-relative">

                                        <div class="d-flex align-items-center border rounded p-3">

                                            <img src="{{asset('front_assets/images/flight-tour-flight-landing-icon.svg')}}" width="24" height="24">

                                            <input type="text" class="form-control border-0 ml-2" name="destination" id="destination" placeholder="Select Going To">

                                        </div>

                                        <div id="destination-suggestions" class="autocomplete-suggestions list-group position-absolute w-100" style="z-index: 10;"></div>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label class="text-[13px] text-[#4F575E] mb-1">Date</label>

                                    <div class="d-flex align-items-center border rounded p-3">

                                        <img src="{{asset('front_assets/images/flight-tour_calender-icon.svg')}}" width="24" height="24">

                                        <input type="date" name="departure_date" class="form-control border-0 ml-2">

                                    </div>

                                </div>



                                <div>

                                    <label class="text-[13px] text-[#4F575E] mb-1">Person</label>

                                    <div

                                        class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" placeholder="1 adults" id="traveller-summary2" data-bs-toggle="modal" data-bs-target="#travellerModal2" readonly />
                                            <input type="hidden" id="totalTravelers2" name="adults" value="1">
                                            <button class="btn btn-outline-secondary" type="button">🔍</button>

                                        </div>

                                    </div>

                                </div>

                                <!-- Traveler Modal -->

                                <div class="modal fade" id="travellerModal2" tabindex="-1" aria-labelledby="travellerModalLabel" aria-hidden="true">

                                    <div class="modal-dialog modal-lg">

                                        <div class="modal-content">

                                            <div class="modal-header">

                                                <h5 class="modal-title" id="travellerModalLabel">Select Travelers</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                            </div>

                                            <div class="modal-body">

                                                <!-- Room and Travelers Section -->

                                                <div class="mb-4">

                                                    <!-- Adults Counter -->

                                                    <div class="d-flex justify-content-between align-items-center">

                                                        <label>Adults (12+ years)</label>

                                                        <div class="input-group" style="width: 120px;">

                                                            <a class="btn btn-outline-secondary" onclick="updateCount2('adults', -1)">-</a>

                                                            <span class="form-control text-center" id="adults-count2">2</span>

                                                            <a class="btn btn-outline-secondary" onclick="updateCount2('adults', 1)">+</a>

                                                        </div>

                                                    </div>



                                                    <!-- Children Counter -->

                                                    <div class="d-flex justify-content-between align-items-center mt-3">

                                                        <label>Children (0-11 years)</label>

                                                        <div class="input-group" style="width: 120px;">

                                                            <a class="btn btn-outline-secondary" onclick="updateCount2('children', -1)">-</a>

                                                            <span class="form-control text-center" id="children-count2">0</span>

                                                            <a class="btn btn-outline-secondary" onclick="updateCount2('children', 1)">+</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="updateSummary2()">Save changes</button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="text-center pt-4 pb-4">

                                    <button class="rounded-lg bg-dark-blue text-light-brown w-[177px] h-[56px] flex text-center justify-center items-center text-xl hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">Search Flight</button>

                                </div>

                            </div>

                        </div>

                    </form>

                    <form action="{{ route('search.hotel') }}" method="GET">

                        <div x-show="openTab === 3" class="transition-all duration-300 bg-white tab-content ">

                            <div class="grid items-center justify-center  md:grid-cols-2 lg:grid-cols-4 grid-row gap-4 px-3.5 py-6 trip-info ">

                                <div class="form-group">

                                    <label class="text-[13px] text-[#4F575E] mb-1">City</label>

                                    <div class="position-relative">

                                        <div class="d-flex align-items-center border rounded p-3">

                                            <i class="fa-solid fa-city"></i>

                                            <input type="text" class="form-control border-0 ml-2" name="city" id="city" placeholder="Search City">

                                        </div>

                                        <div id="city-suggestions" class="autocomplete-suggestions list-group position-absolute w-100" style="z-index: 10;"></div>

                                    </div>

                                </div>



                                <div>

                                    <label class="text-[13px] text-[#4F575E] mb-1">CheckIn Date</label>

                                    <div

                                        class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                        <i class="fa-solid fa-calendar-days"></i>

                                        <input type="date" name="checkInDate" class="form-control border-0 ml-2">

                                    </div>

                                </div>

                                <div>

                                    <label class="text-[13px] text-[#4F575E] mb-1">CheckOut Date</label>

                                    <div

                                        class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                        <i class="fa-solid fa-calendar-days"></i>

                                        <input type="date" name="checkOutDate" class="form-control border-0 ml-2">

                                    </div>

                                </div>

                                <div>

                                    <label class="text-[13px] text-[#4F575E] mb-1">Person</label>

                                    <div

                                        class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" placeholder="2 adults, 1 room " id="traveller-summary" data-bs-toggle="modal" data-bs-target="#travellerModal" readonly />
                                            <input type="hidden" id="totalTravelers" name="adults" value="0">
                                            <input type="hidden" id="roomQuantity" name="roomQuantity" value="0">
                                            <button class="btn btn-outline-secondary" type="button">🔍</button>

                                        </div>

                                    </div>

                                </div>

                                <!-- Traveler Modal -->

                                <div class="modal fade" id="travellerModal" tabindex="-1" aria-labelledby="travellerModalLabel" aria-hidden="true">

                                    <div class="modal-dialog modal-lg">

                                        <div class="modal-content">

                                            <div class="modal-header">

                                                <h5 class="modal-title" id="travellerModalLabel">Select Travelers</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                            </div>

                                            <div class="modal-body">

                                                <!-- Room and Travelers Section -->

                                                <div class="mb-4">

                                                    <!-- Adults Counter -->

                                                    <div class="d-flex justify-content-between align-items-center">

                                                        <label>Adults (12+ years)</label>

                                                        <div class="input-group" style="width: 120px;">

                                                            <a class="btn btn-outline-secondary" onclick="updateCount('adults', -1)">-</a>

                                                            <span class="form-control text-center" id="adults-count">2</span>

                                                            <a class="btn btn-outline-secondary" onclick="updateCount('adults', 1)">+</a>

                                                        </div>

                                                    </div>



                                                    <!-- Children Counter -->

                                                    <div class="d-flex justify-content-between align-items-center mt-3">

                                                        <label>Children (0-11 years)</label>

                                                        <div class="input-group" style="width: 120px;">

                                                            <a class="btn btn-outline-secondary" onclick="updateCount('children', -1)">-</a>

                                                            <span class="form-control text-center" id="children-count">0</span>

                                                            <a class="btn btn-outline-secondary" onclick="updateCount('children', 1)">+</a>

                                                        </div>

                                                    </div>



                                                    <!-- Rooms Counter -->

                                                    <div class="d-flex justify-content-between align-items-center mt-3">

                                                        <label>Rooms</label>

                                                        <div class="input-group" style="width: 120px;">

                                                            <a class="btn btn-outline-secondary" onclick="updateCount('rooms', -1)">-</a>

                                                            <span class="form-control text-center" id="rooms-count">1</span>

                                                            <a class="btn btn-outline-secondary" onclick="updateCount('rooms', 1)">+</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="updateSummary()">Save changes</button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="flex justify-center pt-[29px] pb-6 text-center md:pt-8 md:pb-9 ">

                                <button

                                    class="rounded-lg bg-dark-blue text-light-brown w-[177px] h-[56px] flex text-center justify-center items-center text-xl hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">Search

                                    Hotel</button>

                            </div>

                        </div>

                    </form>



                    <div x-show="openTab === 4" class="transition-all duration-300 bg-white tab-content ">



                        <div class="grid items-center justify-center  md:grid-cols-2 lg:grid-cols-4 grid-row gap-4 px-3.5 py-6 trip-info ">

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-takeoff-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="1">

                                            <p>Shahjalal International Aipoert.

                                                Bangladesh</p>

                                        </option>

                                        <option value="2">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="3">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="4">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-landing-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="">Qatar International Airport Qatar</option>

                                        <option value="">Qatar International Airport Qatar1</option>

                                        <option value="">Qatar International Airport Qatar2</option>

                                        <option value="">Qatar International Airport Qatar3</option>

                                    </select>

                                </div>

                            </div>



                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Date</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_calender-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base date text-light-gary-200">

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Person</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_user-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base person text-light-gary-200">

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                    </select>

                                </div>



                            </div>





                        </div>

                        <div class="flex justify-center pt-[29px] pb-6 text-center md:pt-8 md:pb-9 ">

                            <button

                                class="rounded-lg bg-dark-blue text-light-brown w-[177px] h-[56px] flex text-center justify-center items-center text-xl hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">Search

                                Flight</button>

                        </div>

                    </div>

                    <div x-show="openTab === 5" class="transition-all duration-300 bg-white tab-content ">



                        <div class="grid items-center justify-center  md:grid-cols-2 lg:grid-cols-4 grid-row gap-4 px-3.5 py-6 trip-info ">

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-takeoff-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="1">

                                            <p>Shahjalal International Aipoert.

                                                Bangladesh</p>

                                        </option>

                                        <option value="2">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="3">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="4">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-landing-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="">Qatar International Airport Qatar</option>

                                        <option value="">Qatar International Airport Qatar1</option>

                                        <option value="">Qatar International Airport Qatar2</option>

                                        <option value="">Qatar International Airport Qatar3</option>

                                    </select>

                                </div>

                            </div>



                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Date</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_calender-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base date text-light-gary-200">

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Person</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_user-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base person text-light-gary-200">

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                    </select>

                                </div>



                            </div>





                        </div>

                        <div class="flex justify-center pt-[29px] pb-6 text-center md:pt-8 md:pb-9 ">

                            <button

                                class="rounded-lg bg-dark-blue text-light-brown w-[177px] h-[56px] flex text-center justify-center items-center text-xl hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">Search

                                Flight</button>

                        </div>

                    </div>

                    <div x-show="openTab === 6" class="transition-all duration-300 bg-white tab-content ">

                        <div class="flex justify-center py-0 md:py-6 select-option ">

                            <form class="grid items-center justify-center text-center md:gap-5 md:flex gird-row gap-y-2">



                                <div class="flex items-center gap-3">

                                    <input type="radio" id="Trip" name="Trip" value="return"

                                        class="block cursor-pointer w-7 h-7 accent-dark-blue" checked>

                                    <label for="return" class="block text-lg text-light-gray">Return</label>

                                </div>

                                <div class="flex items-center gap-3">

                                    <input type="radio" id="Trip" name="Trip" value="One way"

                                        class="block cursor-pointer w-7 h-7 accent-dark-blue">

                                    <label for="One way" class="block text-lg text-light-gray">One way</label>

                                </div>

                            </form>

                        </div>

                        <div class="grid items-center justify-center  md:grid-cols-2 lg:grid-cols-4 grid-row gap-4 px-3.5 py-6 trip-info ">

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-takeoff-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="1">

                                            <p>Shahjalal International Aipoert.

                                                Bangladesh</p>

                                        </option>

                                        <option value="2">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="3">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                        <option value="4">Shahjalal International Aipoert.

                                            Bangladesh

                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">From</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour-flight-landing-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] xt-base country text-light-gary-200">

                                        <option value="">Qatar International Airport Qatar</option>

                                        <option value="">Qatar International Airport Qatar1</option>

                                        <option value="">Qatar International Airport Qatar2</option>

                                        <option value="">Qatar International Airport Qatar3</option>

                                    </select>

                                </div>

                            </div>



                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Date</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_calender-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base date text-light-gary-200">

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                        <option value="">02/09/2024</option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="text-[13px] text-[#4F575E] mb-1">Person</label>

                                <div

                                    class="flex px-4 py-3 border rounded name item border-[#CBCFD2] h-16 ">

                                    <img src="{{asset('front_assets/images/flight-tour_user-icon.svg')}}" width="24" height="24">

                                    <select class="w-[100%] text-base person text-light-gary-200">

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                        <option value="">2 Economy</option>

                                    </select>

                                </div>



                            </div>





                        </div>

                        <div class="flex justify-center pt-[29px] pb-6 text-center md:pt-8 md:pb-9 ">

                            <button

                                class="rounded-lg bg-dark-blue text-light-brown w-[177px] h-[56px] flex text-center justify-center items-center text-xl hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">Search

                                Flight</button>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>

</section>



<section class="hidden py-8 md:block tour-package lg:py-16 md:py-12">

    <div class="container relative m-auto ">

        <div class="text-center header-text">

            <h2 class="text-5xl font-bold text-[#041614]">Our Tour Package</h2>

        </div>

        <div

            class="flex flex-col justify-between py-2 content md:flex sm:flex-row lg:gap-x-7 gap-y-3 sm:gap-x-3 lg:py-16 md:py-12">

            <div class="w-full swiper tour-package-slider ">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <div class=" card">

                            <div class="w-full card-img">

                                <img src="{{asset('front_assets/images/flight-tour-package-one.webp')}}" alt="flight-tour-package-one"

                                    width="370" height="380" class="w-full">

                            </div>

                            <div class="p-4 card-body">

                                <div class="flex gap-1 pb-2 rating">

                                    <span class="flex items-center gap-1 text-center"><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i></span>

                                    <span class="flex items-center justify-center h-6  text-[12px] rounded-xl bg-[#F3F3F3] px-2 text-center"><b>5 </b> &nbsp;<i>(123)</i></span>

                                </div>

                                <h3 class="text-base text-[#303233]">Name of the place</h3>

                                <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                                <p class="text-base text-[#303233]">Price: $1300.00</p>

                                <a href="#" class="flex mt-4 border-2 border-[#3D55CC] w-[120px] h-8 justify-center items-center text-[#505673]">Book this tour</a>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class=" card">

                            <div class="w-full card-img">

                                <img src="{{asset('front_assets/images/flight-tour-package-two.webp')}}" alt="flight-tour-package-one"

                                    width="370" height="380" class="w-full">

                            </div>

                            <div class="p-4 card-body">

                                <div class="flex gap-1 pb-2 rating">

                                    <span class="flex items-center gap-1 text-center"><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i></span>

                                    <span class="flex items-center justify-center h-6  text-[12px] rounded-xl bg-[#F3F3F3] px-2 text-center"><b>5 </b> &nbsp;<i>(123)</i></span>

                                </div>

                                <h3 class="text-base text-[#303233]">Name of the place</h3>

                                <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                                <p class="text-base text-[#303233]">Price: $1300.00</p>

                                <a href="#" class="text-[#505673] flex mt-4 border-2 border-[#3D55CC] w-[120px] h-8 justify-center items-center">Book this tour</a>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card">

                            <div class="w-full card-img">

                                <img src="{{asset('front_assets/images/flight-tour-package-three.webp')}}" alt="flight-tour-package-one"

                                    width="370" height="380" class="w-full">

                            </div>

                            <div class="p-4 card-body">

                                <div class="flex gap-1 pb-2 rating">

                                    <span class="flex items-center gap-1 text-center"><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i></span>

                                    <span class="flex items-center justify-center h-6  text-[12px] rounded-xl bg-[#F3F3F3] px-2 text-center"><b>5 </b> &nbsp;<i>(123)</i></span>

                                </div>

                                <h3 class="text-base text-[#303233]">Name of the place</h3>

                                <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                                <p class="text-base text-[#303233]">Price: $1300.00</p>

                                <a href="#" class="text-[#505673] flex mt-4 border-2 border-[#3D55CC] w-[120px] h-8 justify-center items-center">Book this tour</a>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card">

                            <div class="w-full card-img">

                                <img src="{{asset('front_assets/images/flight-tour-package-one.webp')}}" alt="flight-tour-package-one"

                                    width="370" height="380" class="w-full">

                            </div>

                            <div class="p-4 card-body">

                                <div class="flex gap-1 pb-2 rating">

                                    <span class="flex items-center gap-1 text-center"><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i></span>

                                    <span class="flex items-center justify-center h-6  text-[12px] rounded-xl bg-[#F3F3F3] px-2 text-center"><b>5 </b> &nbsp;<i>(123)</i></span>

                                </div>

                                <h3 class="text-base text-[#303233]">Name of the place</h3>

                                <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                                <p class="text-base text-[#303233]">Price: $1300.00</p>

                                <a href="#" class="text-[#505673] flex mt-4 border-2 border-[#3D55CC] w-[120px] h-8 justify-center items-center">Book this tour</a>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class=" card">

                            <div class="w-full card-img">

                                <img src="{{asset('front_assets/images/flight-tour-package-two.webp')}}" alt="flight-tour-package-one"

                                    width="370" height="380" class="w-full">

                            </div>

                            <div class="p-4 card-body">

                                <div class="flex gap-1 pb-2 rating">

                                    <span class="flex items-center gap-1 text-center"><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i></span>

                                    <span class="flex items-center justify-center h-6  text-[12px] rounded-xl bg-[#F3F3F3] px-2 text-center"><b>5 </b> &nbsp;<i>(123)</i></span>

                                </div>

                                <h3 class="text-base text-[#303233]">Name of the place</h3>

                                <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                                <p class="text-base text-[#303233]">Price: $1300.00</p>

                                <a href="#" class="text-[#505673] flex mt-4 border-2 border-[#3D55CC] w-[120px] h-8 justify-center items-center">Book this tour</a>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class=" card">

                            <div class="w-full card-img">

                                <img src="{{asset('front_assets/images/flight-tour-package-three.webp')}}" alt="flight-tour-package-one"

                                    width="370" height="380" class="w-full">

                            </div>

                            <div class="p-4 card-body">

                                <div class="flex gap-1 pb-2 rating">

                                    <span class="flex items-center gap-1 text-center"><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i></span>

                                    <span class="flex items-center justify-center h-6  text-[12px] rounded-xl bg-[#F3F3F3] px-2 text-center"><b>5 </b> &nbsp;<i>(123)</i></span>

                                </div>

                                <h3 class="text-base text-[#303233]">Name of the place</h3>

                                <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                                <p class="text-base text-[#303233]">Price: $1300.00</p>

                                <a href="#" class="text-[#505673] flex mt-4 border-2 border-[#3D55CC] w-[120px] h-8 justify-center items-center">Book this tour</a>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card">

                            <div class="w-full card-img">

                                <img src="{{asset('front_assets/images/flight-tour-package-three.webp')}}" alt="flight-tour-package-one"

                                    width="370" height="380" class="w-full">

                            </div>

                            <div class="p-4 card-body">

                                <div class="flex gap-1 pb-2 rating">

                                    <span class="flex items-center gap-1 text-center"><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i><i

                                            class="text-base text-yellow fa-solid fa-star"></i></span>

                                    <span class="flex items-center justify-center h-6  text-[12px] rounded-xl bg-[#F3F3F3] px-2 text-center"><b>5 </b> &nbsp;<i>(123)</i></span>

                                </div>

                                <h3 class="text-base text-[#303233]">Name of the place</h3>

                                <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                                <p class="text-base text-[#303233]">Price: $1300.00</p>

                                <a href="#" class="text-[#505673] flex mt-4 border-2 border-[#3D55CC] w-[120px] h-8 justify-center items-center">Book this tour</a>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>

        <div class="buttons">

            <div class="swiper-pagination"></div>



            <div class="swiper-button-next next-btn"><i class="fa-solid fa-arrow-right"></i>

            </div>

            <div class="swiper-button-prev prev-btn"><i class="fa-solid fa-arrow-left"></i>

            </div>

        </div>

    </div>



</section>



<section class="block mobile-tour-package md:hidden pt-[47px] pb-[76px]">

    <div class="container mx-auto">

        <div class="mb-6 text-center header-text">

            <h2 class="text-xl font-bold text-[#041614]">Our Tour Package</h2>

        </div>

        <div class="grid grid-cols-2 gap-[18px]">

            <div class=" card">

                <div class="w-full card-img">

                    <img src="{{asset('front_assets/images/flight-tour-package-one.webp')}}" alt="flight-tour-package-one"

                        width="370" height="380" class="w-full">

                </div>

                <div class="p-4 card-body">

                    <div class="flex gap-1 pb-2 rating">

                        <span class="flex items-center gap-1 text-center"><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i></span>



                    </div>

                    <h3 class="text-[15px] text-[#303233]">Name of the place</h3>

                    <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                    <p class="text-[15px] text-[#303233]">Price: $1300.00</p>

                    <a href="#" class="flex mt-4 border-2 border-[#115779] w-[120px] h-8 justify-center items-center text-[#505673]">Book this tour</a>

                </div>

            </div>

            <div class=" card">

                <div class="w-full card-img">

                    <img src="{{asset('front_assets/images/flight-tour-package-two.webp')}}" alt="flight-tour-package-one"

                        width="370" height="380" class="w-full">

                </div>

                <div class="p-4 card-body">

                    <div class="flex gap-1 pb-2 rating">

                        <span class="flex items-center gap-1 text-center"><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i></span>



                    </div>

                    <h3 class="text-[15px] text-[#303233]">Name of the place</h3>

                    <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                    <p class="text-[15px] text-[#303233]">Price: $1300.00</p>

                    <a href="#" class="flex mt-4 border-2 border-[#115779] w-[120px] h-8 justify-center items-center text-[#505673]">Book this tour</a>

                </div>

            </div>

            <div class=" card">

                <div class="w-full card-img">

                    <img src="{{asset('front_assets/images/flight-tour-mobile-pakage-one.webp')}}" alt="flight-tour-package-one"

                        width="370" height="380" class="w-full">

                </div>

                <div class="p-4 card-body">

                    <div class="flex gap-1 pb-2 rating">

                        <span class="flex items-center gap-1 text-center"><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i></span>



                    </div>

                    <h3 class="text-[15px] text-[#303233]">Name of the place</h3>

                    <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                    <p class="text-[15px] text-[#303233]">Price: $1300.00</p>

                    <a href="#" class="flex mt-4 border-2 border-[#115779] w-[120px] h-8 justify-center items-center text-[#505673]">Book this tour</a>

                </div>

            </div>

            <div class=" card">

                <div class="w-full card-img">

                    <img src="{{asset('front_assets/images/flight-tour-mobile-pakage-two.webp')}}" alt="flight-tour-package-one"

                        width="370" height="380" class="w-full">

                </div>

                <div class="p-4 card-body">

                    <div class="flex gap-1 pb-2 rating">

                        <span class="flex items-center gap-1 text-center"><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i><i

                                class="text-base text-yellow fa-solid fa-star"></i></span>



                    </div>

                    <h3 class="text-[15px] text-[#303233]">Name of the place</h3>

                    <span class="my-1 flex items-center gap-[6px] text-[13px] text-[#303233]"><i class="fa-regular fa-clock"></i> 2 Days 2 Nights</span>

                    <p class="text-[15px] text-[#303233]">Price: $1300.00</p>

                    <a href="#" class="flex mt-4 border-2 border-[#115779] w-[120px] h-8 justify-center items-center text-[#505673]">Book this tour</a>

                </div>

            </div>



        </div>

    </div>

</section>



<section class="py-8 airlines lg:py-16 md:py-12 bg-[#F6F7F8]">

    <div class="container mx-auto">

        <div class="w-full mx-auto mb-6 text-center heading lg:w-2/5 md:w-3xl lg:m lg:px-5b-16 md:mb-12">

            <h2 class="md:text-5xl font-bold text-[#041614] mb-[13px] text-3xl">Search Top Airlines</h2>

            <p class="text-base text-black">Experience the grandeur of air travel with Search Top AirlinesSearch, catering to your needs on a

                grand scale."

            </p>

        </div>

        <div class="content">

            <div class="grid md:grid-cols-4 lg:gap-x-[19px] gap-y-7 gap-x-3 grid-cols-2">

                <div class="bg-white card xl:px-7 lg:px-5 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-bangladesh-airlines.svg')}}" alt="Flight-tour-bangladesh-airlines"

                            width="89" height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px]  lg:w-3/4 w-auto lg:mt-3 mt-2">Biman Bangladesh Airlines</h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>

                <div class="bg-white card xl:px-7 lg:px-5 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-us-airlines.svg')}}" alt="Flight-tour-us-airlines" width="89"

                            height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px] lg:w-3/4 w-auto lg:mt-3 mt-2">US Bangla Airlines



                        </h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>

                <div class="bg-white card xl:px-7 lg:px-5 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-bangladesh-airlines.svg')}}" alt="Flight-tour-bangladesh-airlines"

                            width="89" height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px]  lg:w-3/4 w-auto lg:mt-3 mt-2">Biman Bangladesh Airlines</h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>

                <div class="bg-white card lg:px-7 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-bangladesh-airlines.svg')}}" alt="Flight-tour-bangladesh-airlines"

                            width="89" height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px]  lg:w-3/4 w-auto lg:mt-3 mt-2">Biman Bangladesh Airlines</h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>

                <div class="bg-white card lg:px-7 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-bangladesh-airlines.svg')}}" alt="Flight-tour-bangladesh-airlines"

                            width="89" height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px]  lg:w-3/4 w-auto lg:mt-3 mt-2">Biman Bangladesh Airlines</h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>

                <div class="bg-white card lg:px-7 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-bangladesh-airlines.svg')}}" alt="Flight-tour-bangladesh-airlines"

                            width="89" height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px]  lg:w-3/4 w-auto lg:mt-3 mt-2">Biman Bangladesh Airlines</h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>

                <div class="bg-white card lg:px-7 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-bangladesh-airlines.svg')}}" alt="Flight-tour-bangladesh-airlines"

                            width="89" height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px]  lg:w-3/4 w-auto lg:mt-3 mt-2">Biman Bangladesh Airlines</h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>

                <div class="bg-white card lg:px-7 pt-7 md:pb-[38px] px-2 pb-4 shadow-3xl ">

                    <div class="card-img">

                        <img src="{{asset('front_assets/images/Flight-tour-bangladesh-airlines.svg')}}" alt="Flight-tour-bangladesh-airlines"

                            width="89" height="58">

                    </div>

                    <div class="card-body">

                        <h3 class="text-[#1A1E1F] lg:text-xl text-base xl:h-[52px] lg:h-[54px] h-[55px]  lg:w-3/4 w-auto lg:mt-3 mt-2">Biman Bangladesh Airlines</h3>

                        <p class="text-[#505673] md:text-sm lg:text-base text-[13px] md:mt-3 md:mb-10 mt-1 mb-3">Biman Bangladesh Airlines, the national flag carrier, connects Bangladesh with the world

                            through its extensive flight network."</p>

                        <a href="#" class="flex w-[95px] h-8 justify-center items-center rounded border border-dark-blue text-dark-blue text-[13px] hover:text-white hover:bg-dark-blue transition">Book Now</a>

                    </div>

                </div>



            </div>

        </div>



        <div><a href="#" class="rounded w-[82px] h-8 flex items-center justify-center border border-dark-blue text-base text-dark-blue mx-auto md:mt-16 mt-10 hover:text-[#F9F9F9] hover:bg-dark-blue transition">View All</a></div>

    </div>



</section>





<section class="py-8 destination lg:py-16 md:py-12">

    <div class="container mx-auto">

        <div class="mb-6 text-center heading lg:mb-16 md:mb-12">

            <h2 class="md:text-5xl font-bold text-[#041614] mb-[13px] text-3xl">Popular Destination</h2>

        </div>

        <div class="content">

            <div class="grid grid-cols-2 md:grid-cols-3 md:gap-x-3 md:gap-y-[20px] gap-x-[18px] gap-y-[18px]">

                <div class="relative card">

                    <div class="card-img">

                        <img class="w-full" src="{{asset('front_assets/images/flight-tour-destination-verrazano.webp')}}" width="387" height="258">

                    </div>

                    <div class="absolute flex bottom-[14px] right-0 lg:left-[32%] left-[20%]">

                        <a href="#" class="md:text-sm text-[12px] lg:text-xl text-light-brown">Verrazano Bridge</a>

                    </div>

                </div>

                <div class="relative card">

                    <div class="card-img">

                        <img class="w-full" src="{{asset('front_assets/images/flight-tour-destination-newyork.webp')}}" width="387" height="258">

                    </div>

                    <div class="absolute flex bottom-[14px] right-0 lg:left-[32%] left-[20%]">

                        <a href="#" class="md:text-sm text-[12px] lg:text-xl text-light-brown">Newyork city Bridge</a>

                    </div>

                </div>

                <div class="relative card">

                    <div class="card-img">

                        <img class="w-full" src="{{asset('front_assets/images/flight-tour-destination-Francesco Mancini.webp')}}" width="387" height="258">

                    </div>

                    <div class="absolute flex bottom-[14px] right-0 lg:left-[32%] left-[20%]">

                        <a href="#" class="md:text-sm text-[12px] lg:text-xl text-light-brown">Francesco Mancini</a>

                    </div>

                </div>

                <div class="relative card">

                    <div class="card-img ">

                        <img class="w-full" src="{{asset('front_assets/images/flight-tour-destination-Verrazzano-Narrows.webp')}}" width="387" height="258">

                    </div>

                    <div class="absolute flex bottom-[14px] right-0 lg:left-[32%] left-[20%]">

                        <a href="#" class="md:text-sm text-[12px] lg:text-xl text-light-brown">Verrazzano-Narrows Bridge</a>

                    </div>

                </div>

                <div class="relative card">

                    <div class="card-img ">

                        <img class="w-full" src="{{asset('front_assets/images/flight-tour-destination-Sunfrancisco.webp')}}" width="387" height="258">

                    </div>

                    <div class="absolute flex bottom-[14px] right-0 lg:left-[32%] left-[20%]">

                        <a href=" #" class="md:text-sm text-[12px] lg:text-xl text-light-brown">Sunfrancisco</a>

                    </div>

                </div>

                <div class="relative card">

                    <div class="card-img ">

                        <img class="w-full" src="{{asset('front_assets/images/flight-tour-destination-China.webp')}}" width="387" height="258">

                    </div>

                    <div class="absolute flex bottom-[14px] right-0 lg:left-[32%] left-[20%]">

                        <a href="#" class="md:text-sm text-[12px] lg:text-xl text-light-brown">China Bridge</a>

                    </div>

                </div>



            </div>

        </div>

    </div>

</section>



<section class="py-8 choose-us lg:py-16 md:py-12">

    <div class="container mx-auto">

        <div class="mb-6 text-center heading lg:mb-16 md:mb-12">

            <h2 class="md:text-5xl font-bold text-[#041614] mb-[13px] text-3xl">Why Choose Us</h2>

        </div>

        <div class="content">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-[15px] gap-y-6">

                <div class="px-3 py-6 text-center bg-white shadow-3xl g:py-12 lg:px-12 card ">

                    <div class="flex justify-center card-img">

                        <img src="{{asset('front_assets/images/flight-tour-booking-icon.svg')}}" alt="flight-tour-booking-icon" width="103"

                            height="103">

                    </div>

                    <div class="card-body">

                        <h3 class="lg:text-[25px] text-xl  text-[#1A1E1F] font-bold my-8">Easy & Quick Booking</h3>

                        <p class="text-base text-[#303233] lg:w-[85%] w-full mx-auto">With Us not only your money is protected but we protect your flight until you board on

                            plane.</p>

                    </div>

                </div>

                <div class="px-3 py-6 text-center bg-white shadow-3xl g:py-12 lg:px-12 card ">

                    <div class="flex justify-center card-img">

                        <img src="{{asset('front_assets/images/flight-tour-best-price-icon.svg')}}" alt="flight-tour-booking-icon" width="103"

                            height="103">

                    </div>

                    <div class="card-body">

                        <h3 class="lg:text-[25px] text-xl  text-[#1A1E1F] font-bold my-8">Best Price Guarantee</h3>

                        <p class="text-base text-[#303233] lg:w-[85%] w-full mx-auto">We try to ensure your travel within your budget. We regularly work with our suppliers to

                            get and offer you the cheapest prices</p>

                    </div>

                </div>

                <div class="px-3 py-6 text-center bg-white shadow-3xl g:py-12 lg:px-12 card ">

                    <div class="flex justify-center card-img">

                        <img src="{{asset('front_assets/images/flight-tour-customer-care.svg')}}" alt="flight-tour-booking-icon" width="103"

                            height="103">

                    </div>

                    <div class="card-body">

                        <h3 class="lg:text-[25px] text-xl  text-[#1A1E1F] font-bold my-8">Customer Care 24/7</h3>

                        <p class="text-base text-[#303233] lg:w-[85%] w-full mx-auto">If you need any help to book your trip and explore the cheap travel option then call our

                            travel specialists.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection