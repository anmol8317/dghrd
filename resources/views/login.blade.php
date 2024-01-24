<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
	<!-- PAGE TITLE HERE -->
	<title>Ireda Login</title>
	
	<link rel="shortcut icon" type="image/png" href="{{asset('public/assets/images/favicon.png')}}">
	<link href="{{asset('public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
   <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">

            <div class="row h-100">
               
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    
                    
                 
                   @if (Session::has('error'))
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>error!</strong> {{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  @if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                    <strong>Success!</strong> {{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                
                 </div>
                 @endif
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign In</h3>
							<p>Sign in to your account to start using Ireda</p>
						</div>
                        <form class="form-valide-with-icon needs-validation" novalidate method="POST" action="{{ route('logincheck') }}">
                            @csrf
            <div class="mb-3">
                <label class="text-label form-label" for="validationCustomUsername">Email</label>
                <div class="input-group">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    <input type="email" class="form-control" name="email" id="validationCustomUsername" placeholder="Enter a email.." required>
                    <div class="invalid-feedback">
                        Please Enter email.
                      </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="text-label form-label" for="dz-password">Password *</label>
                <div class="input-group transparent-append">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    <input type="password" class="form-control" name="password" id="dz-password" placeholder="Enter Password" required>
                    <span class="input-group-text show-pass"> 
                        <i class="fa fa-eye-slash"></i>
                        <i class="fa fa-eye"></i>
                    </span>
                    <div class="invalid-feedback">
                        Please Enter a Password.
                    </div>
                </div>
            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="#"><img src="{{asset('public/assets/images/logo-full.png')}}" class="mb-3 logo-dark" alt=""></a>
							<a href="#"><img src="{{asset('public/assets/images/logi-white.png')}}" class="mb-3 logo-light" alt=""></a>
							
								</div>
						<div class="login-media text-center">
							<img src="{{asset('public/assets/images/login.png')}}" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
 <script src="{{asset('public/assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('public/assets/js/deznav-init.js')}}"></script>
<script src="{{asset('public/assets/js/demo.js')}}"></script>
  <script src="{{asset('public/assets/js/custom.js')}}"></script>
<script src="{{asset('public/assets/js/styleSwitcher.js')}}"></script>

</body>

</html>