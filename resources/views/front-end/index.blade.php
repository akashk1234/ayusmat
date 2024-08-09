<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayusmat</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    <!-- font awsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .hero-slider .hs-item {
    position: relative;
    overflow: hidden;
    background-size: cover;
    background-position: center;
}

.hero-slider .hs-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
    z-index: 2; /* Ensure it's above other content but not above the image */
}

.hero-slider .hs-item > * {
    position: relative;
    z-index: 3; /* Ensure content is above the overlay */
}

    @media(max-width:768px){
        .hero-text-main{
            font-size: 60px !important;
        }
    }
    
    </style>

</head>

<body>
    @extends('layout.app')
    <!-- Header End -->

    @section('content')
    
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1 class="hero-text-main">Ayusmat Naturopathy</h1>
                        <p>True health is not just the absence of disease, but a state of complete physical, mental, and emotional well-being.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3 class="text-center" style="font-size: 25px;">Book an Appointment</h3>
                        <form action="{{route('bookings.store')}}" method="post">
                            @csrf
                            <div class="check-date">
                                <label for="date-in">Choose a date:</label>
                                <input type="date" name="date">
                            </div>
                            <div class="check-date">
                                <label >Time :</label>
                                <input type="time" name="time">
                            </div>
                            <div class="check-date">
                                <label >Name :</label>
                                <input type="text" name="name">
                                <i class="icon_profile" style="color: rgb(87, 87, 87);"></i>
                            </div>
                            <div class="check-date">
                                <label >Mobile :</label>
                                <input type="text" name="mobile">
                                <i class="icon_phone" style="color: rgb(87, 87, 87);"></i>
                            </div>
                            
                            <input type="hidden" name="package" value="General">
                            
                            <button class="booking-btn" type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/banner1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/banner2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/banner3.jpg"></div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
    $('.hero-slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        dots: true,
        navText: ['<', '>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        },
        onInitialized: function() {
            $('.hero-slider .hs-item').each(function() {
                var bg = $(this).data('setbg');
                $(this).css('background-image', 'url(' + bg + ')');
            });
        }
    });
});


    </script>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
     <style>
        @media(min-width:800px){
            .about-p{
                font-size: 20px;
                line-height: 1.7;
                color: rgb(174, 174, 174) !important;
            }
        }
     </style>
    <section class="aboutus-section spad" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Holistic Healing for Complete Well-being</h2>
                        </div>
                        <p class="f-para about-p text-left">True health is not just the absence of disease, but a state of complete physical, mental, and emotional well-being. That’s why we promise to provide you with an immersive healing experience that touches every aspect of your being. We believe in a holistic approach where the whole person is important, and we consider therapies as a way of life, not just a quick fix.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-6">
                                <img src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What Choose Us</span>
                        <h2>Our Specialities</h2>
                    </div>
                </div>
            </div>
            <style>
                .service-item{
                    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                }
            </style>
            <div class="row">
                <div class="col-lg-4 col-sm-6 my-3 d-flex">
                    <div class="service-item">
                        <i class="fa-solid fa-spa fa-3x"></i>
                        <h4>Holistic Approach</h4>
                        <p>Naturopathy treats the whole person, not just the symptoms. It aims to address the root cause 
                            of an illness rather than just alleviating the symptoms, focusing on physical, mental, emotional, 
                            and spiritual aspects of health.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3 d-flex">
                    <div class="service-item">
                        <i class="fa-solid fa-leaf fa-3x"></i>
                        <h4>Natural Therapies</h4>
                        <p>Naturopathy utilizes natural therapies such as herbal medicine, nutrition, acupuncture, hydrotherapy, 
                            and lifestyle counseling. Many people prefer these methods as they often have fewer side effects compared 
                            to conventional medicine.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3 d-flex">
                    <div class="service-item">
                        <i class="fa-solid fa-brain fa-3x"></i>
                        <h4>Preventive Medicine</h4>
                        <p>Naturopathic doctors emphasize prevention and education. They work with patients to identify and address 
                            risk factors for illness, promoting overall wellness and reducing the likelihood of future health problems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3 d-flex">
                    <div class="service-item">
                        <i class="fa-solid fa-hand-holding-hand fa-3x"></i>
                        <h4>Personalized Care</h4>
                        <p>Naturopathic treatment plans are tailored to each individual's unique needs, taking into account factors like
                             genetics, lifestyle, and environmental influences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3 d-flex">
                    <div class="service-item">
                        <i class="fa-solid fa-hands-holding-child fa-3x"></i>
                        <h4>Empowerment</h4>
                        <p>Naturopathy empowers individuals to take an active role in their health and well-being. Patients are encouraged
                             to make lifestyle changes and adopt healthy habits that support their body's natural healing abilities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3 d-flex">
                    <div class="service-item">
                        <i class="fa-brands fa-pagelines fa-3x"></i>
                        <h4>Complementary to Conventional Medicine</h4>
                        <p>Naturopathic medicine can complement conventional medical treatments. Many people choose to integrate naturopathic
                             therapies alongside traditional medical care to enhance their overall health outcomes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <style>
        .hr-text{
            background: rgb(0,0,0);
            background: linear-gradient(0deg, rgba(0,0,0,1) 4%, rgba(0,0,0,0.4515056022408963) 100%);
            width: 100%;
        }
    </style>
    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items ">
                <div class="row p-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/packages/1.jpg" >
                            <div class="hr-text p-3" >
                                <h5 class="text-white my-2">Package Details</h5>
                                <h2>Package name</h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="package-details.html" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/packages/2.jpg">
                            <div class="hr-text p-3">
                                <h5 class="text-white my-2">Package Details</h5>
                                <h2>Package name</h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="package-details.html" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/packages/3.jpg">
                            <div class="hr-text p-3">
                                <h5 class="text-white my-2">Package Details</h5>
                                <h2>Package name</h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="package-details.html" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/packages/4.jpg">
                            <div class="hr-text p-3">
                                <h5 class="text-white my-2">Package Details</h5>
                                <h2>Package name</h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">content:</td>
                                            <td>content</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="package-details.html" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 py-5 text-center">
                        <a href="packages.html" class="view-more">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('.hp-room-item').each(function() {
                var bg = $(this).data('setbg');
                $(this).css('background-image', 'url(' + bg + ')');
            });
        });
    </script>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section pt-5 mt-5" style="background: #ffe5cc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Our Clients Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item" >
                            <p><i class="fa-solid fa-quote-left"></i>&nbsp; I've never experienced such a thorough and holistic approach to health before. The team truly 
                                cares about every aspect of your well-being. I feel rejuvenated and more balanced than ever! &nbsp;<i class="fa-solid fa-quote-right"></i></p>
                            <div class="ti-author">
                                <h5> - Name</h5><br>
                                <small>Location</small>
                            </div>
                        </div>
                        <div class="ts-item">
                            <p><i class="fa-solid fa-quote-left"></i>&nbsp; The immersive healing experience transformed my life. It's not just about treating symptoms 
                                but fostering complete wellness. I now have a deeper understanding of my body and mind. &nbsp;<i class="fa-solid fa-quote-right"></i></p>
                            <div class="ti-author">
                                <h5> - Name</h5><br>
                                <small>Location</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            $('.testimonial-slider').owlCarousel({
                items: 1, // Number of items to display
                loop: true, // Infinite loop
                margin: 10, // Space between items
                autoplay: true, // Enable auto play
                autoplayTimeout: 3000, // Delay between transitions (in milliseconds)
                autoplayHoverPause: true, // Pause on hover
                dots: true, // Show pagination dots
                nav: true, // Show navigation arrows
                navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'], // Custom text for navigation arrows
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>

    <!-- Testimonial Section End -->

    <!-- product Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Products</span>
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
            <style>
                .product-card {
                    position: relative;
                    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
                    background-image: linear-gradient(rgba(255, 255, 255, 0.646), rgba(255, 255, 255, 0.603)), url('img/product-bg.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    border: 5px solid #fff;
                    border-radius: 20px;
                    color: #fff; 
                    padding: 20px; 
                }
                .product-card:hover{
                    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                    transform: scale(1.02);
                    transition: .3s;
                }

                .product-card img{
                    border-radius: 10px;
                }
                .product-name{
                    color: #005e0b;
                    text-align: center;
                    font-weight: 600;
                }
                .price-btn{
                    background: #dfa974;
                    text-align: center;
                    color: #fff;
                    font-weight: 600;
                    font-size: 20px;
                    border: none;
                    border-radius: 30px;
                }
                .view-more{
                    background: #fff;
                    border: 2px solid #dfa974;
                    padding: 10px 40px;
                    border-radius: 30px;
                    color: #dfa974;
                    font-weight: 800;
                }
                .view-more:hover{
                    background: #dfa974;
                }
                
            </style>
            <div class="row">
                <div class="col-md-4 col-lg-4 d-flex my-3">
                    <a href="product-details.html">
                        <div class="product-card p-2 p-md-3">
                            <img src="img/p1.jpg" alt="" style="width: 100%;">
                            <div class="my-3">
                                <h4 class="product-name">Product name</h4>
                                <div class="text-center">
                                    <button class="price-btn p-1 px-5 mt-3 w-100">₹ 499</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 d-flex my-3">
                    <a href="product-details.html">
                        <div class="product-card p-2 p-md-3">
                            <img src="img/p2.jpg" alt="" style="width: 100%;">
                            <div class="my-3">
                                <h4 class="product-name">Product name</h4>
                                <div class="text-center">
                                    <button class="price-btn p-1 px-5 mt-3 w-100">₹ 499</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 d-flex my-3">
                    <a href="product-details.html">
                        <div class="product-card p-2 p-md-3">
                            <img src="img/p3.jpg" alt="" style="width: 100%;">
                            <div class="my-3">
                                <h4 class="product-name">Product name</h4>
                                <div class="text-center">
                                    <button class="price-btn p-1 px-5 mt-3 w-100">₹ 499</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 d-flex my-3">
                    <a href="product-details.html">
                        <div class="product-card p-2 p-md-3">
                            <img src="img/p4.jpg" alt="" style="width: 100%;">
                            <div class="my-3">
                                <h4 class="product-name">Product name</h4>
                                <div class="text-center">
                                    <button class="price-btn p-1 px-5 mt-3 w-100">₹ 499</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 d-flex my-3">
                    <a href="product-details.html">
                        <div class="product-card p-2 p-md-3">
                            <img src="img/p7.jpg" alt="" style="width: 100%;">
                            <div class="my-3">
                                <h4 class="product-name">Product name</h4>
                                <div class="text-center">
                                    <button class="price-btn p-1 px-5 mt-3 w-100">₹ 499</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 d-flex my-3">
                    <a href="product-details.html">
                        <div class="product-card p-2 p-md-3">
                            <img src="img/p6.jpg" alt="" style="width: 100%;">
                            <div class="my-3">
                                <h4 class="product-name">Product name</h4>
                                <div class="text-center">
                                    <button class="price-btn p-1 px-5 mt-3 w-100">₹ 499</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 py-5 text-center">
                    <a href="products.html" class="view-more">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    
    @endsection

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>