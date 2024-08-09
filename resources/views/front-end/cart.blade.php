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
     <style>
       .custom-table{
            padding: 20px;
            border-collapse: separate;
            background: #fff;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
            border-radius: 20px;
            
       }
       .custom-table thead th {
            border: none;
            padding: 15px; /* Add padding to the table headers */
            vertical-align: middle; /* Center vertically */
        }

        .custom-table tbody td,
        .custom-table tbody th {
            padding: 15px; /* Add padding to the table cells */
            vertical-align: middle; /* Center vertically */
        }

       
        .product-cell{
            text-align: center !important;
            display: flex !important;
            align-items: center !important;
        }
        .product-cell img{
            width: 100px;
            border-radius: 10px;
        }
        
        @media(max-width:992px){
            .custom-table{
                padding: 0px;
                border-collapse: separate;
            }
            .product-cell img{
                width: 50px;
                border-radius: 10px;
            }
            .product-cell h6{
                font-size: 10px;
            }

            tr{
                font-size: 10px;
            }
            .product-cell{
                text-align: center !important;
                display: block !important;
                align-items: center !important;
            }
            .price-column{
                width: 60px;
            }
        }
     </style>
    <section class="blog-section pt-5" style="background: #fff5ec;">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h3>Your Cart</h3>
                    <p><b>2 Items</b> in your cart</p>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="p-1">
                        <table class="table custom-table">
                            <thead >
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col" class="price-column">Price</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col">Total Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td class="product-cell">
                                    <img src="img/p1.jpg" alt="" class="mr-2">
                                    <h6 class="my-1">Product Name</h6>
                                </td>
                                <td>₹ 499</td>
                                <td>
                                    <div class="quantity">
                                        <button class="minus" aria-label="Decrease">&minus;</button>
                                        <input type="number" class="input-box" value="1" min="1" max="10">
                                        <button class="plus" aria-label="Increase">&plus;</button>
                                    </div>
                                </td>
                                <td>₹ 499</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td class="product-cell">
                                    <img src="img/p4.jpg" alt=""class="mr-2">
                                    <h6 class="my-1">Product Name</h6>
                                </td>
                                <td>₹ 599</td>
                                <td>
                                    <div class="quantity">
                                        <button class="minus" aria-label="Decrease">&minus;</button>
                                        <input type="number" class="input-box" value="1" min="1" max="10">
                                        <button class="plus" aria-label="Increase">&plus;</button>
                                    </div>
                                </td>
                                <td>₹ 499</td>
                              </tr>
                            </tbody>
                        </table>
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
                        color: #fff !important;
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
                            <a href="checkout.html" class="payment-button">Proceed to Checkout</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    @endsection

    <script>
        (function () {
  const quantityContainer = document.querySelector(".quantity");
  const minusBtn = quantityContainer.querySelector(".minus");
  const plusBtn = quantityContainer.querySelector(".plus");
  const inputBox = quantityContainer.querySelector(".input-box");

  updateButtonStates();

  quantityContainer.addEventListener("click", handleButtonClick);
  inputBox.addEventListener("input", handleQuantityChange);

  function updateButtonStates() {
    const value = parseInt(inputBox.value);
    minusBtn.disabled = value <= 1;
    plusBtn.disabled = value >= parseInt(inputBox.max);
  }

  function handleButtonClick(event) {
    if (event.target.classList.contains("minus")) {
      decreaseValue();
    } else if (event.target.classList.contains("plus")) {
      increaseValue();
    }
  }

  function decreaseValue() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : Math.max(value - 1, 1);
    inputBox.value = value;
    updateButtonStates();
    handleQuantityChange();
  }

  function increaseValue() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
    inputBox.value = value;
    updateButtonStates();
    handleQuantityChange();
  }

  function handleQuantityChange() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : value;

    // Execute your code here based on the updated quantity value
    console.log("Quantity changed:", value);
  }
})();

    </script>

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