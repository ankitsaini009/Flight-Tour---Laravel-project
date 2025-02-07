<footer class="bg-dark-blue md:py-[42px] py-[50px]">
    @php
    $settings;
    @endphp
    <div class="container mx-auto">

        <div class="grid md:grid-cols-2 grid-cols-1 footer-content md:mb-[83px] mb-14">

            <div class="lg:w-[55%] md:w-4/5 w-full info">

                <div class="text-box">

                    @if(empty($settings->site_logo))
                    <img src="{{asset('front_assets/images/flight-tour-footer-logo.svg')}}" alt="footer-logo" width="180" height="48">
                    @else
                    <img src="{{ asset('images/' . $settings->site_footerlogo) }}" alt="footer-logo" width="180" height="48">
                    @endif </a>

                    <p class="text-[#E3E3E3] text-base md:mt-[29px] md:mb-[51px] mt-5 mb-6 ">{{$settings->site_description}}</p>
                </div>

                <div class="">

                    <a href="#" class="block text-xl text-dark-yellow border-light-brown pb-[18px] border-b"> Read more</a>

                    <div class="links mt-[18px]">

                        <ul class="flex gap-x-[11px] items-center ">

                            <li><a href="{{$settings->facebook_url}}" class="text-[#EEEEEE] text-[15px]"><i class="fa-brands fa-facebook"></i></a></li>

                            <li><a href="{{$settings->twitter_url}}" class="text-[#EEEEEE] text-[15px]"><i class="fa-brands fa-twitter"></i></a></li>

                            <li><a href="{{$settings->linkedIn_url}}" class="text-[#EEEEEE] text-[15px]"><i class="fa-brands fa-linkedin-in"></i></a></li>

                            <li><a href="{{$settings->instagram_url}}" class="text-[#EEEEEE] text-[15px]"><i class="fa-brands fa-instagram"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="grid grid-cols-2 mt-6 info-links md:mt-0">

                <div class="quiks-links ">

                    <h3 class="mb-5 text-xl font-bold text-dark-yellow md:mb-9">Quick Links</h3>

                    <ul>

                        <li class="flex items-center gap-[11px] mb-[10px] "><img src="{{asset('front_assets/images/flight-tour-Polygon-icon.svg')}}"><a href="#" class="md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6]">Flight </a></li>

                        <li class="flex items-center gap-[11px] mb-[10px] "><img src="{{asset('front_assets/images/flight-tour-Polygon-icon.svg')}}"><a href="#" class="md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6]">Tour </a></li>

                        <li class="flex items-center gap-[11px] mb-[10px] "><img src="{{asset('front_assets/images/flight-tour-Polygon-icon.svg')}}"><a href="#" class="md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6]">About </a></li>

                        <li class="flex items-center gap-[11px] mb-[10px] "><img src="{{asset('front_assets/images/flight-tour-Polygon-icon.svg')}}"><a href="#" class="md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6]">Terms Of Service </a></li>

                        <li class="flex items-center gap-[11px] mb-[10px] "><img src="{{asset('front_assets/images/flight-tour-Polygon-icon.svg')}}"><a href="#" class="md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6]">Privacy Policy </a></li>

                        <li class="flex items-center gap-[11px]  "><img src="{{asset('front_assets/images/flight-tour-Polygon-icon.svg')}}"><a href="#" class="md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6]">Report an issue </a></li>

                    </ul>

                </div>

                <div class="contact info-links">

                    <h3 class="mb-5 text-xl font-bold text-dark-yellow md:mb-9">Contact</h3>

                    <ul>

                        <li class="mb-[10px] "><a href="tel:+669 4398 4920" class="md:text-sm lg:text-base text-[13px] text-light-brown  hover:text-[#c9c6c6]">Phone: {{$settings->contect_phone}} </a></li>

                        <li class="mb-[10px] "><a href="mailto:sahabuddin@gmail.com" class="md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6]">Email: {{$settings->contact_email}}

                            </a></li>

                        <li class="mb-[10px] md:text-sm lg:text-base text-[13px] text-light-brown hover:text-[#c9c6c6] ">Address: {{$settings->site_address}}</li>



                    </ul>

                </div>

            </div>

        </div>



        <div class="flex items-center justify-between pt-3 border-t copy-right border-[#CDCDCD] ">

            <p class="text-sm text-[#EEEEEE] font-medium hover:text-[#c9c6c6]"> &#169; Copyright 2024</p>

            <div class="flex items-center link-connect gap-x-1">

                <a href="#" class="text-sm text-[#EEEEEE] font-medium hover:text-[#c9c6c6]">Privacy Policy</a> &nbsp;

                <a href="#" class="text-sm text-[#EEEEEE] font-medium hover:text-[#c9c6c6]">Customer support</a>



            </div>

        </div>

    </div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="../src/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {

        function setupAutocomplete(inputId, suggestionsId) {

            $(`#${inputId}`).on('keyup', function() {

                let keyword = $(this).val();

                if (keyword.length > 3) {

                    $.ajax({

                        url: '{{ route("search.locations") }}',

                        method: 'GET',

                        data: {

                            keyword: keyword

                        },

                        success: function(response) {

                            $(`#${suggestionsId}`).empty().show();

                            response.forEach(function(location) {

                                $(`#${suggestionsId}`).append(

                                    `<a href="#" class="list-group-item list-group-item-action autocomplete-suggestion-item" data-iata="${location.iataCode}">

                                                                    ${location.name} (${location.iataCode}) - ${location.countryName}

                                                                </a>`

                                );

                            });

                            $(`#${suggestionsId} .autocomplete-suggestion-item`).on('click', function(e) {

                                e.preventDefault();

                                const selectedText = $(this).text().trim();



                                $(`#${inputId}`).val(selectedText);

                                $(`#${suggestionsId}`).empty().hide();

                            });

                        },

                        error: function() {

                            $(`#${suggestionsId}`).html('<p class="text-danger">Error fetching suggestions.</p>');

                        }

                    });

                } else {

                    $(`#${suggestionsId}`).empty().hide();

                }

            });

        }

        // function hotelsetupAutocomplete(inputId, suggestionsId) {

        //     $(`#${inputId}`).on('keyup', function() {

        //         let keyword = $(this).val();

        //         if (keyword.length > 3) {

        //             $.ajax({

        //                 url: '{{ route("search.hotelbycity") }}',

        //                 method: 'GET',

        //                 data: {

        //                     keyword: keyword

        //                 },

        //                 success: function(response) {

        //                     $(`#${suggestionsId}`).empty().show();

        //                     response.forEach(function(location) {

        //                         $(`#${suggestionsId}`).append(

        //                             `<a href="#" class="list-group-item list-group-item-action autocomplete-suggestion-item" data-iata="${location.iataCode}">

        //                                                             ${location.name} (${location.iataCode}) - ${location.countryName}

        //                                                         </a>`

        //                         );

        //                     });

        //                     $(`#${suggestionsId} .autocomplete-suggestion-item`).on('click', function(e) {

        //                         e.preventDefault();

        //                         const selectedText = $(this).text().trim();



        //                         $(`#${inputId}`).val(selectedText);

        //                         $(`#${suggestionsId}`).empty().hide();

        //                     });

        //                 },

        //                 error: function() {

        //                     $(`#${suggestionsId}`).html('<p class="text-danger">Error fetching suggestions.</p>');

        //                 }

        //             });

        //         } else {

        //             $(`#${suggestionsId}`).empty().hide();

        //         }

        //     });

        // }

        setupAutocomplete('origin', 'origin-suggestions');

        setupAutocomplete('destination', 'destination-suggestions');

        setupAutocomplete('city', 'city-suggestions');



        $(document).on('click', function(e) {

            if (!$(e.target).closest('.autocomplete-suggestions').length) {

                $('.autocomplete-suggestions').empty().hide();

            }

        });

    });



    let adults = 2;

    let children = 0;

    let rooms = 1;

    function updateCount(type, delta) {

        if (type === 'adults') {

            adults = Math.max(1, adults + delta); // Minimum 1 adult

            document.getElementById('adults-count').textContent = adults;

        } else if (type === 'children') {

            children = Math.max(0, children + delta); // Minimum 0 children

            document.getElementById('children-count').textContent = children;

        } else if (type === 'rooms') {

            rooms = Math.max(1, rooms + delta); // Minimum 1 room

            document.getElementById('rooms-count').textContent = rooms;

        }

    }

    function updateSummary() {

        // Calculate total travelers (adults + children)

        const totalTravelers = adults + children;



        // Generate summary text based on current counts

        const summaryText = `${totalTravelers} traveler${totalTravelers > 1 ? 's' : ''}, ${rooms} room${rooms > 1 ? 's' : ''}`;



        // Update the summary field with total travelers and rooms

        document.getElementById('traveller-summary').value = summaryText;
        document.getElementById('totalTravelers').value = totalTravelers;
        document.getElementById('roomQuantity').value = rooms;

    }

    function updateCount2(type, delta) {

        if (type === 'adults') {

            adults = Math.max(1, adults + delta); // Minimum 1 adult

            document.getElementById('adults-count2').textContent = adults;

        } else if (type === 'children') {

            children = Math.max(0, children + delta); // Minimum 0 children

            document.getElementById('children-count2').textContent = children;

        }

    }

    function updateSummary2() {

        // Calculate total travelers (adults + children)

        const totalTravelers = adults + children;



        // Generate summary text based on current counts

        const summaryText = `${totalTravelers} traveler${totalTravelers > 1 ? 's' : ''}`;



        // Update the summary field with total travelers and rooms

        document.getElementById('traveller-summary2').value = summaryText;
        document.getElementById('totalTravelers2').value = totalTravelers;

    }
</script>

<script>
    var menu = document.getElementById("menu");

    var main = document.getElementById("offcanvas");



    function openMenu() {

        menu.classList.remove('-ml-ml-96');

        menu.classList.add('ml-0');

    }



    function closeMenu() {

        menu.classList.remove('ml-0');

        menu.classList.add('-ml-ml-96');

    }
</script>



<script>
    const qualityCareSlider = new Swiper(".tour-package-slider", {

        slidesPerView: 3,

        spaceBetween: 43,

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev",

        },

        pagination: {

            el: ".swiper-pagination",

            clickable: true,

        },

        breakpoints: {

            320: {

                slidesPerView: 1,

                spaceBetween: 10,

            },

            360: {

                slidesPerView: 2,

                spaceBetween: 10,

            },

            640: {

                slidesPerView: 1,

                spaceBetween: 10,

            },

            768: {

                slidesPerView: 3,

                spaceBetween: 20,

            },

            1024: {

                slidesPerView: 3,

                spaceBetween: 43,

            },

        },

    });
</script>



</body>



</html>