@extends('main.layout.dashboardHeader')

@section('content')



<div class="wrapper ">
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    
    <div class="logo">
      
        Patient Dashboard
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
          <li class="nav-item  ">
              <a class="nav-link" href="{{'/'}}">
                <i class="material-icons">home</i>
                <p>Home</p>
              </a>
            </li>
        <li class="nav-item  ">
          <a class="nav-link" href="{{'/patient'}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link" href="#">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>
        {{-- <li class="nav-item ">
          <a class="nav-link" href="./tables.html">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
          </a>
        </li> --}}

        <li class="nav-item ">
          <a class="nav-link" href="/contact">
            <i class="material-icons">location_ons</i>
            <p>Contact us</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/feedback">
            <i class="material-icons">notifications</i>
            <p>Feedback</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="#pablo">User Profile</a>
        </div>
       
        <div class="collapse navbar-collapse justify-content-end">
          <form class="navbar-form">
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="material-icons">dashboard</i>
                <p class="d-lg-none d-md-block">
                  Stats
                </p>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="#">Profile</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input class="dropdown-item" type="submit" class="dropdown-item" value="Logout">
                  </form>

           
                {{-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a> --}}
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
              </div>
              <div class="card-body">
                <form action="/patient/{{ $result->patient_id }}" method="POST">
                  {{ csrf_field() }}
                  @method('PUT')
                  {{-- /about/{{ $result->id  }} --}}
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">User ID (disabled)</label>
                        <input type="text" class="form-control" value="{{ $result->patient_id }}" readonly>
                      </div>
                      {{-- {{ $result->id }} --}}
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" class="form-control" value="{{$result->username}}" readonly>
                      </div>
                    </div>
                    {{-- <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <a href="{{ route('password.request') }}" ><input type="text" name="password" class="form-control" value="click to change password" disabled style="color: blue"></a>
                      </div>
                    </div> --}}
                  </div>
                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Full Name</label>
                        <input name="fullname" type="text" name="fullname" class="form-control"
                          value="{{$result->fullname}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Address1</label>
                        <input type="text" name="address1" class="form-control" value="{{$result->address1}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Address2</label>
                        <input type="text" name="address2" class="form-control" value="{{$result->address2}}">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">City</label>
                        <input type="text" name="city" class="form-control" value="{{$result->city}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">NIC</label>
                        <input type="text" name="nic" class="form-control" value="{{$result->nic}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Phone No</label>
                        <input type="number" name="phone" class="form-control" value="{{$result->phone}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email Address</label>
                        <input name="email" type="email" class="form-control" value="{{$result->email}}" readonly>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                  <div class="clearfix"></div>
                </form>
              <button type="submit" class="btn btn-primary pull-right" onclick="reportgenerate()">Generate Report</button>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>

  </div>
</div>
<div class="fixed-plugin">
  <div class="dropdown show-dropdown">
    <a href="#" data-toggle="dropdown">
      <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
      <li class="header-title"> Sidebar Filters</li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger active-color">
          <div class="badge-colors ml-auto mr-auto">
            <span class="badge filter badge-purple" data-color="purple"></span>
            <span class="badge filter badge-azure" data-color="azure"></span>
            <span class="badge filter badge-green" data-color="green"></span>
            <span class="badge filter badge-warning" data-color="orange"></span>
            <span class="badge filter badge-danger" data-color="danger"></span>
            <span class="badge filter badge-rose active" data-color="rose"></span>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>

    </ul>
  </div>
</div>


@endsection