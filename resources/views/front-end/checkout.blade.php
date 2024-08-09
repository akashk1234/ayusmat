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
    @extends('layout.app');
    <!-- Header End -->

    @section('content')
    
    <!-- Hero Section Begin -->
    <style>
        .custom-card{
            background: #fff;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
            border-radius: 20px;
        }
    </style>
    <section class="blog-section pt-5" style="background: #fff5ec;">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h3>Checkout</h3>
                    <p><b>2 Items</b> in your cart</p>
                </div>
                <div class="col-md-8 mb-3">
                    <div class=".custom-card p-1">
                        <div class="booking-form p-4 p-md-5" style="border-radius: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;">
                    
                            <form action="#">
                                <div class="check-date">
                                    <label for="date-in">Name : </label>
                                    <input type="text">
                                </div>
                                <div class="check-date">
                                    <label for="date-in">Mobile : </label>
                                    <input type="text">
                                </div>
                                <div class="check-date">
                                    <label >Address :</label>
                                    <input type="text" >
                                </div>
                                <div class="check-date">
                                    <label >City :</label>
                                    <input type="text" >
                                </div>
                                <div class="check-date">
                                    <label >Pincode :</label>
                                    <input type="number" >
                                </div>
                                  
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                <style>
                    .custom-card{
                        background: #fff;
                        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
                        border-radius: 20px;
                    }
                    .payment-button{
                        background: #dfa974;
                        border: none;
                        padding: 10px 30px;
                        color: #fff;
                        border-radius: 40px;
                        width: 100%;
                        font-size: 20px;
                        font-weight: 700;
                    }
                    .payment-button:hover{
                        background: #c09163;
                    }
                </style>
                <div class="col-md-4">
                    <div class="custom-card p-4">
                        <h4>Cart Total</h4>
                        <hr>

                        <div class="d-flex justify-content-between">
                            <p>Cart Subtotal : </p>
                            <p><b>₹ 998</b></p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p>Delivery Charge : </p>
                            <p><b>₹ 60</b></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Discount</p>
                            <p><b>₹ 100</b></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6><b>Cart Total</b></h6>
                            <h5><b>₹ 958</b></h5>
                        </div>

                        <div class="text-center w-100 mt-5">
                            <button class="payment-button">Proceed to Payment</button>
                        </div>
                       
                    </div>
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