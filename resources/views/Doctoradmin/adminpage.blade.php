<?php
use App\Patient;
use App\Order;
use App\Doctor;
use App\Models\Booking;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="{{ asset('css/chairhome/bootstrap.adminn.css') }}" rel="stylesheet">
<link href="{{ asset('css/chairhome/bootstrap-responsivee.min.css') }}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{ asset('css/chairhome/font-awesomee.css') }}" rel="stylesheet">
<link href="{{  asset('css/chairhome/homestyle.css') }}" rel="stylesheet">
<link href="{{  asset('css/chairhome/dash.css') }}" rel="stylesheet">

    
</head>
<body>

   
<div class="container">
    <!-- Site Logo -->
    
    <!-- responsive -->
    <div class="nav-switch">
      <i class="fa fa-bars"></i>
    </div>
    {{-- <h1>{{ Request::is('/')? "Home":"Not Home" }}</h1> --}}

    <ul class="main-menu">
    
     
      @auth
      
      <li class="logout-style"><a class="logout-style" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a></li>
  
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @else
      <li class="login-style"><a href="/login">Sign In</a></li>
      @endauth
    </ul>
  </div> 
      <div class="widget">
            
        
            </div>
			    

          <div class="widget">
            <div class="widget-header">
              <h1 align="center">ADMIN DASHBOARD</h1>
            </div>
			
        
            </div>
       <div class="widget">
            
        
            </div>

  <div class="widget">
            
        
            </div>
			  <div class="widget">
            
        
            </div>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> 
              <h3>Stats</h3>
            </div>
            
			
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats">Weclome Admin</h6>
                  <div id="big_stats" class="cf">
                    <div class="stat"> <h6>Total Users</h6></i> <span class="value">{{ Patient::count() }}</span> </div>
                  
                    <div class="stat"> <h6>Orders</h6></i> <span class="value">{{ Order::count() }}</span> </div>
                    <div class="stat"><h6>Doctors</h6> <span class="value">{{ Doctor::count() }}</span> </div>
                    <div class="stat"><h6>Appointments</h6> <span class="value">{{ Booking::count() }}</span> </div>
             
                            
                  </div>
                </div>
        
                
              </div>
            </div>
          </div>

         
          
          
      
        </div>
        
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> 
              <h3>Important Shortcuts</h3>
            </div>
            
			
			 <div class="widget-content">
              <div class="shortcuts"> <a href="/home_prescription" class="shortcut"><img src="img/newspaper.png">
                                             <span class="shortcut-label">Prescriptions</span>
											  <a href="/home_treat" class="shortcut"><img src="img/newspaper.png">
                                             <span class="shortcut-label">Treatment Records</span> 
											 </a><a href="/order-admindash" class="shortcut"><img src="img/adminshopping.png"> <span class="shortcut-label">Orders</span> </a><a href="/patients/all" class="shortcut"><img src="img/newspaper.png"><span
                                                class="shortcut-label">Booking Records</span> <a href="/appointment/create" class="shortcut"><img src="img/newspaper.png">
                                             <span class="shortcut-label">Appointments</span> <a href="/doctor" class="shortcut"><img src="img/newspaper.png">
                                             <span class="shortcut-label">Doctor Details</span>
								    </div>
											 
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
			
			
			
			
            

         
          
          
            
          </div>

        </div>
       
      </div>
     
    </div>
    
  </div>
  



</body>
</html>
