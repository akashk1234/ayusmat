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

        <section  class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between py-4">
                        <a href="registered-patients" class="btn btn-outline-info">Registered Patients <span class="badge badge-info bg-info">12</span></a>
                        <a href="" class="btn btn-info" data-toggle="modal" data-target=".addPatientModal">Add new patient +</a>
                    </div>
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center"><b>Patients</b></h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Patient ID</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Mobile</th>
                                          <th scope="col">Referring Doctor</th>
                                          <th scope="col">Next Consultation</th>
                                          <th scope="col">Package Expiring</th>
                                          <th scope="col">Profile</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1045</td>
                                        <td>Name</td>
                                        <td>9087654321</td>
                                        <td>Doctor's name</td>
                                        <td>10-08-24</td>
                                        <td class="text-success">22-12-24</td>
                                        <td class="text-center">
                                            <a href="patient-profile" class="text-primary"><i class="fa-regular fa-address-card fa-xl"></i></a>

                                            <a href="" data-toggle="modal" data-target=".editPatientModal" class="mx-2 text-info"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>1046</td>
                                        <td>Name</td>
                                        <td>8087654321</td>
                                        <td>Doctor's name</td>
                                        <td>12-08-24</td>
                                        <td class="text-warning">30-08-24</td>
                                        <td class="text-center">
                                            <a href="patient-profile" class="text-primary"><i class="fa-regular fa-address-card fa-xl"></i></a>

                                            <a href="" data-toggle="modal" data-target=".editPatientModal" class="mx-2 text-info"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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


    <!--Add Patient Modal start-->
    <div class="modal fade addPatientModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-4">
            <form class="border p-3">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Add new patient+</h3><hr>
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Patient Id</small>
                        <input type="text" class="form-control" placeholder="Id">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Name</small>
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Location</small>
                        <input type="text" class="form-control" placeholder="Enter location">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Age</small>
                        <input type="number" class="form-control" placeholder="Enter age">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Select Gender</small>
                        <select class="form-control">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>                    
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Mobile</small>
                        <input type="text" class="form-control" placeholder="Enter mobile number">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Referring Doctor</small>
                        <input type="text" class="form-control" placeholder="Referring doctor name">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Select Package</small>
                        <select class="form-control">
                            <option value="" disabled selected>Select Package</option>
                            <option value="package1">Package 1</option>
                            <option value="package2">Package 2</option>
                        </select>
                    </div>                    
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Package Expiring date</small>
                        <input type="date" class="form-control" placeholder="Package">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Notes</small>
                        <textarea class="form-control" placeholder="Enter notes"></textarea>
                    </div>
                    
                    <div class="col-12 text-center">
                        <button class="btn btn-danger">Close</button>
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    <!--Add Patient Modal end-->


    <!--Edit Patient Modal start-->
    <div class="modal fade editPatientModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-4">
            <form class="border p-3">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Edit patient</h3><hr>
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Patient Id</small>
                        <input type="text" class="form-control" placeholder="Id">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Name</small>
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Location</small>
                        <input type="text" class="form-control" placeholder="Enter location">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Age</small>
                        <input type="number" class="form-control" placeholder="Enter age">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Select Gender</small>
                        <select class="form-control">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>                    
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Mobile</small>
                        <input type="text" class="form-control" placeholder="Enter mobile number">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Referring Doctor</small>
                        <input type="text" class="form-control" placeholder="Referring doctor name">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Select Package</small>
                        <select class="form-control">
                            <option value="" disabled selected>Select Package</option>
                            <option value="package1">Package 1</option>
                            <option value="package2">Package 2</option>
                        </select>
                    </div>                    
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Package Expiring date</small>
                        <input type="date" class="form-control" placeholder="Package">
                    </div>
                    <div class="col-md-6 my-3">
                        <small class="text-secondary">Notes</small>
                        <textarea class="form-control" placeholder="Enter notes"></textarea>
                    </div>
                    
                    <div class="col-12 text-center">
                        <button class="btn btn-danger">Close</button>
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    <!--Edit Patient Modal end-->

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
