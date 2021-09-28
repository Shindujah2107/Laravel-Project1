@extends('backend.lay')

@section('title', 'Record Management')
  
<link rel="stylesheet" href={{ url('css/product/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}>
<link rel="stylesheet" href={{ url('css/product/assets/css/style.css') }}>

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-6">
      <form class="form-horizontal" method="POST" action="{{ url('/insert_treatment') }}" enctype="multipart/form-data">
       {{ csrf_field() }}
       
         <fieldset>
           <legend>Treatment Record</legend>
            @if (count($errors)>0)
                @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">
                      {{ $error }}
                  </div>    
                @endforeach
            @endif
            <div class="form-group">
                <label>Doctor_ID:</label>
                <input type="string" class="form-control" id="did" name="doctor_id" placeholder="Enter Doctor_id">
              </div>
   
           
           <div class="form-group">
             <label>Patient_ID:</label>
             <input type="string" class="form-control" id="pid" name="patient_id" placeholder="Enter Patient_id">
           </div>
            
           <div class="form-group">
             <label>Full Name</label>
             <input type="string" class="form-control" id="fname" name="fullname" placeholder="Enter Full Name">
           </div>

           <div class="form-group">
             <label>NIC NO</label>
             <input type="string" class="form-control" id="nic" name="nic" placeholder="Enter NIC No">
           </div>

            <div class="form-group">
            <label>DATE</label>
             <input type="date" id="a" class="form-control-file" name="date" value="" required>
           </div>

           <div class="form-group">
            <label>Note on patient:</label>
            <textarea class="form-control" id="Description" name="description" rows="3"></textarea>
           </div>

           <button type="submit" class="btn btn-primary">Submit</button>
           <button type="reset" class="btn btn-primary">Cancel</button>
           <a href="{{ url('/home_treat') }}" class="btn btn-primary">Back</a>
         </fieldset>
       </form>
       <button type="button" onclick="myFunction()" class="btn-btn-primary">Demo</button>
       <script>
         function myFunction(){
         document.getElementById("a").value = "2019-10-16";
         document.getElementById("Description").value = "good improvement";
         }

       </script>
      </div>
    </div>
  </div>

@endsection