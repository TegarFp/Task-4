<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
    <title></title>
</head>

<body>
    <section class="vh-100" style="background-color: #20BF06;">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-6 col-md-8 col-lg-3 col-xl-4">
                    <center>
                        <p class="text-white" style="font-weight: Poppins; font-size: 50px;">Udacoding</p>
                    </center>
                    <div class="card" style="border-radius: 5%;">
                        <div class="card-body">
                            <form action="{{ url('login') }}" method="post">
                                @csrf
                                <label for="">Email</label>
                                <div class="input-group mb-3">
                                    <input name="email" type="email" class="form-control">
                                    <div class="input-group-append">
                                    </div>
                                </div>
                                <label for="">Password</label>
                                <div class="input-group mb-3">
                                    <input name="password" type="password" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <a href="forgot.html" style="color: #20BF06">Forget Password?</a>
                                </div>
                                <br><br>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn btn-block text-white text-bold"
                                            style="background-color: #20BF06; border-radius:20px;">Login</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <br><br>
                                <center>
                                <div class="mt-2">
                                    <p class="mb-0">Don't Have an account?
                                        <a href="register.html" class="text-center" style="color: #20BF06">Sign Up Here</a>
                                    </p>
                                </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
