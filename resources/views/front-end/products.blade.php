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
        
    <section class="blog-section mt-4">
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
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    @endsection

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