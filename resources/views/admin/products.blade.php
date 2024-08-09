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
                    <div class="col-12 mb-4 text-right">
                        <button class="btn btn-info" data-toggle="modal" data-target="#addProductModal">Add new Product +</button>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center"><b>Products</b></h3>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Image</th>
                                            <th>Product name</th>
                                            <th width="120px">Actual price</th>
                                            <th width="120px">Selling price</th>
                                            <th width="250px">Specifications</th>
                                            <th width="250px">Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="https://i.postimg.cc/1tPgBBy1/p1.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> Product 1</td>
                                            <td>  <span class="name">₹ 1299</span> </td>
                                            <td> <span class="product">₹ 999</span> </td>
                                            <td>
                                                <ul class="text-left">
                                                    <li>Lorem ipsum dolor sit elit.</li>
                                                    <li>amet consectetur adipisicing</li>
                                                    <li>Assumenda neque sint voluptate</li>
                                                    <li>labore ratione ab, iste voluptatibus</li>
                                                </ul>
                                            </td>
                                            <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum rerum vitae similique dolorum sit odit animi, voluptatem repellat rem minima excepturi non unde eius quos laboriosam, libero et nulla natus?</td>
                                            <td class="d-flex">
                                                <a href="" class="mx-1 text-primary" data-toggle="modal" data-target=".editProductModal"><i class="fa-regular fa-pen-to-square fa-xl"></i></a>
                                                <a href="" class="mx-1 text-danger"><i class="fa fa-trash fa-xl"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">2.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="https://i.postimg.cc/Gtm4wpBM/p4.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> Product 2 </td>
                                            <td>  <span class="name">₹ 899</span> </td>
                                            <td> <span class="product">₹ 649</span> </td>
                                            <td>
                                                <ul class="text-left">
                                                    <li>Lorem ipsum dolor sit elit.</li>
                                                    <li>amet consectetur adipisicing</li>
                                                    <li>Assumenda neque sint voluptate</li>
                                                    <li>labore ratione ab, iste voluptatibus</li>
                                                </ul>
                                            </td>
                                            <td class="text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem repudiandae omnis quo. Odit officia vero, quis unde possimus illo cumque dolor corporis fugiat laboriosam, omnis voluptates ducimus at necessitatibus impedit!</td>
                                            <td class="d-flex">
                                                <a href="" class="mx-1 text-primary" data-toggle="modal" data-target=".editProductModal"><i class="fa-regular fa-pen-to-square fa-xl"></i></a>
                                                <a href="" class="mx-1 text-danger"><i class="fa fa-trash fa-xl"></i></a>
                                            </td>
                                        </tr>

                                        <!--Edit Product Modal start-->
                                        <div class="modal fade editProductModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="modal-header d-flex">
                                                        <h4 class="modal-title" id="exampleModalLongTitle">Edit product</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row">
                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInput1">Product name</label>
                                                            <input type="text" class="form-control" value="Name" id="exampleFormControlInput1" placeholder="Enter product name">
                                                            <hr>
                                                            </div>

                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInput2">Product image [1:1]</label>
                                                            <input type="file" class="form-control" id="exampleFormControlInput2" placeholder="">
                                                            <hr>
                                                            </div>

                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInput3">Actual price</label>
                                                            <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="Enter actual price">
                                                            <hr>
                                                            </div>

                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInput4">Selling price</label>
                                                            <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Enter selling price">
                                                            <hr>
                                                            </div>


                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInput5">Product specifications</label>
                                                            <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                                                            <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                                                            <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                                                            <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                                                            <hr>
                                                            </div>

                                                            
                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlTextarea1">Product description</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter product description"></textarea>
                                                            </div>

                                                            <!-- input for status (scheduled) -->
                                                            <input type="hidden" value="true">
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-success px-5">Save</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Edit Product Modal end-->
                                        
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
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


    <!--Add Product Modal start-->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header d-flex">
                    <h4 class="modal-title" id="exampleModalLongTitle">Add new product +</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="form-group col-12">
                          <label for="exampleFormControlInput1">Product name</label>
                          <input type="text" class="form-control" value="Name" id="exampleFormControlInput1" placeholder="Enter product name">
                          <hr>
                        </div>

                        <div class="form-group col-12">
                          <label for="exampleFormControlInput2">Product image [1:1]</label>
                          <input type="file" class="form-control" id="exampleFormControlInput2" placeholder="">
                          <hr>
                        </div>

                        <div class="form-group col-12">
                          <label for="exampleFormControlInput3">Actual price</label>
                          <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="Enter actual price">
                          <hr>
                        </div>

                        <div class="form-group col-12">
                          <label for="exampleFormControlInput4">Selling price</label>
                          <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Enter selling price">
                          <hr>
                        </div>


                        <div class="form-group col-12">
                          <label for="exampleFormControlInput5">Product specifications</label>
                          <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                          <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                          <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                          <input type="text" class="form-control mb-2" id="exampleFormControlInput5" placeholder="Enter specification">
                          <hr>
                        </div>

                        
                        <div class="form-group col-12">
                          <label for="exampleFormControlTextarea1">Product description</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter product description"></textarea>
                        </div>

                        <!-- input for status (scheduled) -->
                        <input type="hidden" value="true">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success px-5">Save</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--Add Product Modal end-->

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
