<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="{{ asset('admin_assets/css/styles.css') }}" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('admin_assets/assets/img/logo.png') }}">
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <!-- Basic registration form-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- Registration form-->
                                       <form action="{{ route('register.save') }}" method="POST" class="user">
                                        @csrf
                                            <!-- Form Row-->
                                            <div class="row gx-3">
                                                <div class="col-md-12">
                                                    <!-- Form Group (first name)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputFirstName">Full Name</label>
                                                        <input name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter full name" />
                                                        @error('name')
                                                            <div  class="alert alert-danger" role="alert">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Group (email address)            -->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                                @error('email')
                                                    <div  class="alert alert-danger" role="alert">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- Form Row    -->
                                            <div class="row gx-3">
                                                <div class="col-md-6">
                                                    <!-- Form Group (password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Enter password" />
                                                        @error('password')
                                                            <div  class="alert alert-danger" role="alert">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Form Group (confirm password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input name="password_confirmation" class="form-control" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                        @error('password_confirmation')
                                                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Group (create account submit)-->
                                            <button class="btn btn-primary btn-block">Create Account</button>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; 2023</div>
                        
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
