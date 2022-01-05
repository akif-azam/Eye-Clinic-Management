<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Eye-Clinic Management System</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
   
              <span class="divider">|</span>
              <a href="#"><span class=""></span><!--  mail@example.com --></a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
     
            
            @if(Route::has('login'))
            @auth
            
            <li class="nav-item">
              <a class="nav-link" style="background-color: yellow" href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" style="background-color: skyblue" href="{{url('myoperation')}}">My Operations</a>
            </li>

            <x-app-layout>
              </x-app-layout>


            @else

            <li class="nav-item">
              <a class="btn btn-success ml-lg-3" href="{{ route('login') }}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success ml-lg-3" href="{{ route('register') }}"> Register</a>
            </li>

            @endauth
            @endif


          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

    @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}
          
        </div>

        @endif


  
@include('user.doctor')

 
 
@auth
 @include('user.appointment')

 @include('user.operation')
@endauth
@guest
@endguest
 
 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>