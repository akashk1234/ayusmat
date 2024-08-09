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

    <!-- bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
   
</head>

<body>
        
        @extends('admin-layout.app')
        <!-- /#header -->

        @section('content')

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between py-4">
                        <a href="admin-appointments" class="btn btn-outline-info">Scheduled Appointments</a>
                        <input type="date" class="form-control" name="" id="" style="width: 200px;">
                    </div>
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center"><b>Bookings Through Website</b></h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Date</th>
                                          <th scope="col">Time</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Mobile</th>
                                          <th scope="col">Packages</th>
                                          <th scope="col" class="text-center">Schedule</th>
                                          <th scope="col" class="text-center">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                @foreach ($bookings as $booking)                                    
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$booking->date}}</td>
                                        <td>{{$booking->time}}</td>
                                        <td>{{$booking->name}}</td>
                                        <td>{{$booking->mobile}}</td>
                                        <td>{{$booking->package}}</td>
                                        <td class="text-center">
                                            <a href="" class="text-info" data-toggle="modal" data-target=".scheduleModal{{$booking->id}}"><i class="fa-solid fa-calendar-check fa-xl"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <form method="post" action="{{route('admin-bookings.destroy', $booking->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger btn btn-light" onclick="return confirm('Are you sure you want to delete this booking')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>


                                    <!--Schedule Modal start-->
                                    <div class="modal fade scheduleModal{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex">
                                                    <h4 class="modal-title" id="exampleModalLongTitle">Schedule Appointment</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{route('admin-appointments.store')}}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                            <label for="exampleFormControlInput1">Date</label>
                                                            <input type="date" name="date" class="form-control" value="{{$booking->date}}" id="exampleFormControlInput1" placeholder="">
                                                            <hr>
                                                            </div>
    
                                                            <div class="form-group col-md-6">
                                                            <label for="exampleFormControlInput2">Time</label>
                                                            <input type="time" name="time" class="form-control" value="{{$booking->time}}" id="exampleFormControlInput2" placeholder="">
                                                            <hr>
                                                            </div>
    
                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInput3">Name</label>
                                                            <input type="text" name="name" class="form-control" value="{{$booking->name}}" id="exampleFormControlInput3" placeholder="Enter name">
                                                            <hr>
                                                            </div>
    
                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInput4">Mobile</label>
                                                            <input type="text" name="mobile" class="form-control" value="{{$booking->mobile}}" id="exampleFormControlInput4" placeholder="Enter mobile">
                                                            <hr>
                                                            </div>
    
                                                            <div class="form-group col-12">
                                                            <label for="exampleFormControlInputt">Select Doctor</label>
                                                                <select class="form-control" name="role">
                                                                    <option value="" disabled>Select Doctor</option>

                                                                    @foreach ($users as $user)
                                                                        @if($user->role === 'Doctor')
                                                                            <option value="{{ $user->id }}">{{$user->name}}</option>
                                                                        @endif
                                                                    @endforeach

                                                                </select>
                                                                <hr>
                                                            </div>
                                                            
                                                            <div class="form-group col-12">
                                                                <label for="exampleFormControlTextarea1">Notes</label>
                                                                <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="3" placeholder="Enter notes"></textarea>
                                                            </div>
    
                                                            <!-- input for status (scheduled) -->
                                                            <input type="hidden" name="status" value="pending">

                                                            <div class="col-12 text-right">
                                                                <hr>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Schedule Now</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Schedule Modal end-->

                                @endforeach   

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
