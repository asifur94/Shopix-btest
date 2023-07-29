@extends('fontend.shopx.layouts.main')

@section('content')
    <button onclick="topFunction()" id="ToTopBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
    <div class="layout__head">

        {{-- <a name="" id="getcity" class="btn btn-primary" href="#" role="button">GetCity</a> --}}

        <!-- DISTURBANCE NOTICE (DEACTIVATED) -->
        <div class="topbar-alert">
            <div class="topbar-alert__container">
                <div class="topbar-alert__body">
                    <i class="topbar-alert__exclamation fa fa-exclamation-circle" aria-hidden="true"></i>
                    <span class="topbar-alert__closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <a href="#">
                        <p style="color: #ffffff;" class="topbar-alert__text">
                            @if (!empty($websitedata))
                            {{ $websitedata->topbar }}
                            @else
                            Here top bar.
                            @endif
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- /DISTURBANCE NOTICE -->

        @if (!empty(getwebsitetopdata()->theme_color))
        <div style="background: {{  getwebsitetopdata()->theme_color  }};" class="topbar__container-inner " id="StickyHeader">

        @else
        <div style="background: #734434;" class="topbar__container-inner " id="StickyHeader">

        @endif
            <div class="topbar__inner">
                <div class="Portal_topnav">
                    <div class="offer_feed ">
                        @if (!empty(getwebsitetopdata()->theme_color))
                            <p style="background: {{  getwebsitetopdata()->theme_color  }};">

                        @else
                        <p style="background: #734434;">

                        @endif

                            @if (!empty($websitedata))
                            {{ $websitedata->sticy_topbar }}
                            @else
                            Here Sticy top bar.
                            @endif
                        </p>
                    </div>
                    <!-- <div class="nav-dropdown">
                        <button class="nav-dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Jonathan</strong></button>
                        <div class="nav-dropdown-content">
                          <a href="#">My Profile</a>
                          <a href="#">Agent Portal</a>
                          <a href="#">Log out</a>
                        </div>
                      </div> -->
                    <!-- <a href="javascript:void(0);" style="font-size:25px;" class="nav-icon" onclick="NavResponsive()"><strong>&#9776;</strong></a> -->
                </div>

            </div>
        </div>


    </div>


    </div>


    <script>
        window.onscroll = function() {
            onscroll_function()
        };
        var navbar = document.getElementById("StickyHeader");
        var sticky = navbar.offsetTop;

        function onscroll_function() {
            navFunction();
            scrollFunction();
            //...what ever else you want to trigger
        }

        function navFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

        function scrollFunction() {
            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                document.getElementById("ToTopBtn").style.display = "block";
            } else {
                document.getElementById("ToTopBtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

        function NavResponsive() {
            var x = document.getElementById("PortalTopnav");
            if (x.className === "Portal_topnav") {
                x.className += " responsive";
            } else {
                x.className = "Portal_topnav";
            }
        }
    </script>






    <div class="videobanner">
        <div class="videocontainer">

            <video class="videoembed" autoplay muted loop>
                <source src="http://www.adrianparr.com/download/keyboard-video.mp4" type="video/mp4">
                <source src="https://netdemo.uk/bbb/bbb.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>

            <div class="videobanner-title">
                <a href="index.html"><img class="logoo" src="images/logo.png" alt=""></a>
                <h1 style="margin-bottom: 20px;">Let’s explore our product </h1>
                <!-- <a href=""  class="order-submit3">অর্ডার করুন </a> -->
            </div>

        </div>
    </div>







    @if (!empty(getwebsitetopdata()->theme_color))
        <div style="background: {{  getwebsitetopdata()->theme_color  }} ;color: #ffffff;" class="promo-area">

    @else
    <div style="background: #734434 ;color: #ffffff;" class="promo-area">

    @endif
        <div class="container">
            <div class="row promo">
                <div class="col-sm-3 col-6 ">
                    <div class="promo-item">
                        <div class="promo-img">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>

                        </div>
                        <div class="promo-content">
                            <p><strong>GIFT VOUCHER</strong></p>
                            <p>24-72 Hours</p>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-3 col-6">
                    <div class="promo-item">
                        <div class="promo-img">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>

                        </div>
                        <div class="promo-content">
                            <p><strong>ONLINE SUPPORT</strong></p>
                            <p>with a 30 day</p>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-3 col-6">
                    <div class="promo-item">
                        <div class="promo-img">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                            </svg>

                        </div>
                        <div class="promo-content">
                            <p><strong>MONEY BACK GUARANTEE</strong></p>
                            <p>100% Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-3 col-6">
                    <div class="promo-item">
                        <div class="promo-img">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                            </svg>

                        </div>
                        <div class="promo-content">
                            <p><strong>FREE SHIPPING & AMP; RETURN</strong></p>
                            <p>Free Shipping on All Orders</p>
                        </div>
                    </div>
                </div>
                <!-- col end -->
            </div>
        </div>
    </div>
    <!-- promo end -->


    <!-- whychoose end -->
    <div class="offer-area">
        <div class="container">
            <div class="row">
                <!--  -->
                <!-- col 6 -->
                <div>
                    <div class="why-us-area">
                        <div class="col-xl-7">
                            <div class="why-content">
                                <h3>আমাদের থেকে কেন কিনবেন:</h3>
                                <ul>
                                    <li>ডেলিভারি চার্জ সম্পুর্ন ফ্রি।</li>
                                    <li>50% ছাড়ে মাত্র ১২৯৯ টাকায় পাচ্ছেন চমৎকার স্টাইলিশ 3 পিসের ব্যাকপ্যাক সেটটি।</li>
                                    <li>অত্যন্ত সুন্দর ও ইউনিক 3 পিসের ব্যাকপ্যাক সেট।</li>
                                    <li>ছবিতে যা দেখছেন ১০০% সেইম পাবেন।</li>
                                    <li>জেলা/উপজেলা সদরে হোম ডেলিভারি সুবিধা।</li>
                                    <li>প্রোডাক্ট হাতে পেয়ে পেমেন্ট করার সুবিধা।</li>
                                </ul>
                                <!-- <h3>অফারটি থাকবে মাত্র</h3> -->

                                <a href="" class="">Order Now </a>
                            </div>
                        </div>
                        <!-- col end -->
                        <div class="col-xl-5">
                            <div class="why-us-banner">

                                <div class="banner-item2">
                                    <a href=""><img
                                            src="{{ asset('fontend/shopx/') }}/images/whychoose-product.png"
                                            alt="" /></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- product-card end -->


                </div>
            </div>







        </div>
    </div>

    <div class="offer-area3">
        <div class="container">
            <div class="row t2offer">
                <div class="time2n">
                    <div class="offer2">
                        <h2 class="orftxt">GRAB THIS LIMITED TIME OFFER </h2>
                    </div>
                    <div class="offerti">
                        <div class="element countdown-container">
                            <div class="element days-c">
                                <p class="big-text" id="days">0</p>
                                <span>Days</span>
                            </div>
                            <div class="element hours-c">
                                <p class="big-text" id="hours">0</p>
                                <span>Hours</span>
                            </div>
                            <div class="element minutes-c">
                                <p class="big-text" id="minutes">0</p>
                                <span>Minutes</span>
                            </div>
                            <div class="element seconds-c">
                                <p class="big-text" id="seconds">0</p>
                                <span>Seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 6 -->
            </div>
        </div>
    </div>


    <!-- video part area -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="product-gallery">
                        <ul id="imageGallery">
                            <li class="pdtslid" data-thumb="{{ asset('fontend/shopx/') }}/images/product.png"
                                data-src="images/product.png">
                                <img src="{{ asset('fontend/shopx/') }}/images/product.png" />
                            </li>
                            <li class="pdtslid" data-thumb="{{ asset('fontend/shopx/') }}/images/product1.png"
                                data-src="images/product1.png">
                                <img src="{{ asset('fontend/shopx/') }}/images/product1.png" />
                            </li>
                            <li class="pdtslid" data-thumb="{{ asset('fontend/shopx/') }}/images/product2.png"
                                data-src="images/product2.png">
                                <img src="{{ asset('fontend/shopx/') }}/images/product2.png" />
                            </li>
                            <li class="pdtslid" data-thumb="{{ asset('fontend/shopx/') }}/images/product3.png"
                                data-src="images/product3.png">
                                <img src="{{ asset('fontend/shopx/') }}/images/product3.png" />
                            </li>
                            <li class="pdtslid" data-thumb="{{ asset('fontend/shopx/') }}/images/product.png"
                                data-src="images/product.png">
                                <img src="{{ asset('fontend/shopx/') }}/images/product.png" />
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- col 6 -->
                <div class="col-sm-6">
                    <div class="product-card product-top">
                        <h1 class="product-name">
                            @if (!empty($getproduct))
                                {{ $getproduct->name }}
                            @else
                                The Product Name Here
                            @endif
                        </h1>
                        <p></p>
                        <ul class="color-review">
                            <li>Color <span class="black active" data-color-primary="#000" data-color-sec="#212121"
                                    data-pic="{{ asset('fontend/shopx/') }}/images/product.png"></span>
                                <span class="red" data-color-primary="#7E021C" data-color-sec="#bd072d"
                                    data-pic="{{ asset('fontend/shopx/') }}/images/product.png"></span>
                                <span class="orange" data-color-primary="#CE5B39" data-color-sec="#F18557"
                                    data-pic="{{ asset('fontend/shopx/') }}/images/product1.png"></span>
                            </li>
                            <li class="animi"><img src="images/line-carve.png" alt="">

                                @if (!empty($getproduct))
                                    {{ $getproduct->sold_in_last_10_hours }}
                                @else
                                    The Product Name Here
                                @endif
                                Sold In Last 10 Hours
                            </li>
                        </ul>
                        <ul class="color-review">

                            <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> ( {{ $getproduct->reviews }}
                                Reviews )</li>
                        </ul>
                        <h6 class="price">৳ {{ $getproduct->discount }} <span class="old-price"><del>৳
                                    {{ $getproduct->price }}</del></span></h6>
                        <p></p>
                    </div>
                    <!-- product-card end -->
                    <div class="  product-card my-2 product-middle">
                        <ul class="product-code">
                            <li><img src="{{ asset('fontend/shopx/') }}/images/shopping-bag.png" alt=""> Product
                                Code: {{ $getproduct->productcode }}</li>
                            <li><img src="{{ asset('fontend/shopx/') }}/images/eye-outline.png" alt="">
                                {{ $getproduct->Viewing }} Customers Are Viewing This Product</li>

                        </ul>
                    </div>
                    <button class="order-submit">Order Now </button>
                    <!-- product-card end -->
                    <div style="margin-top: 20px;" class="product-card product-bottom">
                        <ul class="product-delivery">
                            <li class="delivery-date"><img src="images/shopping-bag.png" alt=""> Delivery Within
                                2-3 Days. 100% COD</li>
                            <li><img src="{{ asset('fontend/shopx/') }}/images/check-right.png" alt=""> ঢাকায়
                                ডেলিভারি খরচ ৳60.00</li>
                            <li><img src="{{ asset('fontend/shopx/') }}/images/check-right.png" alt=""> ঢাকার
                                বাইরের কুরিয়ার খরচ অগ্রিম দিতে হবে ৳130.00</li>
                            <li><img src="{{ asset('fontend/shopx/') }}/images/bulb.png" alt=""> বিঃদ্রঃ- ছবি এবং
                                বর্ণনার সাথে পণ্যের মিল থাকা সত্যেও আপনি পণ্য গ্রহন করতে না চাইলে ডেলিভারি চার্জ ঢাকার মধ্যে
                                ৬০ টাকা ডেলিভারি ম্যানকে প্রদান করে পণ্যটি ফেরত দিতে হবে।</li>

                        </ul>
                        <p style="margin-top: 10px;">রমাদান হোক উৎসবমুখর🌙 <br>
                            পবিত্র মাহে রমজান উপলক্ষে সারা বাংলাদেশে পাচ্ছেন ফ্রি হোম ডেলিভারি 🆓🚚</p>
                    </div>
                    <!-- product-card end -->

                </div>
            </div>





            <div style="margin-top: 40px;" class="container jani">
                <div class="checkout-product9 ab-head">
                    <h5 style="font-size: 22px;"><a style="margin-right: 10px;" href="" class=" right c2">
                            Description</a>
                        <a href="" class=" right c1"> Customer Review</a>
                    </h5>
                </div>
                <div style="margin-top: -20px;" class="row">
                    <div class="ab-container one">

                        <div style="margin-top: 40px;" class="ab-content">
                            <p class="checkout-product8"></p>

                            <div class="description-item">
                                <p style="margin-bottom: 10px;">Faded short sleeves t-shirt with high neckline. Soft and
                                    stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready
                                    for summer!</p>
                                <ul>
                                    <li> Leather Type : {{ $getproduct->leathertype }}</li>
                                    <li>Material : {{ $getproduct->material }}</li>
                                    <li>Active noise cancellation : {{ $getproduct->active_noise_cancellation }}</li>
                                    <li>Communication : {{ $getproduct->communication }}</li>
                                    <li>Control the volumes : {{ $getproduct->control_the_volumes }}</li>
                                    <li>Sensitivity : {{ $getproduct->sensitivity }}</li>
                                    <li>Impedance range : {{ $getproduct->impedance_range }}</li>
                                    <li>Model Number : {{ $getproduct->modelnumber }}</li>
                                    <li>Headphone pad material : {{ $getproduct->headphone_pad_material }}</li>
                                    <li>Bluetooth version :{{ $getproduct->bluetooth_version }}</li>
                                    <li>Frequency response range : {{ $getproduct->frequency_response_range }}</li>
                                    <li>Total Harmonic Distortion : {{ $getproduct->total_harmonic_distortion }}</li>
                                    <li>Charging Method : {{ $getproduct->charging_method }}</li>
                                    <li>Maximum output : {{ $getproduct->maximum_output }}</li>
                                    <li>Codecs : {{ $getproduct->codecs }}</li>
                                    <li>Resistance : {{ $getproduct->resistance }}</li>
                                    <li>Features : {{ $getproduct->features }}, </li>
                                    <li>{{ $getproduct->point_1 }} </li>
                                    <li>{{ $getproduct->point_2 }}.</li>

                                </ul>
                                <p style="margin-top: 10px;">Faded short sleeves t-shirt with high neckline. Soft and
                                    stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready
                                    for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material
                                    for a comfortable fit. Accessorize with a straw hat and you're ready for summe!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ab-container two hide">
                    <p class="checkout-product7"></p>
                    <div class="ab-content">
                        <!-- Design: https://dribbble.com/shots/7434211-Review-Panel-UI-Design -->

                        <div class="review-sec">
                            <div class="global">
                                <h5>Customer Review</h5>
                                <span class="global-value">0.0</span>
                                <div class="rating-icons">
                                    <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="two"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                </div>
                                <p style="margin-top: 10px;">( based on <span class="total-reviews">0</span> Reviews )</p>
                            </div>
                            <div class="chart">
                                <div class="rate-box">
                                    <p class="rewiew-text">Excellent<span class="value">5</span></p>
                                    <div class="progress-bar">
                                        <span class="progress"></span>
                                    </div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <p class="rewiew-text1">Good<span class="value">4</span></p>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <p class="rewiew-text2">Average<span class="value">3</span></p>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <p class="rewiew-text3">Below Average<span class="value">2</span></p>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <p class="rewiew-text4">Poor<span class="value">1</span></p>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- product part end -->
    <div class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-8">
                    <div class="banner-item">
                        <a href=""><img src="{{ asset('fontend/shopx/') }}/images/advertisment-one.png"
                                alt=""></a>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-4 col-4">
                    <div class="banner-item ">
                        <a href=""><img src="{{ asset('fontend/shopx/') }}/images/advertisment-two.png"
                                alt=""></a>
                    </div>
                    <div class="banner-item mt-4">
                        <a href=""><img src="{{ asset('fontend/shopx/') }}/images/advertisment-three.png"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <!--  -->
            <!-- row end -->
        </div>
    </div>
    <!-- banner section end -->
    <div class="checkout-section">
        <div class="container">
            <div style="margin-top: -20px;" class="row">
                <div class="col-sm-12">
                    <h2 class="checkout-title">বিলিং এন্ড শিপিং</h2>

                        @if (!empty(getwebsitetopdata()->theme_color))



                                @if (!empty(getshippingtext()->sheepings_text))
                                <p  style="background-color: {{  getwebsitetopdata()->theme_color  }}; " class="checkout-contact">{{ getshippingtext()->sheepings_text }}</p>
                                @else
                                <p  style="background-color: {{  getwebsitetopdata()->theme_color  }}; " class="checkout-contact">যেকোনো প্রয়োজনে কল করুন : 09639-112150 অথবা হোয়াট্স আপ করুন : 01826-462224</p>

                                @endif
                        @else


                        @if (!empty(getshippingtext()->sheepings_text))
                        <p  class="checkout-contact">{{ getshippingtext()->sheepings_text }}</p>
                        @else
                        <p  class="checkout-contact">যেকোনো প্রয়োজনে কল করুন : 09639-112150 অথবা হোয়াট্স আপ করুন : 01826-462224</p>

                        @endif


                        @endif
                </div>
            </div>
            <div class="col-sm-12">
                <div class="checkout-inner">
                    <form action="" id="oderfromid">
                        <div class="row">
                            <!-- <p class="checkout-product5" style="margin-bottom: 20px;">Have a coupon? <span> <a href="" style="color: #4E6076;">Click here to enter your code</a> </span> </p> -->

                            <div class="col-sm-7">
                                <p class="checkout-product5" style="margin-bottom: 20px;">Have a coupon? <span> <a
                                            href="" style="color: #4E6076;">Click here to enter your code</a>
                                    </span> </p>

                                <div class="checkout-item2">

                                    <h5 style="margin-bottom: 20px;color: #777777;">Billing & Shipping</h5>
                                    <div class="form-group">
                                        <label for="name">আপনার নাম <span>*</span></label>
                                        <input type="text" id="customer_name" name="customer_name"
                                            class="form-control">
                                        <p class="bg-danger text-white error customer_name-error"></p>

                                    </div>
                                    <!-- form-group end -->
                                    {{-- <div style="margin-top: 10px;" class="form-group">
                                        <label for="district">জেলা <span>*</span></label>
                                        <select type="text" name="customer_area" id="customer_area"
                                            class="form-control select2">
                                            @foreach ($newdata as $newdatas)
                                                {

                                                <option value="{{ $newdatas->city_id }}">{{ $newdatas->city_name }}
                                                </option>

                                                }
                                            @endforeach
                                        </select>


                                    </div>
                                    <!-- form-group end -->
                                    <div style="margin-top: 10px;" class="form-group">
                                        <label for="district">উপজেলা <span>*</span></label>
                                        <select type="text" name="customer_zone" id="customer_zone" disabled
                                            class="form-control select2">
                                            {{-- <option value="10">Select Option</option> --}}

                                        {{-- </select>


                                    </div> --}}
                                    <!-- form-group end -->

{{--
                                    <div style="margin-top: 10px;" class="form-group">
                                        <label for="district">এলাকা <span>*</span></label>
                                        <select type="text" name="customer_particular_zone" disabled
                                            id="customer_particular_zone" class="form-control select2">
                                            {{-- <option value="">Select Option</option> --}}

                                        {{-- </select> --}}


                                    {{-- </div> --}}
                                    <!-- form-group end -->


                                    <div style="margin-top: 10px;" class="form-group">
                                        <label for="phone">মোবাইল নাম্বার <span>*</span></label>
                                        <input type="text" id="phone" name="phone"
                                            placeholder="১১ ডিজিটের নাম্বারটি সঠিকভাবে লিখুন" class="form-control">
                                        <p class="bg-danger text-white error phone-error"></p>

                                    </div>
                                    <!-- form-group end -->
                                    <div style="margin-top: 10px;" class="form-group">
                                        <label for="customer_full_address">ডেলিভারি ঠিকানা <span>*</span></label>
                                        <textarea id="customer_full_address" placeholder="আপনার সম্পূর্ণ ডেলিভারি ঠিকানা দিন" name="customer_full_address"
                                            cols="8" rows="6" class="form-control"></textarea>
                                        <p class="bg-danger text-white error customer_full_address-error"></p>

                                    </div>
                                    <!-- form-group end -->
                                </div>
                            </div>
                            <!-- col end -->
                            <div class="col-sm-5">
                                <div class="checkout-item m_margin">
                                    <h2 style="font-size: 1.3em;font-weight: 600;color: #555555;">Your Order</h2>
                                    <button type="button" id="btnOpenForm" class=" order-submit2">Order
                                        Now </button>
                                    <div class="checkout-product3"
                                        style="display: flex; justify-content: space-between; ">
                                        <div style="flex: 1;font-weight: 600;color:#777777;">Product</div>

                                        <div style="font-weight: 600;color:#777777;">Subtotal</div>
                                    </div>

                                    <div class="checkout-product" style="display: flex; justify-content: space-between; ">
                                        <div style="flex: 1;font-size: .9em;color:#777777;">{{ $getproduct->name }}</div>

                                        <div>
                                            <p style="font-size: .9em;font-weight: 600;">{{ $getproduct->discount }}.00
                                            </p>
                                        </div>
                                    </div>

                                    <div class="checkout-product" style="display: flex; justify-content: space-between; ">
                                        <div style="flex: 1;font-size: .9em;color:#777777;">Subtotal</div>

                                        <div>
                                            <p style="font-size: .9em;font-weight: 600;">{{ $getproduct->discount }}.00
                                            </p>
                                        </div>
                                    </div>
                                    <div class="checkout-product" style="display: flex; justify-content: space-between; ">
                                        <div style="flex: 1;font-size: .9em;color:#777777;">Shipping</div>

                                        <div>
                                            <p style="font-size: .9em;">Free Shipping</p>
                                        </div>
                                    </div>

                                    <div class="checkout-product3"
                                        style="display: flex; justify-content: space-between; ">
                                        <div style="flex: 1;font-size: .9em;color:#777777;">Total</div>

                                        <div>
                                            <p style="font-size: .9em;font-weight: 600;">{{ $getproduct->discount }}.00
                                            </p>
                                        </div>
                                    </div>




                                    <h3 style="font-size: .9em;font-weight: 600;margin-top: 20px;">Cash On Delivery</h3>
                                    <p style="font-size: 14px;margin-top: 10px;color:#777777;">Pay With Cash Upon Delivery.
                                    </p>



                                </div>
                            </div>
                            <!-- col end -->

                            <div id="hide-section">
                                <h1>Hide section</h1>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
@endsection


@section('extraJs')
    <script type="text/javascript">
        // alert("I am here.");



        $("#btnOpenForm").click(function() {
            event.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('customer.product.save') }}',
                type: 'POST',
                data: $("#oderfromid").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {
                        // alert("I am here in 200 TOp");


                        var html = `

                        <div class="form-popup-bg is-visible">
                                    <div class="form-container">
                                        <button id="btnCloseForm" class="close-button">X</button>
                                        <div style="text-align: center;">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sucess w-5 h-5">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg> -->
                                            <img style="width: 30%;" src="images/Prize cup.png" alt="">

                                        </div>
                                        <p style="margin-top: 20px; color: white;">Your Order id : ${response.orders_id}</p>
                                        <h6 class="pop-up-h" style="margin-top: 20px;color: white">Your Order Placed
                                            Successfully!</h6>

                                        <p class="pop-up-p" style="margin-top: 20px;color: white">আপনার অরডারটি সফল ভাবে
                                            সম্পন্ন হয়েছে। আমাদের কাস্টমার কেয়ার প্রতিনিধি শীঘ্রই আপনাকে ফোন করে অর্ডার কনফার্ম
                                            করে দিবে।</p>

                                    </div>
                                </div>

                    `;

                        $("#hide-section").remove();
                        // $("#hide-section").append(html);

                    } else {
                        $('.customer_name-error').html(response.errors.customer_name);
                        $('.phone-error').html(response.errors.phone);
                        $('.customer_full_address-error').html(response.errors.customer_full_address);

                    }
                },
                statusCode: {
                    300: function(xhr, status, error) {

                        // alert("I am here in 300 Now");
                        // alert(response);
                        console.log(xhr.responseJSON);
                        console.log(status);
                        console.log(error);

                        var html = `

                        <div class="form-popup-bg is-visible">
                                    <div class="form-container">
                                        <button id="btnCloseForm" class="close-button">X</button>
                                        <div style="text-align: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sucess w-5 h-5">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                            <img style="width: 30%;" src="images/Prize cup.png" alt="">

                                        </div>
                                        <p style="margin-top: 20px; color: white;">Your Order id : ${xhr.responseJSON.orders_id}</p>
                                        <h6 class="pop-up-h" style="margin-top: 20px;color: white">Your Order Placed
                                            Successfully!</h6>

                                        <p class="pop-up-p" style="margin-top: 20px;color: white">আপনার অরডারটি সফল ভাবে
                                            সম্পন্ন হয়েছে। আমাদের কাস্টমার কেয়ার প্রতিনিধি শীঘ্রই আপনাকে ফোন করে অর্ডার কনফার্ম
                                            করে দিবে।</p>

                                    </div>
                                </div>

                    `;

                        $("#hide-section").append(html);
                    }
                },
                error: function(e) {}
                // complete: function(jqXHR) {
                //     alert(jqXHR);
                // }
            });
        });

        $(document).ready(function() {
            // $("#customer_area").change(function(){
            $(document).on('change', '#customer_area', function() {

                var city = $(this).val();
                // alert("I am here.");
                console.log(city);

                var $data = {
                    city: city
                }
                $.ajax({
                    type: "GET",
                    url: "{{ route('fontend.zone') }}",
                    data: $data,
                    success: function(response) {
                        console.log(response);
                        var zones = response;
                        // console.log(zones);


                        // console.log(id);

                        var html0 = '<option value="">Select Option</option>';
                        // if(zones.length > 0){
                        //     for(let i =0; i<zones.length; i++){
                        //         html += '<option value="' +  '">\
                        //                 '+'\
                        //                 ';
                        //     }
                        // }

                        for (i = 0; i < zones.length; i++) {
                            var id = zones[i]['zone_id'];
                            var val = zones[i]['zone_name'];
                            html0 += "<option value='" + id + "'>" + val + "</option>";
                        }
                        $("#customer_zone").append(html0);
                        $("#customer_zone").removeAttr("disabled");

                    }
                });



            });


        });





        $(document).ready(function() {
            // $("#customer_area").change(function(){
            $(document).on('change', '#customer_zone', function() {

                var zone = $(this).val();
                // alert(zone);
                console.log(zone);

                var $data = {
                    zone: zone
                }
                $.ajax({
                    type: "GET",
                    url: "{{ route('fontend.particularzone') }}",
                    data: $data,
                    success: function(response) {
                        console.log(response);
                        var pzones = response;
                        // console.log(zones);
                        // alert(pzones);


                        // console.log(id);

                        var html1 = '<option value="">Select Option</option>';

                        // var id = pzones['area_id'];
                        // console.log(id);

                        for (i = 0; i < pzones.length; i++) {
                            var id = pzones[i]['area_id'];
                            var val = pzones[i]['area_name'];
                            html1 += "<option value='" + id + "'>" + val + "</option>";
                        }
                        $("#customer_particular_zone").append(html1);
                        $("#customer_particular_zone").removeAttr("disabled");


                    }
                });



            });
        });









        $(document).ready(function() {
            $(document).on('click', '#getcity', function() {
                // var getproductid = $(this).val();

                // alert(getproductid);

                $.ajax({
                    type: "GET",
                    url: "/admin/shipping",
                    success: function(response) {
                        console.log(response);
                        // $('#stocks').val(response.singelproduct.stocks);

                    }
                });



            });
        });












        // $("#oderfromid").submit(function(event) {
        //     event.preventDefault();

        //     $.ajax({
        //         url: '{{ route('customer.product.save') }}',
        //         type: 'POST',
        //         dataType: 'json',
        //         data: $("#oderfromid").serializeArray(),
        //         success: function(response) {


        //             if (response.status == 200) {




        //             } else {
        //                 $('.customer_name-error').html(response.errors.customer_name);
        //                 $('.phone-error').html(response.errors.phone);
        //                 $('.customer_full_address-error').html(response.errors.customer_full_address);

        //             }
        //         },
        //         statusCode: {
        //             200: function() {
        //             }
        //         },
        //         error: function(e) {
        //             // window.location.href = '{{ route('admin.product.index') }}';
        //         }
        //     });

        // });
    </script>
@endsection
