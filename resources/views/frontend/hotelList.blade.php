@extends('frontend.layout.main')

@section('manage_front')



<section class="pt-5 md:pb-[128px] pb-10 flight">

    <div class="container mx-auto">

        <!-- <div class="grid grid-cols-12 gap-5 ">

            <div class="flex flex-col items-center col-span-12 gap-2 lg:gap-4 md:col-span-6 md:flex-row">

                <div

                    class="border border-[#4F575E] rounded-md py-1 lg:px-[10px] px-2 flex items-center lg:gap-3 gap-2 w-full h-14  ">

                    <i class="text-2xl fa-solid fa-location-dot text-[#041614]"></i>

                    <div><span class="block text-xs text-[#1a1e1fcc] lg:mb-1 mb-0">Flying from</span><span

                            class="text-xs lg:text-base">Jaipur

                            (JAI-Sanganer)</span></div>

                </div>

                <i class="text-2xl rotate-90 text-dark-blue fa-solid fa-right-left md:rotate-180"></i>

                <div

                    class="border border-[#4F575E] rounded-md py-1 lg:px-[10px] px-2 flex items-center lg:gap-3 gap-2 w-full h-14  ">

                    <i class="text-2xl fa-solid fa-location-dot text-[#041614]"></i>

                    <p><span class="block text-xs text-[#1a1e1fcc] lg:mb-1 mb-0">Flying to</span><span

                            class="text-xs lg:text-base">Jaipur

                            (JAI-Sanganer)</span></p>

                </div>

            </div>

            <div class="flex col-span-12 gap-3 lg:gap-2 md:col-span-6">

                <div

                    class="border border-[#4F575E] rounded-md py-2 lg:px-[10px] px-2 flex items-center lg:gap-3 gap-2 w-full h-14 ">

                    <i class="text-2xl fa-regular fa-calendar-days text-[#041614]"></i>

                    <p><span class="block text-[12px] text-[#1a1e1fcc] lg:mb-1 mb-0.5">Departing</span><span

                            class="text-sm lg:text-base">Nov. 6</span></p>

                </div>

                <div

                    class="border border-[#4F575E] rounded-md py-2 lg:px-[10px] px-2 flex items-center lg:gap-3 gap-2 w-full h-14 ">

                    <i class="text-2xl fa-regular fa-calendar-days text-[#041614]"></i>

                    <p><span class="block text-[12px] text-[#1a1e1fcc] lg:mb-1 mb-0.5">Departing</span><span

                            class="text-sm lg:text-base">Nov. 13</span></p>

                </div>

                <button

                    class=" h-14 flex items-center w-40  gap-x-[7px] bg-dark-blue text-xl text-light-brown rounded-md lg:px-8 px-4 gap-2 hover:bg-transparent hover:text-dark-blue transition hover:border hover:border-dark-blue ">

                    <i class="text-lg fa-solid fa-magnifying-glass"></i> Search</button>

            </div>

        </div> -->

        <div class="grid grid-cols-12 gap-x-6 mt-[30px]">

            <div class="col-span-12 xl:col-span-3 lg:col-span-4">

                <div class="relative mb-[18px] before:bg-[#00000026] before:content-[''] before-top-0 before-left-0 before:absolute before:w-full before:h-full before:rounded">

                    <iframe

                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"

                        width="100%" height="200" frameborder="0" style="border:0"

                        class="rounded "></iframe>
                    <div

                        class="absolute bottom-1/2 right-1/2 translate-x-1/2 translate-y-1/2 flex items-center text-white rounded-md bg-dark-blue gap-x-1 py-[6px] px-[10px]">

                        <i class="fa-solid fa-location-dot"></i><a herf="#" class="text-sm">View on Map</a>

                    </div>

                </div>

                <div class="border border-[#CBCFD2] rounded-lg px-3 py-4">



                    <h2 class="text-xl font-medium text-black-400">Fliters</h2>

                    <hr class="mt-[10px] mb-[18px]">



                    <div>



                        <h3 class="text-base font-medium text-black-400">Your Budget (per night)</h3>

                        <div x-data="{ openTab: 1 }" class="w-full ">

                            <div class="mx-auto">

                                <div class="flex items-center bg-[#EEEDED] rounded-[25px] py-1 px-1.5 gap-x-2.5 my-[18px] w-full">

                                    <button x-on:click="openTab = 1"

                                        :class="{ ' border text-black border-[#CBCFD2] bg-white rounded-[100px] ': openTab === 1 }"

                                        class=" text-xs text-[#1A1E1F] py-2 px-[30px] w-[48%]">

                                        Per Night</button>

                                    <button x-on:click="openTab = 2"

                                        :class="{ ' border text-black border-[#CBCFD2] bg-white rounded-[100px] ': openTab === 2 }"

                                        class=" text-[#1A1E1F] text-xs  py-2 px-[30px] w-[52%]">

                                        Entire Stay</button>

                                </div>

                                <img src="{{asset('front_assets/images/flight-tour-horizontal-line.svg')}}" class="w-full">



                                <div x-show="openTab === 1"

                                    class="transition-all duration-300 bg-white tab-content mt-[18px]">

                                    <div class="flex items-center ">

                                        <div class="w-full">

                                            <label class="text-sm font-medium text-black-400">MIN</label>

                                            <p

                                                class="mt-1 rounded border border-[#CBCFD2] bg-white flex justify-between text-sm text-black-400 px-[10px] py-[9px] ">

                                                <span>Rs.</span><span>0</span>

                                            </p>

                                        </div>

                                        <img src="{{asset('front_assets/images/flight-tour-line.svg')}}" class="mt-6">

                                        <div class="w-full">

                                            <label class="text-sm font-medium text-black-400">MAX</label>

                                            <p

                                                class="mt-1 rounded border border-[#CBCFD2] bg-white flex justify-between text-sm text-black-400 px-[10px] py-[9px] ">

                                                <span>Rs.</span><span>80,000</span>

                                            </p>

                                        </div>

                                    </div>

                                    <hr class="my-[18px] border-[#CBCFD2]">

                                    <div class="grid lg:grid-cols-1  grid-cols-1 gap-x-[140px]">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Popular

                                                    filters <span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Book

                                                                without credit card</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">No

                                                                prepayment</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">4

                                                                stars</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Superb:

                                                                9+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between  mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">Air

                                                                conditioning</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Swimming

                                                                Pool</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                </ul>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Property

                                                    rating <span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">1

                                                                star</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">2

                                                                star</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">3

                                                                stars</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">4

                                                                star</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">5

                                                                star</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">

                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Property

                                                    type<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Hotels</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Entire

                                                                homes & apartments</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Apartments</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Homestays</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-[#000000e6]">Villas</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Facilities<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Parking</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Restaurant</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Pets

                                                                allowed</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Room

                                                                service</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">24-hour

                                                                front desk</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Neighbourhood<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Vaishali

                                                                Nagar</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Bani

                                                                Park</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Malviya

                                                                Nagar</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Shyam

                                                                Nagar</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">M.I.

                                                                Road</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Bed

                                                    preference<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Twin

                                                                beds</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Double

                                                                bed</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Reservation policy<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Free

                                                                cancellation</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Book

                                                                without credit card</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">No

                                                                prepayment</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Review

                                                    score<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Superb:

                                                                9+</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Very

                                                                good: 8+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Good:

                                                                7+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Pleasant:

                                                                6+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Certifications</h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Sustainability

                                                                certification</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Distance

                                                    from centre of Jaipur</h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Less than

                                                                1 km</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Less than

                                                                3 km</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Less than

                                                                5 km</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Highly

                                                    rated features</h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Very

                                                                clean</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Brands<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">OYO

                                                                Rooms</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Fab

                                                                Hotels</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Treebo

                                                                Hotels</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Stay

                                                                Vista</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">The

                                                                Indian Hotels Co Ltd</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Room

                                                    facilities<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Kitchen/kitchenette</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Sea

                                                                view</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Private

                                                                bathroom</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Air

                                                                conditioning</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">Private

                                                                pool</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Room

                                                    facilities<span class="text-dark-blue">clear</span></h3>

                                                <div class="flex items-center gap-x-5">

                                                    <div class="w-full">

                                                        <span class="text-sm font-medium">BEDROOM</span>

                                                        <p class="border border-[#CBCFD2] rounded-sm px-[10px] py-[9px] justify-between text-dark-blue flex items-center mt-1"><i class="fa-solid fa-circle-minus"></i> 1 <i class="fa-solid fa-circle-plus"></i></p>

                                                    </div>

                                                    <div class="w-full">

                                                        <span class="text-sm font-medium">BATHROOM</span>

                                                        <p class="border border-[#CBCFD2] rounded-sm px-[10px] py-[9px] justify-between text-dark-blue flex items-center mt-1"><i class="fa-solid fa-circle-minus"></i> 1 <i class="fa-solid fa-circle-plus"></i></p>

                                                    </div>

                                                </div>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2]">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Landmarks<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">City

                                                                Palace</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Bapu

                                                                Bazar</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Fun

                                                    things to do<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Bicycle

                                                                rental</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Tour or

                                                                class about local culture</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Walking

                                                                tours</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Cooking

                                                                class</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Themed

                                                                dinner nights</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2]">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Meals<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Self

                                                                catering</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Breakfast

                                                                included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">All meals

                                                                included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">All-inclusive</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Breakfast

                                                                & lunch included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Breakfast

                                                                & dinner included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Property

                                                    accessibility<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Toilet

                                                                with grab rails</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Higher

                                                                level toilet</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Lower

                                                                bathroom sink</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Visual

                                                                aids: Braille</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div>

                                            <h3 class="flex justify-between mb-3 text-base text-black-400">Room

                                                accessibility<span class="text-dark-blue">clear</span></h3>

                                            <ul>

                                                <li class="flex justify-between mb-[10px]">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Entire

                                                            unit located on ground floor</label>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>

                                                <li class="flex justify-between mb-[10px]">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Adapted

                                                            bath</label><br>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>

                                                <li class="flex justify-between mb-[10px]">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Walk-in

                                                            shower</label><br>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>

                                                <li class="flex justify-between ">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Lowered

                                                            sink</label><br>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>





                                            </ul>

                                            <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                    class="fa-solid fa-angle-down"></i></a>

                                        </div>



                                    </div>





                                </div>

                                <div x-show="openTab === 2"

                                    class="transition-all duration-300 bg-white tab-content mt-[18px]">

                                    <div class="flex items-center ">

                                        <div class="w-full">

                                            <label class="text-sm font-medium text-black-400">MIN</label>

                                            <p

                                                class="mt-1 rounded border border-[#CBCFD2] bg-white flex justify-between text-sm text-black-400 px-[10px] py-[9px] ">

                                                <span>Rs.</span><span>0</span>

                                            </p>

                                        </div>

                                        <img src="{{asset('front_assets/images/flight-tour-line.svg')}}" class="mt-6">

                                        <div class="w-full">

                                            <label class="text-sm font-medium text-black-400">MAX</label>

                                            <p

                                                class="mt-1 rounded border border-[#CBCFD2] bg-white flex justify-between text-sm text-black-400 px-[10px] py-[9px] ">

                                                <span>Rs.</span><span>80,000</span>

                                            </p>

                                        </div>

                                    </div>

                                    <hr class="my-[18px] border-[#CBCFD2]">

                                    <div class="grid lg:grid-cols-1  grid-cols-1 gap-x-[140px]">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Popular

                                                    filters <span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Book

                                                                without credit card</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">No

                                                                prepayment</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">4

                                                                stars</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Superb:

                                                                9+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between  mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">Air

                                                                conditioning</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Swimming

                                                                Pool</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                </ul>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Property

                                                    rating <span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">1

                                                                star</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">2

                                                                star</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">3

                                                                stars</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">4

                                                                star</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">5

                                                                star</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">

                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Property

                                                    type<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Hotels</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Entire

                                                                homes & apartments</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Apartments</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Homestays</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-[#000000e6]">Villas</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Facilities<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Parking</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Restaurant</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Pets

                                                                allowed</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Room

                                                                service</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">24-hour

                                                                front desk</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Neighbourhood<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Vaishali

                                                                Nagar</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Bani

                                                                Park</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Malviya

                                                                Nagar</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Shyam

                                                                Nagar</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">M.I.

                                                                Road</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Bed

                                                    preference<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Twin

                                                                beds</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Double

                                                                bed</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Reservation policy<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Free

                                                                cancellation</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Book

                                                                without credit card</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">No

                                                                prepayment</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Review

                                                    score<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Superb:

                                                                9+</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Very

                                                                good: 8+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Good:

                                                                7+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Pleasant:

                                                                6+</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Certifications</h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Sustainability

                                                                certification</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Distance

                                                    from centre of Jaipur</h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Less than

                                                                1 km</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Less than

                                                                3 km</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Less than

                                                                5 km</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Highly

                                                    rated features</h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Very

                                                                clean</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Brands<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">OYO

                                                                Rooms</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Fab

                                                                Hotels</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Treebo

                                                                Hotels</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Stay

                                                                Vista</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">The

                                                                Indian Hotels Co Ltd</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Room

                                                    facilities<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">Kitchen/kitchenette</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Sea

                                                                view</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Private

                                                                bathroom</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Air

                                                                conditioning</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-[#000000e6]">Private

                                                                pool</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Room

                                                    facilities<span class="text-dark-blue">clear</span></h3>

                                                <div class="flex items-center gap-x-5">

                                                    <div class="w-full">

                                                        <span class="text-sm font-medium">BEDROOM</span>

                                                        <p class="border border-[#CBCFD2] rounded-sm px-[10px] py-[9px] justify-between text-dark-blue flex items-center mt-1"><i class="fa-solid fa-circle-minus"></i> 1 <i class="fa-solid fa-circle-plus"></i></p>

                                                    </div>

                                                    <div class="w-full">

                                                        <span class="text-sm font-medium">BATHROOM</span>

                                                        <p class="border border-[#CBCFD2] rounded-sm px-[10px] py-[9px] justify-between text-dark-blue flex items-center mt-1"><i class="fa-solid fa-circle-minus"></i> 1 <i class="fa-solid fa-circle-plus"></i></p>

                                                    </div>

                                                </div>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2]">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Landmarks<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">City

                                                                Palace</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Bapu

                                                                Bazar</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Fun

                                                    things to do<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Bicycle

                                                                rental</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Tour or

                                                                class about local culture</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Walking

                                                                tours</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Cooking

                                                                class</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Themed

                                                                dinner nights</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                </ul>



                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2]">



                                        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-2 md:gap-x-10 gap-x-0 xl:gap-x-0">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">

                                                    Meals<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Self

                                                                catering</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Breakfast

                                                                included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">All meals

                                                                included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>



                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct"

                                                                class="text-sm text-black-400">All-inclusive</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Breakfast

                                                                & lunch included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Breakfast

                                                                & dinner included</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                </ul>



                                            </div>

                                            <hr class="my-[18px] border-[#CBCFD2] lg:block md:hidden block">

                                            <div>

                                                <h3 class="flex justify-between mb-3 text-base text-black-400">Property

                                                    accessibility<span class="text-dark-blue">clear</span></h3>

                                                <ul>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Toilet

                                                                with grab rails</label>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Higher

                                                                level toilet</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between mb-[10px]">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Lower

                                                                bathroom sink</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>

                                                    <li class="flex justify-between ">

                                                        <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                                name="" value="Direct"

                                                                class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                            <label for="Direct" class="text-sm text-black-400">Visual

                                                                aids: Braille</label><br>

                                                        </div>

                                                        <span class="text-sm text-[#000000e6]">25</span>

                                                    </li>





                                                </ul>

                                                <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                        class="fa-solid fa-angle-down"></i></a>

                                            </div>

                                        </div>



                                        <hr class="my-[18px] border-[#CBCFD2] ">



                                        <div>

                                            <h3 class="flex justify-between mb-3 text-base text-black-400">Room

                                                accessibility<span class="text-dark-blue">clear</span></h3>

                                            <ul>

                                                <li class="flex justify-between mb-[10px]">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Entire

                                                            unit located on ground floor</label>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>

                                                <li class="flex justify-between mb-[10px]">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Adapted

                                                            bath</label><br>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>

                                                <li class="flex justify-between mb-[10px]">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Walk-in

                                                            shower</label><br>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>

                                                <li class="flex justify-between ">

                                                    <div class="flex items-center gap-x-1"> <input type="checkbox"

                                                            name="" value="Direct"

                                                            class="relative w-4 h-4 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-transparent before:border check-box">

                                                        <label for="Direct" class="text-sm text-black-400">Lowered

                                                            sink</label><br>

                                                    </div>

                                                    <span class="text-sm text-[#000000e6]">25</span>

                                                </li>





                                            </ul>

                                            <a href="#" class="block mt-3 text-base font-medium text-dark-blue">Show all <i

                                                    class="fa-solid fa-angle-down"></i></a>

                                        </div>



                                    </div>





                                </div>





                            </div>

                        </div>





                    </div>

                </div>



            </div>

            <div class="col-span-12 xl:col-span-9 lg:col-span-8">

                <div class="flex flex-col justify-between py-5 md:flex-row">

                    <div>

                        <h2 class="text-xl font-medium text-black-400">Recommended Properties in Delhi</h2>

                        <span class="text-[#1a1e1fcc] text-sm">Average price per person. The price includes taxes and fares.</span>

                    </div>

                    <div class="flex items-center border border-light-gray rounded-[100px] px-[15px] gap-[10px] py-[7px] md:mt-0 mt-4">

                        <img src="{{asset('front_assets/images/flight-tour-top-down-icon.svg')}}">

                        <p>Sort by: Top picks for long stays</p>

                    </div>

                </div>

                @foreach ($paginatedhotel as $hotel)
                <div class="grid grid-cols-12 border border-[#CBCFD2] rounded mb-7">
                    <div class="flex flex-col col-span-12 md:col-span-4">
                        <img src="{{ asset('front_assets/imagess/flight-tour-hotel-one.webp') }}" alt="hotel-room" width="302" class="w-full h-full">
                        <div class="flex">
                            <div class="w-full"> <img src="{{ asset('front_assets/imagess/flight-tour-hotel-one-small-img-one.svg') }}" alt="hotel-small" class="w-full"> </div>
                            <div class="w-full"> <img src="{{ asset('front_assets/imagess/flight-tour-hotel-one-small-img-two.svg') }}" alt="hotel-small" class="w-full"> </div>
                            <div class="relative w-full bg-img-color"> <img src="{{ asset('front_assets/imagess/flight-tour-hotel-one-small-img-three.svg') }}" alt="hotel-small" class="w-full">
                                <a href="#" class="absolute left-0 text-xs font-medium text-white translate-x-1/2 translate-y-1/2 xl:text-base bottom-1/2 xl:right-[50px] md:right-[34px] right-[50px]">View All</a>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-8 col-span-12 pt-[15px] pr-5 pb-5 pl-[15px]">
                        <div class="flex flex-wrap items-center justify-between">
                            <div class="flex items-center xl:gap-x-[10px] gap-x-2">
                                <p class="text-[#45C9A5] flex items-center rounded-[100px] gap-2 text-sm font-medium bg-[#45c9a51a] py-1 px-[6px]">
                                    <img src="{{ asset('front_assets/images/flight-tour-badge-check-icon.svg') }}">Verified by Abhiyas Tour
                                </p>
                                <p class="text-[#F59E00] flex items-center rounded-[100px] gap-2 text-sm font-medium bg-[#f59e001a] py-1 px-[6px]">
                                    <i class="fa-solid fa-star"></i>4.5/5
                                </p>
                            </div>

                            <!-- <div class="flex items-center gap-x-[10px] md:mt-0 mt-2">
                                <div class="bg-dark-blue h-[44px] w-[44px] rounded-sm flex justify-center">
                                    <img src="{{ asset('front_assets/images/flight-tour-rating-icon.svg') }}" width="28" height="28">
                                </div>
                                <div>
                                    <h3 class="text-base font-semibold text-[#041614]">4.5 Very Good</h3>
                                    <span class="text-sm text-[#041614]">250+ Reviews</span>
                                </div>
                            </div> -->
                        </div>

                        <div class="flex items-center gap-4">
                            <!-- Display dynamic hotel name -->
                            <h3 class="text-[#041614] text-[28px] font-semibold">{{ $hotel['name'] ?? 'Hotel Name' }}</h3>
                            <a href="#" class="text-xs underline text-dark-blue">View on Map</a>
                        </div>

                        <!-- Display hotel location dynamically -->
                        <p class="text-[#505673] md:text-sm text-xs flex items-center gap-1 mt-[10px] mb-3">
                            <i class="text-lg fa-solid fa-location-dot text-dark-blue"></i>
                            {{ $hotel['iataCode'] ?? 'City' }} - {{ number_format($hotel['geoCode']['latitude'], 2) }}, {{ number_format($hotel['geoCode']['longitude'], 2) }}
                        </p>

                        <!-- Display dynamic amenities -->
                        <div class="flex flex-wrap gap-2 xl:gap-4 item-center">
                            <p class="border border-[#CBCFD2] rounded flex items-center px-[6px] py-1 xl:gap-x-2 gap-x-1">
                                <img src="{{ asset('front_assets/images/flight-tour-hotel-bedroom-icon.svg') }}" alt="bedroom-icon">
                                <span class="text-[#041614] xl:text-sm text-xs">4 Bedroom</span>
                            </p>
                            <!-- Add additional amenities here as needed -->
                        </div>

                        <!-- Display services by hotel dynamically -->
                        <div class="my-4">
                            <h4 class="text-base font-medium text-[#041614] mb-[5px]">Services by Hotel</h4>
                            <ul>
                                <li class="text-[#008234] flex items-center gap-x-1 text-sm mb-[5px]">
                                    <img src="{{ asset('front_assets/images/flight-tour-hotel-check-icon.svg') }}" alt="check-icon">
                                    Free Cancellation
                                </li>
                                <li class="text-[#008234] flex items-center gap-x-1 text-sm mb-[5px]">
                                    <img src="{{ asset('front_assets/images/flight-tour-hotel-check-icon.svg') }}" alt="check-icon">
                                    Free Airport Taxi
                                </li>
                                <li class="text-[#008234] flex items-center gap-x-1 text-sm">
                                    <img src="{{ asset('front_assets/images/flight-tour-hotel-check-icon.svg') }}" alt="check-icon">
                                    No prepayment needed
                                </li>
                            </ul>
                        </div>

                        <!-- Pricing and availability -->
                        <div class="flex flex-wrap justify-between">
                            <div class="flex items-center gap-x-[10px] md:mb-0 mb-2">
                                <h4 class="text-[#041614cc] xl:text-base text-sm line-through decoration-red-600">₹ 4,500</h4>
                                <h3 class="xl:text-[28px] font-semibold text-[#041614] text-xl">₹ 3,500</h3>
                                <span class="xl:text-sm text-[12px] text-[#041614]">+ ₹2,500 taxes & charges</span>
                            </div>
                            <a href="#" class="bg-dark-blue text-[#F9F9F9] xl:text-lg text-base py-4 xl:px-8 px-4 xl:gap-x-[10px] gap-x-1 flex items-center rounded-md hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">See Availability<i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach



                <div class="paginations mt-[26px]">
                    @if ($paginatedhotel->hasPages())
                    <ul class="flex items-center justify-center gap-x-3">
                        {{-- Previous Page Link --}}
                        @if ($paginatedhotel->onFirstPage())
                        <li class="text-[#CBCFD2] w-[30px] h-[30px] flex items-center justify-center">
                            <i class="fa-solid fa-angle-left"></i>
                        </li>
                        @else
                        <li class="w-[30px] h-[30px] flex items-center justify-center">
                            <a href="{{ $paginatedhotel->previousPageUrl() }}" class="text-dark-blue">
                                <i class="fa-solid fa-angle-left"></i>
                            </a>
                        </li>
                        @endif

                        {{-- Page Number Links --}}
                        @foreach ($paginatedhotel->getUrlRange(1, $paginatedhotel->lastPage()) as $page => $url)
                        <li class="w-[30px] h-[30px] rounded border flex items-center justify-center {{ $paginatedhotel->currentPage() == $page ? 'border-dark-blue' : '' }}">
                            <a href="{{ $url }}" class="{{ $paginatedhotel->currentPage() == $page ? 'text-dark-blue' : 'text-[#CBCFD2]' }}">
                                {{ $page }}
                            </a>
                        </li>
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginatedhotel->hasMorePages())
                        <li class="w-[30px] h-[30px] flex items-center justify-center">
                            <a href="{{ $paginatedhotel->nextPageUrl() }}" class="text-dark-blue">
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                        @else
                        <li class="text-[#CBCFD2] w-[30px] h-[30px] flex items-center justify-center">
                            <i class="fa-solid fa-angle-right"></i>
                        </li>
                        @endif
                    </ul>
                    @endif
                </div>

            </div>

        </div>

    </div>

</section>



@endsection