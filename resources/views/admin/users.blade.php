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
                        <a href="" class="btn btn-info" data-toggle="modal" data-target=".addPatientModal">Add new user +</a>
                    </div>
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center"><b>Users</b></h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Role</th>
                                          <th scope="col" class="text-center">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>
                                            <td class="text-center">
                                                <a href="" data-toggle="modal" data-target=".editPatientModal{{$user->id}}" class="mx-2 text-info"><i class="fa fa-pen"></i></a>

                                                <button class="btn btn-light text-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>


                                        <!--Edit Patient Modal start-->
                                        <div class="modal fade editPatientModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content p-4">
                                                <form class="border p-3">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h3 class="text-center">Add new user +</h3><hr>
                                                        </div>
                                                        <div class="col-12 my-3">
                                                            <small class="text-secondary">Name</small>
                                                            <input type="text" class="form-control" value="{{$user->name}}" placeholder="Enter name">
                                                        </div>
                                                        <div class="col-12 my-3">
                                                            <small class="text-secondary">Role</small>
                                                            <select class="form-control">
                                                                <option value="" disabled selected>Select Role</option>
                                                                <option value="Doctor" {{$user->role == 'Doctor' ? 'selected' : ''}}>Doctor</option>
                                                                <option value="Staff" {{$user->role == 'Staff' ? 'selected' : ''}}>Staff</option>
                                                            </select>
                                                        </div> 
                                                        <div class="col-12 my-3">
                                                            <small class="text-secondary">Email</small>
                                                            <input type="text" value="{{$user->email}}" class="form-control" placeholder="Enter email">
                                                        </div>
                                                        <div class="col-12 my-3">
                                                            <small class="text-secondary">Change password</small>
                                                            <input type="text" class="form-control" placeholder="Enter password">
                                                        </div>
                                                        <div class="col-12 my-3">
                                                            <small class="text-secondary">Confirm password</small>
                                                            <input type="number" class="form-control" placeholder="Reenter password">
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


    <!--Add Patient Modal start-->
    <div class="modal fade addPatientModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content p-4">
            <form class="border p-3" method="post" action="{{route('users.store')}}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Add new user +</h3><hr>
                    </div>
                    <div class="col-12 my-3">
                <small class="text-secondary">Name</small>
                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ old('name') }}">
            </div>
            <div class="col-12 my-3">
                <small class="text-secondary">Role</small>
                <select class="form-control" name="role">
                    <option value="" disabled>Select Role</option>
                    <option value="Doctor" {{ old('role') == 'Doctor' ? 'selected' : '' }}>Doctor</option>
                    <option value="Staff" {{ old('role') == 'Staff' ? 'selected' : '' }}>Staff</option>
                </select>
            </div> 
            <div class="col-12 my-3">
                <small class="text-secondary">Email</small>
                <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
            </div>
            <div class="col-12 my-3">
                <small class="text-secondary">Create password</small>
                <input type="password" id="new_password" name="new_password" class="form-control" placeholder="Enter password">
            </div>
            <div class="col-12 my-3">
                <small class="text-secondary">Confirm password</small>
                <input type="password" id="confirm_password" name="password" class="form-control" placeholder="Reenter password">
                <!-- Error message container -->
                <div id="error_message" class="error-message text-danger"></div>
            </div>

            <div class="col-12 text-center">
                <button type="button" class="btn btn-danger" onclick="window.history.back();">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    <!--Add Patient Modal end-->

    


    <!-- confirm password -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function validatePasswords() {
                // Get the password fields and error message container
                var newPassword = document.getElementById('new_password').value;
                var confirmPassword = document.getElementById('confirm_password').value;
                var errorMessage = document.getElementById('error_message');

                // Clear previous error message
                errorMessage.textContent = '';

                // Check if passwords match
                if (newPassword !== confirmPassword) {
                    errorMessage.textContent = 'Passwords do not match.';
                    return false; // Prevent form submission
                }

                return true; // Allow form submission
            }

            // Attach the validation function to the form's onsubmit event
            document.querySelector('.addPatientModal form').onsubmit = validatePasswords;
        });
    </script>

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
