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
    <div class="topbar">
      <div class="container">
        <div class="row">
        
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary"></span></a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
            
            @if(Route::has('login'))
            @auth
            
            <li class="nav-item">
              <a class="nav-link" style="background-color: yellow" href="{{url('myoperation')}}">My Operation</a>
            </li>

            <x-app-layout>
              </x-app-layout>


            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}"> Register</a>
            </li>

            @endauth
            @endif


          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" style="padding:80px; ">
  	
  	<table>
  		<tr style="background-color: yellow;">
  			<th style="padding: 10px; font-size: 20px; color: black;">Doctor Name</th>
  			<th style="padding: 10px; font-size: 20px; color: black;">Date</th>
  			<th style="padding: 10px; font-size: 20px; color: black;">Message</th>
  			<th style="padding: 10px; font-size: 20px; color: black;">Status</th>
  			<th style="padding: 10px; font-size: 20px; color: black;">Cancel Operation</th>
  		</tr>

  		@foreach($operation as $operations)

  		<tr style="background-color: lightgreen;" align="center">
  			<td style="padding: 10px;  color: black;">{{$operations->doctor}}</td>
  			<td style="padding: 10px;  color: black;">{{$operations->date}}</td>
  			<td style="padding: 10px;  color: black;">{{$operations->message}}</td>
  			<td style="padding: 10px;  color: black;">{{$operations->status}}</td>
  			<td><a class="btn btn-danger" onclick="return confirm('ARE YOU SURE?')" href="{{url('cancel_operation',$operations->id)}}">Cancel</a></td>
  		</tr>
  		@endforeach

  	</table>
  </div>

  
 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>