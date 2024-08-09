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
                    <div class="col-12 d-flex justify-content-end py-4">
                        <a href="" class="btn btn-info" data-toggle="modal" data-target=".addPackageModal">Add new package +</a>
                    </div>
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center"><b>Packages</b></h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Package</th>
                                          <th scope="col" style="width: 300px;">Description</th>
                                          <th scope="col">Duration</th>
                                          <th scope="col">Cost</th>
                                          <th scope="col" class="text-center">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Package 1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio tempore nobis quisquam saepe accusantium id maiores mollitia quod repellendus sequi. Natus iusto laudantium facere corporis sed explicabo dignissimos blanditiis excepturi.</td>
                                        <td>6 Months</td>
                                        <td>₹ 14999</td>
                                        <td class="text-center">
                                            <a href="" class="mx-2 text-info" data-toggle="modal" data-target=".editPackageModal"><i class="fa fa-pen fa-lg"></i></a>
                                            <a href="" class="mx-2 text-danger"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Package 2</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, suscipit dolorum ad laboriosam, quae error at illum dicta facilis, tempore iusto? Cum rerum delectus dolores nihil dolorum sed. Nisi, consequuntur.</td>
                                        <td>3 Months</td>
                                        <td>₹ 8499</td>
                                        <td class="text-center">
                                            <a href="" class="mx-2 text-info" data-toggle="modal" data-target=".editPackageModal"><i class="fa fa-pen fa-lg"></i></a>
                                            <a href="" class="mx-2 text-danger"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <!--edit package Modal start-->
                                    <div class="modal fade editPackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex">
                                                    <h4 class="modal-title" id="exampleModalLongTitle">Edit package</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="row">
                                                        <div class="form-group col-12">
                                                        <label for="exampleFormControlInput3">Package name</label>
                                                        <input type="text" class="form-control" value="package name" id="exampleFormControlInput3" placeholder="Enter package name">
                                                        <hr>
                                                        </div>

                                                        <div class="form-group col-12">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter package description"></textarea>
                                                            <hr>
                                                        </div>

                                                        <div class="row">
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
                                                        </div>

                                                        <div class="form-group col-12">
                                                            <label for="exampleFormControlInput4">Package cost</label>
                                                            <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Enter package cost ₹">
                                                            <hr>
                                                        </div>
                                                        

                                                        <!-- input for status (scheduled) -->
                                                        <input type="hidden" value="true">
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--edit package Modal end-->
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

    <!--add package Modal start-->
    <div class="modal fade addPackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h4 class="modal-title" id="exampleModalLongTitle">Add new package</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                        

                        <!-- input for status (scheduled) -->
                        <input type="hidden" value="true">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--add package Modal end-->

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
