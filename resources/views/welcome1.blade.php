@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="/images/vector.jpg" class="img-fluid" style=" solid #ccc; height:10% width:80%;">
            
        </div>
        
        <div class="col-sm-6">
            <h2>BOOK YOUR COVID VACCINE APPOINTMENT!</h2>
            <p> Choose the date and time of your appointment and receive your confirmation email. It's that simple ! </p>
          <img src="/images/covid.png" class="img-fluid" style="solid #ccc; height:55%; width:100%;">
        </div>

        
    </div>
    <hr>
    <section class="">
        <form action="{{url('/appointment')}}" method="get">
            <div class="card">
                <div class="card-header">Find Available vaccination Date</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="datepicker" name="date">
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary">Find Available vaccination Date</button>
                        </div>

                    </div>
                </div>

            </div>
        </form>

        <div class="card mt-1">
            <div class="card-header"> Vaccine available today</div>
            <div class="card-body">

               <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                          
                            <th scope="col">Name</th>
                            <th scope="col">Vaccine</th>
							<th scope="col">Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($doctors as $doctor )

                        <tr>
                            <th scope="row">1</th>
                         
                            </td>
                            <td>{{$doctor->doctor->name}}</td>
                            <td> Astra Zeneca/Oxford</td>
                            <td>
                                <a href="{{route('create.appointment',[$doctor->user_id,$doctor->date])}}"> <button class="btn btn-success">Book Appointment</button>
                            </td>
                        </tr>
                        @empty
                        <td>No doctors available today</td>
                        @endforelse


                    </tbody>
                </table> 


            </div>

        </div>
</div>
</section>
</div>


@endsection