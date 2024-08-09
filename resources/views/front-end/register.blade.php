<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .login-card {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            border-radius: 25px;
        }
        .login {
            color: #dfa974;
            font-weight: 600;
        }
        input, select {
            border: 2px solid #ffe6cd !important;
            outline: none;
            border-radius: 30px !important;
            text-align: center;
        }
        input:focus, select:focus {
            outline: none !important;
            box-shadow: none !important;
            border-color: #ffd2a4 !important;
        }
        .button {
            background: #dfa974;
            border: none;
            width: 100%;
            font-size: 25px;
            font-weight: 600;
            border-radius: 30px;
        }
        .button:hover {
            background: #eaa25a;
            transition: background-color .4s;
        }
    </style>
</head>
<body>
    <section class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 py-5">
                    <div class="login-card p-5">
                        <h1 class="text-center my-3 login">Create Account</h1>
                        <hr style="color: #cb9865;">
                        <form>
                            <div class="form-group my-4">
                                <input type="text" class="form-control py-3 input" id="exampleInputName" placeholder="Enter your name">
                            </div>
                            <div class="form-group my-4">
                                <input type="number" class="form-control py-3 input" id="exampleInputAge" placeholder="Enter your age">
                            </div>
                            <div class="form-group my-4">
                                <input type="text" class="form-control py-3 input" id="exampleInputLocation" placeholder="Enter your Location">
                            </div>
                            <div class="form-group my-4">
                                <select class="form-control py-3 input" id="exampleInputGender">
                                    <option value="" disabled selected>Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group my-4">
                                <input type="text" class="form-control py-3 input" id="exampleInputAge" placeholder="Enter your mobile number">
                            </div>
                            <div class="form-group my-4">
                                <input type="email" class="form-control py-3 input" id="exampleInputEmail" placeholder="Enter email">
                            </div>
                            <div class="form-group my-4">
                                <input type="password" class="form-control py-3 input mb-1" id="exampleInputPassword" placeholder="Create password">
                            </div>
                            <div class="form-group my-4">
                                <input type="password" class="form-control py-3 input mb-1" id="exampleInputPassword" placeholder="Confirm password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary button py-2 mt-4 mb-4">Register</button>
                        </form>
                        <p>Already have an account? <a href="login.html" style="color: #dfa974; font-weight: 500; text-decoration: none;">Login Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
