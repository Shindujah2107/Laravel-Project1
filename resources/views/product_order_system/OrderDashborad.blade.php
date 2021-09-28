@extends('main.layout.mainlayout')


@section('title', 'Order Dashboard')

@section('styles')

<script src="https://unpkg.com/vue-html-to-paper/build/vue-html-to-paper.js"></script>
<script src="{{ asset('js/order_management_script.js') }}"></script>



<link rel="stylesheet" href="{{ asset('css/order_system_css/orderStylesheet.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('content')






<!--Table and operation field -->
<div class="card mb-3" id="tablebackground"
  style="padding: 15px;margin: 15px;border-radius: 10px;box-shadow: 0 0 9px 0px #b1aeae;">
  <div class="card-header">

    <a href="order-admindash">
      <p class="h4"> Order details </p>
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive" id="tableplane" style="border-radius: 10px;">
      <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <!--Add button -->
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div id="dataTable_filter" class="dataTables_filter ">
            <br>
            <form action="order-admindash" method="POST">
              {{ csrf_field() }}
              <div class="form-row align-items-center">
                <div class="col-auto my-1">
                  <div class="custom-control custom-checkbox mr-sm-2">

                    <input type="search" name="dashsearchtxt" placeholder="search heare" class="form-control mx-sm-3"
                      required>

                  </div>
                </div>

                <div class="col-auto my-1">
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                  <select class="custom-select mr-sm-2" name="dashsearchtype">
                    <option value="orders.order_id">Order id</option>
                    <option value="orders.patient_id">Patient id</option>
                    <option value="patients.fullname">User name</option>
                    <option value="order_product.product_id">Product id</option>
                    <option value="products.name">Product name</option>
                    <option value="orders.date">Date</option>
                    <option value="orders.status">Status</option>
                  </select>
                </div>

                <div class="col-auto my-1">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>


            </form>

          </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row" id="app">
        <div class="col-sm-12"  id="printContainer">
          <table class="table table-bordered table-sm table-hover dataTable" id="dataTable" width="100%" cellspacing="0"
            role="grid" aria-describedby="dataTable_info" style="width: 100%; size:15px;">
            <thead>
              <tr role="row">
                <th class="table-active sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 109px;">
                  Order id</th>
                <th class="table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Position: activate to sort column ascending" style="width: 105px;">Patient id</th>
                  <th class="table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Position: activate to sort column ascending" style="width: 105px;">Patient name</th>
                  <th class="table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Position: activate to sort column ascending" style="width: 105px;">Product Name</th>
                <th class="table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Salary: activate to sort column ascending" style="width: 115px;">Product id</th>
                <th class="table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Office: activate to sort column ascending" style="width: 115px;">Date</th>
                <th class="table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Office: activate to sort column ascending" style="width: 80px;">Quntity</th>
                <th class=" table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Age: activate to sort column ascending" style="width: 71px;">Payamet</th>
                <th class="table-active sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                  aria-label="Start date: activate to sort column ascending" style="width: 151px;">Status</th>


              </tr>
            </thead>

            <tbody>
              <!--loop is start-->
              @if (count($order)<1) <td class="sorting_1">Nothing to show</td>
                <td>Nothing to show</td>
                <td>Nothing to show</td>
                <td>Nothing to show</td>
                <td>Nothing to show</td>
                <td>Nothing to show</td>
                <td>Nothing to show</td>
                <td>Nothing to show</td>
                <td>Nothing to show</td>


                @else
                <h3>Order Dashbord</h3>
             

                <br>
                @foreach ($order as $key=> $orderrow)

             <div id="printContainer_row">

                <tr role="row" class="odd">
                  <td class="sorting_1" >{{$orderrow->order_id}}</td>
                  <td >{{$orderrow->patient_id}}</td>
                  <td >{{$orderrow->fullname}}</td>
                  <td>{{$orderrow->name}}</td>
                  <td>{{$orderrow->product_id}}</td>

                  <td>{{$orderrow->date}}</td>
                  <td>{{$orderrow->quantity}}</td>
                  <td>{{$orderrow->total_payment}}</td>

                  <input id="order_id" value="{{$orderrow->order_id}}" hidden>
                  <input id="product_id" value="{{$orderrow->product_id}}" hidden>
                  <input id="product_date" value="{{$orderrow->date}}" hidden>
                  <input id="product_quantity" value="{{$orderrow->quantity}}" hidden>
                  <input id="product_total_payment" value="{{$orderrow->total_payment}}" hidden>


             </form>
                </div>
                  @if (($orderrow->status)=='shiped')
                  <td>
                    <div class="badge badge-success text-wrap" style="width: 6rem;">
                      {{$orderrow->status}}
                    </div>
                  </td>
                  @else
                  <td>

                    <form action="admindash_status" method="POST" class="form-inline">
                      <div class="input-group mb-2">
                            @if (($orderrow->status)=='waiting')
                        <div class="badge badge-primary text-wrap" style="width: 6rem;">
                          <p> {{$orderrow->status}} </p>
                        </div>
                            @else
                            <div class="badge badge-warning text-wrap" style="width: 6rem;">
                                    <p> {{$orderrow->status}} </p>
                                  </div>
                            @endif
                        {{ csrf_field() }}
                        <input type="text" name="order_id" value="{{$orderrow->order_id}}" hidden>
                        <select name="admindash_status" class="custom-select mr-sm-1" style=" width: 29%; ">
                          <option value="ready">ready</option>
                          <option value="shiped">shiped</option>
                          <option value="waiting">waiting</option>
                        </select>
                        <button type="submit" type="button" class="btn btn-primary">Update</button>
                      </div>
                    </form>

                  </td>
                  @endif

                  <div>

                </tr>
                <div>
                @endforeach

                @endif



            </tbody>
          </table>
          <script>
                var d = new Date();
                document.getElementById("demo").innerHTML = d;
        </script>

        </div>
        
    </div>
  </div>
</div>
</div>
</div>
< </div> @endsection
