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

     <!-- bootstrap js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>

<body>
    @extends('layout.app')
    <!-- Header End -->

    @section('content')

    <!-- Hero Section Begin -->
    <style>
        .base-card{
            /* box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; */
            border-radius: 30px;
            border: 2px solid #dfaa743c;
        }
        .card-name{
            font-size: 25px;
            font-weight: 600;
            color: rgb(88, 88, 88);
            margin-bottom: 5px;
        }
        .base-card small{
            color: #747474;
        }
        .p{
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 0px;
        }
        @media(max-width:768px){
            .p{
                font-size: 16px;
                
            }
        }
        .inner-card{
            box-shadow: rgba(255, 136, 0, 0.2) 0px 2px 8px 0px;
            border-radius: 20px;
        }
        .inner-cards{
            box-shadow: rgba(255, 136, 0, 0.2) 0px 2px 8px 0px;
            border-radius: 10px;
        }
        .video-btn{
            border-radius: 30px;
            font-size: 20px;
        }

    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <button class="btn btn-primary w-100 py-3 video-btn"><i class="fa-solid fa-video"></i>&nbsp; Join Video Consultation</button>
                </div>
                <div class="col-md-12">
                    <div class="base-card p-3">
                        <div class="row ">
                            <div class="col-md-6 col-lg-3 text-center my-1">
                                <div class="inner-card p-3 w-100">
                                    <img src="img/profile.jpg" alt="" width="150">
                                    <p class="card-name mt-4">Full Name</p>
                                    <p>Kochi, Kerala</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-9">
                                <div class="row">
                                    
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100 ">
                                            <small>Age</small>
                                            <p class="p">23 Years</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Gender</small>
                                            <p class="p">Male</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Mobile</small>
                                            <p class="p">+91 9087654321</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Reffering Doctor</small>
                                            <p class="p">Dr. Doctor name</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Patient Id:</small>
                                            <p class="p"># 97348</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Current Package:</small>
                                            <p class="p">Package Name</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Expiring on:</small>
                                            <p class="p">10-07-24</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Next Consultation:</small>
                                            <p class="p">28-06-24</p>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2 d-flex align-items-stretch">
                                        <div class="inner-cards p-2 w-100">
                                            <small>Note</small>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quos eveniet doloribus. Alias qui totam iste. Inventore, porro eligendi quasi minus ullam assumenda quisquam. Nulla iusto debitis voluptatibus totam mollitia!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        
                    </div>
                </div>
                <style>
                    .nav-item2{
                        width: 32.60%;
                        margin: 1px;
                    }
                    .nav-link{
                        background: #fff;
                        font-weight: 600;
                        border: 1px solid #dfa974 !important;
                        border-radius: 5px;
                    }
                    .nav-link.active {
                        background-color: #dfa974 !important; /* Change this to your desired color */
                        color: white !important;
                    }
                    @media(max-width:768px){
                        .nav-link{
                            font-size: 12px;
                            font-weight: 400;
                        }
                    }
                </style>
                <div class="col-md-12 my-4">
                    <ul class="nav nav-tabs justify-content-between" id="myTab" role="tablist">
                        <li class="nav-item2" role="presentation">
                          <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Chat" type="button" role="tab" aria-controls="Chat" aria-selected="true">Chat <i class="fa-regular fa-comment-dots"></i></button>
                        </li>
                        <li class="nav-item2" role="presentation">
                          <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Prescription" type="button" role="tab" aria-controls="Prescription" aria-selected="false">Prescription <i class="fa-solid fa-file-prescription"></i></button>
                        </li>
                        <li class="nav-item2" role="presentation">
                          <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Medicine" type="button" role="tab" aria-controls="Medicine" aria-selected="false">Medicine <i class="fa-solid fa-pills"></i></button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <style>
                            :root {
                            --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                            --msger-bg: #fff;
                            --border: 2px solid #ddd;
                            --left-msg-bg: #ececec;
                            --right-msg-bg: #dfa974;
                            }

                            .msger-chat {
                            flex: 1;
                            overflow-y: auto;
                            padding: 10px;
                            }
                            .msger-chat::-webkit-scrollbar {
                            width: 6px;
                            }
                            .msger-chat::-webkit-scrollbar-track {
                            background: #ddd;
                            }
                            .msger-chat::-webkit-scrollbar-thumb {
                            background: #bdbdbd;
                            }
                            .msg {
                            display: flex;
                            align-items: flex-end;
                            margin-bottom: 10px;
                            }
                            .msg:last-of-type {
                            margin: 0;
                            }

                            .msg-bubble {
                            /* max-width: 450px; */
                            padding: 15px;
                            border-radius: 15px;
                            background: var(--left-msg-bg);
                            }
                            .msg-info {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            margin-bottom: 10px;
                            }
                            .msg-info-name {
                            margin-right: 10px;
                            font-weight: bold;
                            }
                            .msg-info-time {
                            font-size: 0.85em;
                            }



                            .right-msg {
                            flex-direction: row-reverse;
                            }
                            .right-msg .msg-bubble {
                            background: var(--right-msg-bg);
                            color: #fff;
                            border-bottom-right-radius: 0;
                            }
                            .right-msg .msg-img {
                            margin: 0 0 0 10px;
                            }

                            .msger-inputarea {
                            display: flex;
                            margin-top: 20px;

                            }
                            .msger-inputarea * {
                            padding: 10px;
                            border: none;
                            border-radius: 50px;
                            font-size: 1em;

                            }
                            .msger-input {
                            flex: 1;
                            background: #efefef;
                            }
                            .msger-upload-btn{
                                background: #efefef;            
                            }
                            @media(max-width:768px){
                                .msger-input{
                                    width: 75%;
                                }
                                .msger-inputarea * {
                                padding: 8px;

                                }
                            }
                            .msger-send-btn {
                            margin-left: 10px;
                            background: rgb(0, 196, 65);
                            color: #fff;
                            font-weight: bold;
                            cursor: pointer;
                            transition: background 0.23s;
                            }
                            .msger-send-btn:hover {
                            background: rgb(0, 180, 50);
                            }

                            .msger-chat {
                            background-color: #fff6ee;
                            max-height: 500px;
                            overflow-y: scroll; /* Always show scrollbar */
                                    scrollbar-width: none; /* Firefox: Hide scrollbar */
                                    -ms-overflow-style: none; /* IE/Edge: Hide scrollbar */
                                    scroll-behavior: smooth
                            }
                            .msger-chat::-webkit-scrollbar {
                                    display: none; /* Chrome/Safari: Hide scrollbar */
                                }

                            .msger-container{
                                border: 2px solid rgb(243, 243, 243);
                                border-radius: 10px;
                            }

                        </style>
                        <!-- chat start -->
                        <div class="tab-pane fade show active" id="Chat" role="tabpanel" aria-labelledby="home-tab">
                            
                            <section class="msger-container p-2 mt-3 ">
                                <main class="msger-chat">

                                    <div class="msg left-msg">
                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-name align-items-center">
                                                    <img src="img/ayusmatlogo.jpg" alt="" width="20" style="border-radius: 50%;"> Dr. Doctor Name
                                                </div>
                                                <div class="msg-info-time">12:45</div>
                                            </div>

                                            <div class="msg-text">
                                                <p>Hi, welcome to Ayusmat! Go ahead and send me a message. 😄</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="msg right-msg">
                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-name align-items-center">
                                                    <img src="img/profile.jpg" width="20" alt="" style="border-radius: 50%;"> Name
                                                </div>
                                                <div class="msg-info-time">12:46</div>
                                            </div>

                                            <div class="msg-text">
                                                <p class="text-white">Hello! This is a test message</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="msg left-msg">
                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-name align-items-center">
                                                    <img src="img/ayusmatlogo.jpg" alt="" width="20" style="border-radius: 50%;"> Dr. Doctor Name
                                                </div>
                                                <div class="msg-info-time">12:45</div>
                                            </div>

                                            <div class="msg-text">
                                                <p>Hi, welcome to Ayusmat! Go ahead and send me a message. 😄</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="msg right-msg">
                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-name align-items-center">
                                                    <img src="img/profile.jpg" width="20" alt="" style="border-radius: 50%;"> Name
                                                </div>
                                                <div class="msg-info-time">12:46</div>
                                            </div>

                                            <div class="msg-text">
                                                <p class="text-white">Hello! This is a test message</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="msg left-msg">
                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-name align-items-center">
                                                    <img src="img/ayusmatlogo.jpg" alt="" width="20" style="border-radius: 50%;"> Dr. Doctor Name
                                                </div>
                                                <div class="msg-info-time">12:45</div>
                                            </div>

                                            <div class="msg-text">
                                                <p>Hi, welcome to Ayusmat! Go ahead and send me a message. 😄</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="msg right-msg">
                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-name align-items-center">
                                                    <img src="img/profile.jpg" width="20" alt="" style="border-radius: 50%;"> Name
                                                </div>
                                                <div class="msg-info-time">12:46</div>
                                            </div>

                                            <div class="msg-text">
                                                <p class="text-white">Hello! This is a test message</p>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </main>

                                <div class="msger-inputarea">
                                    <input type="text" class="msger-input" placeholder="Enter your message..." id="messageInput" style="border-radius: 50px 0px 0px 50px; ">
                                    <input type="file" class="msger-upload" id="fileInput" style="display: none;">
                                    <button class="msger-upload-btn" onclick="document.getElementById('fileInput').click()" style="border-radius: 0px 50px 50px 0px;"><i class="fa-solid fa-file " style="font-size: 20px; color: gray;"></i></button>
                                    <button class="msger-send-btn" onclick="sendMessage()"><i class="fa-regular fa-paper-plane"></i></button>
                                </div>
                                <script>
                                    const messageInput = document.getElementById('messageInput');
                                    const fileInput = document.getElementById('fileInput');
                                
                                    fileInput.addEventListener('change', function() {
                                        const file = fileInput.files[0];
                                        if (file) {
                                            messageInput.placeholder = `File uploaded: ${file.name}`;
                                        }
                                    });
                                
                                    function sendMessage() {
                                        const message = messageInput.value;
                                        if (message.trim() !== '') {
                                            const textMessage = document.createElement('div');
                                            textMessage.textContent = message;
                                            document.getElementById('messageContainer').appendChild(textMessage);
                                            messageInput.value = '';
                                        }
                                        // Reset the placeholder after sending the message
                                        messageInput.placeholder = 'Enter your message...';
                                    }
                                </script>

                                <!-- <form class="msger-inputarea">
                                    <input type="text" class="msger-input" placeholder="Enter your message...">
                                    <button type="submit" class="msger-send-btn"><i class="fa-regular fa-paper-plane"></i></button>
                                </form> -->
                            </section>

                        </div>
                        <!-- chat end -->


                        <style>
                            .prescription-container{
                                background: #fff6ee !important;
                            }
                            .prescription-card{
                                background: #fff;
                                border-radius: 10px;
                            }
                            .prescription-content{
                                margin-bottom: 0;
                                font-size: 20px;
                                margin-top: 10px;
                            }
                            .prescription-head{
                                font-size: 15px;
                                text-align: end;
                            }
                            @media(max-width:768px){
                                .prescription-content{
                                font-size: 15px;
                                margin-top: 10px;
                                }
                                .prescription-head{
                                    font-size: 12px;
                                    color:#777777 ;
                                    text-align: end;
                                }
                            }
                        </style>
                        <!-- Prescription start -->
                        <div class="tab-pane fade" id="Prescription" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="msger-container p-2 mt-3">
                                <div class="prescription-container p-2" >
                                    <div class="prescription-card p-2 p-md-3 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <small class="prescription-head">Dr. Doctor Name</small>
                                            <small class="prescription-head">10-10-2024</small>
                                        </div>
                                        <hr style="margin: 0;">
                                        <p class="prescription-content">Prescription content Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, perspiciatis dicta facilis nobis nulla aut eius libero nostrum quo veniam architecto facere et cupiditate provident fuga sapiente minima deleniti accusantium.</p>
                                    </div>
                                    <div class="prescription-card p-2 p-md-3 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <small class="prescription-head">Dr. Doctor Name</small>
                                            <small class="prescription-head">10-10-2024</small>
                                        </div>
                                        <hr style="margin: 0;">
                                        <p class="prescription-content">Prescription content Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ex quod nostrum non magni rem quasi minus dolor natus! Facere delectus quae voluptatum veritatis, repudiandae excepturi eos libero nobis sunt.</p>
                                    </div>
                                    <div class="prescription-card p-2 p-md-3 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <small class="prescription-head">Dr. Doctor Name</small>
                                            <small class="prescription-head">10-10-2024</small>
                                        </div>
                                        <hr style="margin: 0;">
                                        <p class="prescription-content">Prescription content Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae cupiditate eaque fugit voluptatum laboriosam explicabo possimus tempore corrupti iusto, magnam harum, nesciunt labore itaque beatae dolore nihil blanditiis modi?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- prescription end -->

                        <style>
                            .medicine-container{
                                background: #fff6ee ;
                            }
                            .medicine-card{
                                background: #fff;
                                border-radius: 10px;
                                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
                            }
                            .medicine-card img{
                                border-radius: 10px;
                            }
                            .buy-button{
                                background: #dfa974;
                                color: #fff;
                                font-size: 15px;
                                font-weight: 500;
                                width: 100%;
                                border: none;
                                border-radius: 10px;
                            }
                            .buy-button:hover{
                                background: #d49d65;
                            }

                            .medicine-card hr{
                                margin-top: 10px;
                                margin-bottom: 10px;
                            }
                            .medicine-name{
                                font-size: 30px;
                            }
                            .medicine-price{
                                font-size: 20px;
                                color: #717171;
                            }
                            .med-actual{
                                font-size: 16px;
                                text-decoration: line-through;
                            }
                            .med-price{
                                font-size: 25px;
                                color: rgb(42, 42, 42);
                            }
                            .med-offer{
                                color: rgb(0, 165, 0);
                            }
                            .medicine-duration{
                                font-size: 20px;
                                color: #717171;
                            }
                            .med-dur{
                                font-size: 22px;
                                color: rgb(97, 97, 97);
                            }
                            .med-pres{
                                border: 2px dashed #dfa974;
                                border-radius: 10px;
                            }
                            @media(max-width:768px){
                                .medicine-card hr{
                                    margin-top: 4px;
                                    margin-bottom: 4px;
                                }
                                .medicine-name{
                                    font-size: 20px;
                                }
                                .medicine-price{
                                    font-size: 14px;
                                }
                                .med-actual{
                                    font-size: 12px;
                                    text-decoration: line-through;
                                }
                                .med-price{
                                    font-size: 18px;
                                    color: rgb(42, 42, 42);
                                }
                                .med-offer{
                                    color: rgb(0, 165, 0);
                                    font-size: 14px;
                                }
                                .medicine-duration{
                                    font-size: 14px;
                                }
                                .med-dur{
                                    font-size: 18px;
                                }
                                .med-pres{
                                    border: 2px dashed #dfa974;
                                    border-radius: 5px;
                                }
                                .med-pres p{
                                    font-size: 14px;
                                    line-height: 1.5;
                                }
                                .med-pres small{
                                    font-size: 10px;
                                    color: #717171;
                                    font-weight: 600;
                                }
                            }
                        </style>
                        <!-- Medicine start -->
                        <div class="tab-pane fade" id="Medicine" role="tabpanel" aria-labelledby="contact-tab">
                            <section class="msger-container p-2 mt-3">
                                <div class="medicine-container p-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-3">
                                            <div class="medicine-card p-3">
                                                <div class="row">
                                                    <div class="col-4 m-0">
                                                        <img src="img/p2.jpg" alt="" style="width: 100%;">
                                                    </div>
                                                    <div class="col-8">
                                                        <h4 class="medicine-name">Medicine Name</h4>
                                                        <hr>
                                                        <h5 class="medicine-price">Price: <span class="med-actual">₹ 1199</span> <span class="med-price">899</span> <span class="med-offer">20% Off</span><h5>
                                                        <hr>
                                                        <h5 class="medicine-duration">Duration: <span class="med-dur">14 Days</span></h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="med-pres mt-3 p-2">
                                                            <small>Note</small>
                                                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, sunt! Veritatis totam incidunt harum placeat nulla ullam, aspernatur debitis fugiat illo odit recusandae laborum doloribus fugit quaerat officiis amet dolores!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <div class="buttons row">
                                                            <div class="col-6">
                                                                <button class="buy-button p-2 my-2">Buy Now <i class="fa-solid fa-cube"></i></button>
                                                            </div>
                                                            <div class="col-6">
                                                                <button class="buy-button p-2 my-2">Add to Cart <i class="fa-solid fa-cart-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 mb-3">
                                            <div class="medicine-card p-3">
                                                <div class="row">
                                                    <div class="col-4 m-0">
                                                        <img src="img/p7.jpg" alt="" style="width: 100%;">
                                                    </div>
                                                    <div class="col-8">
                                                        <h4 class="medicine-name">Medicine Name</h4>
                                                        <hr>
                                                        <h5 class="medicine-price">Price: <span class="med-actual">₹ 1199</span> <span class="med-price">899</span> <span class="med-offer">20% Off</span><h5>
                                                        <hr>
                                                        <h5 class="medicine-duration">Duration: <span class="med-dur">14 Days</span></h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="med-pres mt-3 p-2">
                                                            <small>Note</small>
                                                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, sunt! Veritatis totam incidunt harum placeat nulla ullam, aspernatur debitis fugiat illo odit recusandae laborum doloribus fugit quaerat officiis amet dolores!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <div class="buttons row">
                                                            <div class="col-6">
                                                                <button class="buy-button p-2 my-2">Buy Now <i class="fa-solid fa-cube"></i></button>
                                                            </div>
                                                            <div class="col-6">
                                                                <button class="buy-button p-2 my-2">Add to Cart <i class="fa-solid fa-cart-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Medicine end -->
                    </div>
                </div>
            </div>
        </div>
    </section>


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