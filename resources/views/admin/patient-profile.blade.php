<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ayusmat Admin</title>
    <meta name="description" content="Ayusmat Online Consultation Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo-2.png">
    <link rel="shortcut icon" href="images/logo-2.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   
</head>

<body>
    @extends('admin-layout.app')
        <!-- /#header -->

        @section('content')
        
        <style>
            .fs-b{
                font-size: 20px !important;
                color: #888888 !important;
            }
            @media(max-width:768px){
                .fs-b{
                    font-size: 10px !important; 
                }
            }
            @media(min-width:800px){
                .fs-b{
                    width: 20% !important;
                    text-align: center;
                }
            }

            .card{
                margin-bottom: 1.2rem !important;
                border-radius: 15px !important;
            }

        </style>
        <section  class="py-3">
            <div class="container" style="max-width: 20000px;">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background: #f2f5ff;">
                            <div class="card-body">
                                <div class="custom-tab " >
                                    <style>
                                        .sticky-navbar {
                                            position: -webkit-sticky; /* For Safari */
                                            position: sticky;
                                            top: 55px; /* Adjust the value to the desired offset from the top */
                                            z-index: 1030; /* Ensure it's above other content */
                                            background-color: #f2f5ff; /* Match the card background or set as needed */
                                            border-bottom: 1px solid #ddd; /* Optional: add a border to distinguish the navbar */
                                        }
                                        
                                    </style>
                                    <nav class="sticky-navbar">
                                        <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link fs-b active" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-home" aria-selected="true">Profile</a>
                                            <a class="nav-item nav-link fs-b " id="custom-nav-chat-tab" data-toggle="tab" href="#custom-nav-chat" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Chat</a>
                                            <a class="nav-item nav-link fs-b" id="custom-nav-prescription-tab" data-toggle="tab" href="#custom-nav-prescription" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Prescription</a>
                                            <a class="nav-item nav-link fs-b" id="custom-nav-medicine-tab" data-toggle="tab" href="#custom-nav-medicine" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Medicine</a>
                                            <a class="nav-item nav-link fs-b" id="custom-nav-other-tab" data-toggle="tab" href="#custom-nav-other" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Other</a>
                                            
                                        </div>
                                    </nav>
                                    <div class="tab-content pt-2" id="nav-tabContent">

                                        <!-- profile start -->
                                        <div class="tab-pane fade show active" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <section class="section">
                                                <div class="card mt-4">
                                                    <div class="row m-0 align-items-center ">
                                                        <div class="col-md-2 p-4">
                                                            <img src="images/profile.jpg" alt="profile img" style="border-radius: 10px; width: 100%;">
                                                        </div>
                                                        <div class="col-md-6 p-4 text-center text-md-left ">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <h4 class="text-secondary"><b># 1342</b></h4>
                                                                <h4 class="text-secondary">
                                                                    <b><i class="fa fa-phone border p-1 rounded-circle bg-light"></i> +91 9087654321</b>
                                                                </h4>
                                                            </div>
                                                            <hr class="m-2">
                                                            <h3><b>Full Name</b></h3>
                                                            <p class="mt-1 mb-2"><i class="fa fa-location-dot"></i> Vazhakkala, Kakkanad, Kochi, Kerala</p>
                                                            <hr class="m-0">
                                                            <small class="text-secondary">Referring Doctor: <b>Dr. Doctor Name</b></small>
                                                        </div>
                                                        <div class="col-md-4 p-4">
                                                            <div class="row age-gender ">
                                                                <div class="col-6 text-center p-1">
                                                                    <div class="border rounded p-1">
                                                                        <h4 class="text-secondary"><b>28 Years</b></h4>
                                                                        <small class="text-secondary">Age</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-center p-1">
                                                                    <div class="border rounded p-1">
                                                                        <h4 class="text-secondary"><b>Male</b></h4>
                                                                        <small class="text-secondary">Gender</small> 
                                                                    </div> 
                                                                </div>
                                                                <div class="col-12 p-1">
                                                                    <div class="border rounded p-1 pl-3">
                                                                        <small class="text-secondary">Package</small>
                                                                        <h4><b>Package Name</b></h4>
                                                                        <hr class="m-1">
                                                                        <small class="mb-0 text-secondary">Expiring: <b>10-10-2024</b></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="card p-4">
                                                            <div class="d-flex justify-content-between">
                                                                <small>Notes</small>
                                                                <a href="#" data-toggle="modal" data-target="#updateNotesModal"><i class="fa fa-pen p-1 border rounded-circle bg-light"></i></a>
                                                            </div>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis qui nisi commodi dolore consequatur iure neque. Sed fuga explicabo minima eum illo repellat maxime, debitis consequatur possimus ad, veniam labore.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="card p-4 text-center">
                                                            <h4 class="text-secondary"><b>Next Consultation Scheduled on</b></h4>
                                                            <hr>
                                                            <div class="d-flex mb-3">
                                                                <input type="date" class="form-control" name="" id="" value="2024-10-10">
                                                                <button class="btn btn-info w-25">update</button>
                                                            </div>
                                                            
                                                            <button class="btn btn-outline-warning py-3"><b>Pending <i class="fa-regular fa-clock"></i></b></button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="card p-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h4 class="text-secondary"><b>Start an Online Session</b></h4>
                                                                <h6 style="color: rgb(0, 218, 0);"><b><i class="fa-solid fa-circle-dot"></i> Live</b></h6>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group mb-0">
                                                                <div class="row">
                                                                    <div class="col-12 d-flex mb-3">
                                                                        <input type="text" class="form-control col-md-9 col-8" aria-describedby="meetingLink" placeholder="Enter meet link" value="https://meet.google.com/wjiehr9">
                                                                        <button class="btn btn-primary col-md-3 col-4" disabled>Share</button>
                                                                    </div>
                                                                    <div class=" col-12">
                                                                        <button class="btn btn-danger w-100 py-3" >End Session <i class="fa-solid fa-video-slash"></i></button>
                                                                    </div>
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card p-4">
                                                            <small class="text-secondary">Previous Consultations</small>

                                                            <h4 class="text-center my-5" style="color: #cecece;"><b>Previous Consultation History <i class="fa-solid fa-clock"></i></b></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <!-- profile end -->



                                        <!-- chat start -->
                                        <div class="tab-pane fade" id="custom-nav-chat" role="tabpanel" aria-labelledby="custom-nav-chat-tab">
                                            <div class="section">
                                                <div class="container" style="max-width: 20000px;">
                                                    <div class="row">
                                                        <div class="col-12 p-0">
                                                            <div class="card mt-4">
                                                                <div class="card-body">
                                                                    <h4 class="card-title box-title">Live Chat</h4>
                                                                    <div class="card-content">
                                                                        <div class="messenger-box">
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="msg-received msg-container">
                                                                                        <div class="avatar">
                                                                                           <img src="images/profile.jpg" alt="">
                                                                                           <div class="send-time">11.11 am</div>
                                                                                        </div>
                                                                                        <div class="msg-box">
                                                                                            <div class="inner-box">
                                                                                                <div class="name">
                                                                                                    <b>Patient's name</b>
                                                                                                </div>
                                                                                                <div class="meg">
                                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- /.msg-received -->
                                                                                </li>
                                                                                <li>
                                                                                    <div class="msg-sent msg-container">
                                                                                        <div class="avatar">
                                                                                           <img src="images/avatar/64-2.jpg" alt="">
                                                                                           <div class="send-time">11.11 am</div>
                                                                                        </div>
                                                                                        <div class="msg-box">
                                                                                            <div class="inner-box">
                                                                                                <div class="name">
                                                                                                    <b>Dr. Doctor name</b>
                                                                                                </div>
                                                                                                <div class="meg">
                                                                                                    Hi, this a test message
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- /.msg-sent -->
                                                                                </li>
                                                                            </ul>


                                                                            <style>
                                                                                .yourmsg input{
                                                                                    border-radius: 30px 0px 0px 30px !important;
                                                                                }
                                                                                .doc-select-btn{
                                                                                    border-radius: 0px 30px 30px 0px !important;
                                                                                }
                                                                            </style>
                                                                            <hr>
                                                                            <div class="send-mgs">
                                                                                <div class="yourmsg d-flex">
                                                                                    <input class="w-100 bg-light pl-4" type="text" >
                                                                                    <button class="btn doc-select-btn">
                                                                                        <i class="fa fa-paperclip"></i> <!-- Font Awesome paperclip icon for document selection -->
                                                                                        <input type="file" style="display: none;">
                                                                                    </button> 
                                                                                </div>
                                                                                <button class="btn msg-send-btn rounded-circle">
                                                                                    <i class="pe-7s-paper-plane"></i>
                                                                                </button>
                                                                                
                                                                            </div>
                                                                            <script>
                                                                                document.querySelector('.doc-select-btn').addEventListener('click', function() {
                                                                                    this.querySelector('input[type="file"]').click();
                                                                                });
                                                                            </script>
                                                                            
                                                                        </div><!-- /.messenger-box -->
                                                                    </div>
                                                                </div> <!-- /.card-body -->
                                                            </div><!-- /.card -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- chat end -->

                                        <!-- Prescription start -->
                                         <style>
                                            .textarea:focus{
                                                outline: none;
                                                box-shadow: none;
                                                border-color: green;
                                            }
                                         </style>
                                        <div class="tab-pane fade" id="custom-nav-prescription" role="tabpanel" aria-labelledby="custom-nav-prescription-tab">
                                            <div class="container" style="max-width: 20000px;">
                                                <div class="row">

                                                    <div class="col-12 p-0">
                                                        <div class="card p-3 mt-4">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Prescription</label>
                                                                <textarea class="form-control textarea" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                            </div>
                                                            <div class="text-right">
                                                                <button class="btn btn-success">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 p-0">
                                                        <div class="card p-3">
                                                            <small class="text-center">12-11-2024</small>
                                                            <hr class="m-0">
                                                            <p class="border rounded p-2 my-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates sequi pariatur iste earum sint. Reiciendis doloribus officia ipsum vero exercitationem ipsa ullam fugit illo commodi deserunt nihil, fugiat, velit temporibus?</p>
                                                            <p class="border rounded p-2 my-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero aperiam suscipit laborum ducimus sint aliquam pariatur amet minima iure nulla distinctio vitae, rerum quae, nostrum, repellat expedita excepturi? Eveniet, cupiditate.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 p-0">
                                                        <div class="card p-3">
                                                            <small class="text-center">10-10-2024</small>
                                                            <hr class="m-0">
                                                            <p class="border rounded p-2 my-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates sequi pariatur iste earum sint. Reiciendis doloribus officia ipsum vero exercitationem ipsa ullam fugit illo commodi deserunt nihil, fugiat, velit temporibus?</p>
                                                            <p class="border rounded p-2 my-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero aperiam suscipit laborum ducimus sint aliquam pariatur amet minima iure nulla distinctio vitae, rerum quae, nostrum, repellat expedita excepturi? Eveniet, cupiditate.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Prescription end -->

                                        <!-- Medicine start -->
                                        <div class="tab-pane fade" id="custom-nav-medicine" role="tabpanel" aria-labelledby="custom-nav-medicine-tab">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 p-0">
                                                        <div class="card p-4 mt-4">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-control textarea">
                                                                            <option>Select Medicine</option>
                                                                            <option value="">Medicine 1</option>
                                                                            <option value="">Medicine 2</option>
                                                                            <option value="">Medicine 3</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control textarea" id="exampleFormControlInput1" placeholder="Dosage (Per Day)">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <!-- <label for="exampleFormControlTextarea1">Prescription</label> -->
                                                                        <textarea class="form-control textarea" id="exampleFormControlTextarea1" rows="3" placeholder="description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-right">
                                                                    <button class="btn btn-success">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0 ">
                                                        <div class="card p-4">
                                                            <small class="text-center">12-11-2024</small>
                                                            <hr class="m-0">
                                                            <div class="row">
                                                                <div class="col-md-6 my-1 ">
                                                                    <div class="row border rounded p-2">
                                                                        <div class="col-3 p-0">
                                                                            <img src="https://i.postimg.cc/1tPgBBy1/p1.jpg" alt="" style="border-radius: 15px;">
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div>
                                                                                    <h4><b>Medicine name</b></h3>
                                                                                    <p class="mb-1">Duration: <b>14 Days</b></p>
                                                                                </div>
                                                                                <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                                                            </div>
                                                                            <hr class="m-0">
                                                                            <small class="text-secondary">Lorem ipsum dolor sit a amet consectetur adipisicing elit. Nulla nostrum, facilis et eum deleniti, earum animi, impedit quas odio consequatur laudantium</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 my-1">
                                                                    <div class="row border rounded p-2">
                                                                        <div class="col-3 p-0">
                                                                            <img src="https://i.postimg.cc/Gtm4wpBM/p4.jpg" alt="" style="border-radius: 15px;">
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div>
                                                                                    <h4><b>Medicine name</b></h3>
                                                                                    <p class="mb-1">Duration: <b>14 Days</b></p>
                                                                                </div>
                                                                                <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                                                            </div>
                                                                            <hr class="m-0">
                                                                            <small class="text-secondary">Lorem ipsum dolor sit a amet consectetur adipisicing elit. Nulla nostrum, facilis et eum deleniti, earum animi, impedit quas odio consequatur laudantium</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 my-1 ">
                                                                    <div class="row border rounded p-2">
                                                                        <div class="col-3 p-0">
                                                                            <img src="https://i.postimg.cc/Gtm4wpBM/p4.jpg" alt="" style="border-radius: 15px;">
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div>
                                                                                    <h4><b>Medicine name</b></h3>
                                                                                    <p class="mb-1">Duration: <b>14 Days</b></p>
                                                                                </div>
                                                                                <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                                                            </div>
                                                                            <hr class="m-0">
                                                                            <small class="text-secondary">Lorem ipsum dolor sit a amet consectetur adipisicing elit. Nulla nostrum, facilis et eum deleniti, earum animi, impedit quas odio consequatur laudantium</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 my-1">
                                                                    <div class="row border rounded p-2">
                                                                        <div class="col-3 p-0">
                                                                            <img src="https://i.postimg.cc/1tPgBBy1/p1.jpg" alt="" style="border-radius: 15px;">
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div>
                                                                                    <h4><b>Medicine name</b></h3>
                                                                                    <p class="mb-1">Duration: <b>14 Days</b></p>
                                                                                </div>
                                                                                <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                                                            </div>
                                                                            <hr class="m-0">
                                                                            <small class="text-secondary">Lorem ipsum dolor sit a amet consectetur adipisicing elit. Nulla nostrum, facilis et eum deleniti, earum animi, impedit quas odio consequatur laudantium</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 p-0">
                                                        <div class="card p-4">
                                                            <small class="text-center">10-10-2024</small>
                                                            <hr class="m-0">
                                                            <div class="row">
                                                                <div class="col-md-6 my-1 ">
                                                                    <div class="row border rounded p-2">
                                                                        <div class="col-3 p-0">
                                                                            <img src="https://i.postimg.cc/Gtm4wpBM/p4.jpg" alt="" style="border-radius: 15px;">
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div>
                                                                                    <h4><b>Medicine name</b></h3>
                                                                                    <p class="mb-1">Duration: <b>14 Days</b></p>
                                                                                </div>
                                                                                <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                                                            </div>
                                                                            <hr class="m-0">
                                                                            <small class="text-secondary">Lorem ipsum dolor sit a amet consectetur adipisicing elit. Nulla nostrum, facilis et eum deleniti, earum animi, impedit quas odio consequatur laudantium</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 my-1">
                                                                    <div class="row border rounded p-2">
                                                                        <div class="col-3 p-0">
                                                                            <img src="https://i.postimg.cc/1tPgBBy1/p1.jpg" alt="" style="border-radius: 15px;">
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div>
                                                                                    <h4><b>Medicine name</b></h3>
                                                                                    <p class="mb-1">Duration: <b>14 Days</b></p>
                                                                                </div>
                                                                                <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                                                            </div>
                                                                            <hr class="m-0">
                                                                            <small class="text-secondary">Lorem ipsum dolor sit a amet consectetur adipisicing elit. Nulla nostrum, facilis et eum deleniti, earum animi, impedit quas odio consequatur laudantium</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Medicine end -->

                                        <!-- Other start -->
                                        <div class="tab-pane fade" id="custom-nav-other" role="tabpanel" aria-labelledby="custom-nav-other-tab">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 p-0">
                                                        <div class="card p-4 mt-4">
                                                            <div class="card-header">
                                                                <h4 class="text-secondary text-center"><b>Package Details</b></h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-8 my-2 d-flex align-items-center">
                                                                    <img src="https://i.postimg.cc/s23tyqJ8/6.jpg" alt="" class="p-1" width="100" style="border-radius: 10px;">
                                                                    <div class="pl-3">
                                                                        <h2 class="mb-2">Current Package Name</h2>
                                                                        <p>Exp: <b>10-10-2024</b></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 my-2">
                                                                    <div class="border rounded p-3">
                                                                        <p class="mb-0">Package cost: <b>₹ 4999</b></p>
                                                                        <hr class="m-2">
                                                                        <p class="mb-0">Payment status: <b class="text-success">Paid</b></p>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-6 my-2 border-top pt-3">
                                                                    <small>content: Lorem ipsum dolor sit amet consectetur adipisicing elit.</small><hr class="m-1">
                                                                    <small>content: Lorem ipsum dolor sit amet consectetur adipisicing elit.</small><hr class="m-1">
                                                                    <small>content: Lorem ipsum dolor sit amet consectetur adipisicing elit.</small><hr class="m-1">
                                                                    <small>content: Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                                                                </div>
                                                                <div class="col-md-6 my-2 border-top pt-3">
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ratione esse beatae voluptatem enim incidunt eum! Maiores odit quam voluptas amet? Magnam quia voluptas facere nisi porro cupiditate maxime reiciendis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 p-0">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <nav>
                                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                        <a class="nav-item w-50 nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Select Package</a>
                                                                        <a class="nav-item w-50 nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Custom Package</a>
                                                                    </div>
                                                                </nav>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="default-tab">
                                                                    
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                                            <div class="form-group">
                                                                                <select class="form-control textarea form-control-lg">
                                                                                    <option>Select Package</option>
                                                                                    <option>Package 1</option>
                                                                                    <option>Package 2</option>
                                                                                    <option>Package 3</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                                                                            <div>
                                                                                <form class="row">
                                                                                    <div class="form-group col-12">
                                                                                      <label for="exampleFormControlInput3">Package name</label>
                                                                                      <input type="text" class="form-control"  id="exampleFormControlInput3" placeholder="Enter package name">
                                                                                      <hr>
                                                                                    </div>
                                                            
                                                                                    <div class="form-group col-12">
                                                                                        <label for="exampleFormControlTextarea1">Description</label>
                                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter package description"></textarea>
                                                                                        <hr>
                                                                                      </div>
                                                            
                                                                                    <div class="form-group col-6">
                                                                                      <label for="exampleFormControlInput4">Duration</label>
                                                                                      <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Enter duration">
                                                                                      <hr>
                                                                                    </div>
                                                                                    
                                                                                    <div class="form-group col-6">
                                                                                        <label for="exampleFormControlSelect1">Type</label>
                                                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                                                            <option value="" disabled selected>Select type</option>
                                                                                            <option value="Month">Month</option>
                                                                                            <option value="Months">Months</option>
                                                                                            <option value="Year">Year</option>
                                                                                            <option value="Years">Years</option>
                                                                                        </select>
                                                                                        <hr>
                                                                                    </div>
                                                            
                                                                                    <div class="form-group col-12">
                                                                                        <label for="exampleFormControlInput4">Package cost</label>
                                                                                        <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Enter package cost ₹">
                                                                                        <hr>
                                                                                    </div>
                                                                                    
                                                                                    <div class="text-center col-12">
                                                                                        <button class="btn btn-success w-50">Save</button>
                                                                                    </div>


                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Other end -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="clearfix"></div>
        <!-- Footer -->

        @endsection
        
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->


    <!-- Notes update Modal -->
    <div class="modal fade" id="updateNotesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Update Notes</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis qui nisi commodi dolore consequatur iure neque. Sed fuga explicabo minima eum illo repellat maxime, debitis consequatur possimus ad, veniam labore.
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    
</body>
</html>
