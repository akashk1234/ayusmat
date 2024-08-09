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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- font awsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


</head>

<body>
    @extends('layout.app')
    <!-- Header End -->

    @section('content')
    
    <!-- Hero Section Begin -->
    
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section" style="padding: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h3>Package Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>
    <!-- Breadcrumb Section End -->
    <style>
        
    </style>
    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-details-item">
                        <img src="img/packages/6.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="room-details-item">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3 style="color: #dfa974;">Package Name</h3>
                                <div class="rdt-right">
                                    <a href="#" data-toggle="modal" data-target="#bookPackage">Book Now</a>
                                </div>
                            </div>
                            <hr>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Content:</td>
                                        <td>Content...</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Content:</td>
                                        <td>Content...</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Content:</td>
                                        <td>Content...</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Content:</td>
                                        <td>Content...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit accusamus voluptatibus nihil qui ipsa velit id debitis similique est suscipit eum incidunt consectetur quae facilis reprehenderit nesciunt, minima quibusdam illo.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium aspernatur esse quaerat culpa vitae maiores expedita soluta porro labore. Placeat earum rem veritatis exercitationem quis harum dolorem assumenda corporis delectus!
                            </p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, saepe eum quisquam dolores maiores impedit possimus voluptas! Rerum numquam, quas laborum, sapiente voluptatem illum deleniti incidunt, quis laboriosam veniam excepturi.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 text-center py-3">
                    <h4>Reviews</h4>
                </div>
                <div class="col-lg-6">
                    <div class="rd-reviews">
                        
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <h5>Name</h5>
                                <p>" Amazing experience! The holistic approach truly transformed my well-being. The staff is caring and professional. Highly recommend! "</p>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-2.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <h5>Name</h5>
                                <p>" Wonderful experience! The holistic treatments made a significant difference in my physical and mental health. Great staff and atmosphere. "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="review-add p-4" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        <h5 class="text-center my-3">Add Review</h5><hr>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your Review"></textarea>
                                    <div class="text-center">
                                        <button type="submit">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Footer Section Begin -->
    @endsection

    <style>
        .btn-hov:hover{
            background: #dfa974;
            color: #fff;
        }
    </style>
    <!-- Modal -->
    <div class="modal fade" id="bookPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content p-3" style="border-radius: 30px; background: #fff8f1;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Package Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="room-booking mb-4">
                        <h3 class="text-center">Your Reservation</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Date:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="name">Name:</label>
                                <input type="text"  id="name">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="check-date">
                                <label for="mobile">Mobile:</label>
                                <input type="text"  id="mobile">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <div class="check-date">
                                <label for="package">Package:</label>
                                <input type="text"  id="package" value="Package name">
                                <i class="fa-solid fa-ticket"></i>
                            </div>
                            
                            <button type="submit" class="btn-hov">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- book package modal end -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>