<!-- Page Preloder -->
<div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="https://static.vecteezy.com/system/resources/previews/018/765/757/original/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-sign-business-concept-vector.jpg" alt="">
                <span>Profile <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="profile.html">(Profile)</a></li><hr>
                        <li><a href="login.html">Login</a></li><hr>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn" data-toggle="modal" data-target="#exampleModalCenter">Book Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="index.html#about">About Us</a></li>
                <li><a href="packages.html">Packages</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> +91 94873 88318</li>
            <li><i class="fa fa-envelope"></i> info@ayusmatnaturopathy.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section" >
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> +91 94873 88318</li>
            <li><i class="fa fa-envelope"></i> info@ayusmatnaturopathy.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <a href="#" class="bk-btn" data-toggle="modal" data-target="#exampleModalCenter">Book Now</a>
                            <div class="language-option">
                                <span>Profile <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul><li><a href="profile.html">(Profile)</a></li><hr>
                                        <li><a href="login.html">Login</a></li><hr>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html" class="py-3">
                                <img src="img/logo.png" alt="" width="50">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="index.html#about">About Us</a></li>
                                    <li><a href="packages.html">Packages</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    @include('sweetalert::alert')

    <!-- Modal -->
    <style>
        .booking-btn:hover{
            background: #dfa974;
            color: #fff;
        }
     </style>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 30px; background: #ffead6;">
            <div class="modal-header p-4 d-flex justify-content-between align-items-center">
                <div class="flex-grow-1 text-center">
                    <h3 class="m-0" style="font-size: 25px;">Book an Appointment</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
            <div class="modal-body" >
                <div class="booking-form" style="border-radius: 20px;">
                    
                    <form action="{{route('bookings.store')}}" method="post">
                        @csrf
                        <div class="check-date">
                            <label for="date-in">Choose a date :</label>
                            <input type="date" name="date" required>
                        </div>
                        <div class="check-date">
                            <label >Time :</label>
                            <input type="time" name="time" required>
                        </div>
                        <div class="check-date">
                            <label >Name :</label>
                            <input type="text" name="name" style="text-transform:none;" required>
                            <i class="icon_profile" style="color: rgb(87, 87, 87);"></i>
                        </div>
                        <div class="check-date">
                            <label >Mobile :</label>
                            <input type="text" name="mobile" required>
                            <i class="icon_phone" style="color: rgb(87, 87, 87);"></i>
                        </div>

                        <input type="hidden" name="package" value="General">

                        <button class="booking-btn" type="submit">Check Availability</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>