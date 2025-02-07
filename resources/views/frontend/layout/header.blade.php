<!DOCTYPE html>

@php
$settings;
@endphp
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Flight-Tour-Home</title>

    <link rel="stylesheet" href="{{asset('front_assets/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <header class="sticky top-0 z-50 py-4 bg-white lg:py-[22px]">
        <div class="container m-auto">
            <div id="menu"
                class="absolute top-0 left-0 flex w-full h-screen duration-700 bg-white md:w-2/4 lg:hidden -ml-ml-96">
                <div class="flex flex-col w-full text-white">
                    <div class="flex items-center justify-between px-5 py-4 border-b border-b-black">
                        <a href="{{route('front.index')}}">
                            @if(empty($settings->site_logo))
                            <img src="{{asset('front_assets/images/flight-tour-logo.svg')}}" alt="Logo" width="180" height="48">
                            @else
                            <img src="{{ asset('images/' . $settings->site_logo) }}" alt="Logo" width="180" height="48">
                            @endif </a>
                        <a href="javascript:void(0)" onclick="closeMenu()"

                            class="text-right text-4xl !leading-3 hover:text-red-400 bg-dark-blue text-white  flex justify-center items-center py-3 rounded px-2 w-10 h-10 ">&times;</a>
                    </div>
                    <ul
                        class="flex flex-col gap-4 p-5 text-base lg:flex-row md:justify-between lg:gap-7 md:gap-4 bg-dark-blue-400 h-svh">

                        <li>

                            <a href="{{route('front.index')}}"

                                class="block pb-2 text-base text-white transition border-b-2 border-white xl:text-xl lg:text-lg">Home</a>

                        </li>

                        <li>

                            <a href="" class="text-base text-white transition xl:text-xl lg:text-lg ">Flight</a>

                        </li>
                        <li>

                            <a href="" class="text-base text-white transition xl:text-xl lg:text-lg ">Tour</a>

                        </li>
                        <li>

                            <a href="" class="text-base text-white transition xl:text-xl lg:text-lg ">About</a>

                        </li>
                        <li>

                            <a href=""

                                class="text-base text-white transition xl:text-xl lg:text-lg ">Support</a>

                        </li>
                    </ul>
                </div>

            </div>

            <div id="offcanvas" class="flex items-center justify-between ">

                <a href="{{route('front.index')}}">
                    @if(empty($settings->site_logo))
                    <img src="{{asset('front_assets/images/flight-tour-logo.svg')}}" alt="Logo" width="180" height="48">
                    @else
                    <img src="{{ asset('images/' . $settings->site_logo) }}" alt="Logo" width="180" height="48">
                    @endif

                </a>

                <ul class="items-center hidden navbar lg:flex xl:gap-7 lg:gap-5 md:gap-3">
                    <li><a href="{{ route('front.index') }}" class="xl:text-xl lg:text-lg text-base pb-2 border-b-2 border-[#115779] text-dark-blue transition">Home</a></li>
                    <li><a href="" class="text-[#1A1E1F] xl:text-xl lg:text-lg text-base transition">Flight</a></li>
                    <li><a href="" class="text-[#1A1E1F] xl:text-xl lg:text-lg text-base transition">Tour</a></li>
                    <li><a href="" class="text-[#1A1E1F] xl:text-xl lg:text-lg text-base transition">About</a></li>
                    <li><a href="" class="text-[#1A1E1F] xl:text-xl lg:text-lg text-base transition">Support</a></li>
                </ul>

                <ul class="flex items-center gap-1 md:gap-4 navbar nav-right">
                    <li class="flex gap-1 lg:gap-x-5 md:gap-x-3">
                        @if (!Auth::guard('front_user')->check())
                        <!-- Show WhatsApp and Login button if user is not logged in -->
                        <a href="#" class="whatup flex items-center gap-1 lg:gap-3 justify-center w-[70px] xl:w-[205px] md:w-[130px] md:h-[45px] xl:h-[56px] h-[30px] border border-dark-blue text-[14px] md:text-[20px] text-[#505673] hover:bg-dark-blue hover:text-[#F9F9F9] rounded transition">
                            <i class="text-xl xl:text-[28px] fa-brands fa-whatsapp text-black transition"></i> what’s up
                        </a>
                        <a href="{{ route('front.login') }}" class="login flex items-center justify-center w-[70px] xl:w-[141px] xl:h-[56px] md:w-[110px] md:h-[45px] h-[30px] text-[14px] md:text-[20px] text-[#F9F9F9] bg-dark-blue hover:bg-transparent hover:border-dark-blue hover:text-[#505673] hover:border rounded transition">Login</a>
                        @else
                        @php
                        $authdataimg = Auth::guard('front_user')->user()->image;
                        @endphp
                        <!-- Profile image with dropdown menu if user is logged in -->
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/' . ($authdataimg ?? '1727852246.webp')) }}" style="width: 74px;" alt="userImage">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{route('frontuserprofile')}}" class="dropdown-item ai-icon">
                                <i class="fa-solid fa-user"></i>
                                <span class="ms-2">Profile</span>
                            </a>
                            <a href="{{route('userchangepass')}}" class="dropdown-item ai-icon">
                                <i class="fa-solid fa-unlock-keyhole"></i>
                                <span class="ms-2">Change password</span>
                            </a>
                            <a href="{{ route('userlogout') }}" class="dropdown-item ai-icon">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="ms-2">Logout</span>
                            </a>
                        </div>
                        @endif
                    </li>
                    <!-- Mobile menu toggle button -->
                    <li>
                        <span onclick="openMenu()" class="text-2xl font-semibold cursor-pointer lg:hidden md:text-3xl">&#9776;</span>
                    </li>
                </ul>

                <!-- <div class="flex gap-1 connect-link lg:gap-x-5 md:gap-x-2 ">



        <a href="#" class="whatup flex items-center gap-1 lg:gap-3 justify-center w-[140px] lg:w-[205px] lg:h-[56px] h-[45px] border border-dark-blue border-solid md:text-[20px] text-base hover:bg-dark-blue hover:text-[#F9F9F9] rounded">

            <i class="hidden fa-brands fa-whatsapp md:block"></i> what’s up</a>

        <a href="#" class="login flex items-center justify-center  w-[140px] lg:w-[205px] lg:h-[56px] h-[45px] md:text-[20px] text-base text-[#F9F9F9] bg-dark-blue hover:bg-transparent hover:border-dark-blue hover:text-[#505673] hover:border rounded">Log in</a>

       

    </div> -->

            </div>

        </div>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            <strong>Please fix the following errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

                @endforeach

            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    </header>