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
                        <h3>Product Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>
    <!-- Breadcrumb Section End -->
    <style>
        .actual-price{
            font-size: 16px;
            color: rgb(146, 146, 146);
        }
        .off{
            font-size: 20px;
            color: #dfa974;
        }

        .buy-button{
            background: #dfa974;
            color: #fff;
            font-size: 25px;
            font-weight: 500;
            width: 100%;
            border: none;
            border-radius: 10px;
        }
        .buy-button:hover{
            background: #d49d65;
        }
        .product-name-main{
                margin-bottom: 0px !important;
                color: #dfa974 !important;
                font-weight: 500;
            }
        @media(max-width:768px){
            .product-name-main{
                margin-top: 30px;
            }
        }
    </style>
    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="card p-4" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-radius: 35px;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-details-item" style="margin-bottom: 0px;">
                            <img src="img/p1.jpg" alt="" style="border-radius: 20px; margin-bottom: 0px;"> 
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="room-details-item" style="margin-bottom: 0px;">
                            <div class="rd-text">
                                <div class="rd-title">
                                    <h3 class="product-name-main">Product Name</h3>
                                    
                                </div>
                                <hr>
                                <h4>Price: &nbsp;<span class="actual-price"><s>₹ 1299</s></span> ₹ 899 <span class="off">30% off</span></h4>
                                <hr>
                                <h5 class="text-secondary"><b>Content:</b>&nbsp; content...</h5><hr>
                                <h5 class="text-secondary"><b>Content:</b>&nbsp; content...</h5><hr>
                                <h5 class="text-secondary"><b>Content:</b>&nbsp; content...</h5><hr>
                                <h5 class="text-secondary"><b>Content:</b>&nbsp; content...</h5><hr>
                                <p class="f-para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit accusamus voluptatibus nihil qui ipsa velit id debitis similique est suscipit eum incidunt consectetur quae facilis reprehenderit nesciunt, minima quibusdam illo.</p>
                                </p>
                            </div>

                            <div class="buttons row">
                                <div class="col-md-6">
                                    <button class="buy-button p-2 my-2">Buy Now <i class="fa-solid fa-cube"></i></button>
                                </div>
                                <div class="col-md-6">
                                    <button class="buy-button p-2 my-2">Add to Cart <i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section> 


    <!-- related product start -->
    <section class="blog-section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Related Products</h3>
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
            </div>
        </div>
    </section>
    <!-- related product end -->

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