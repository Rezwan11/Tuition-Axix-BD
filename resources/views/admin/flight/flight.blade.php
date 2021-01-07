@extends('admin.master')



@section('content')
	       
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 ">Flights</h1>
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
         
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Flights List</h6>
              <a href="{{ url('admin/add-flight') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Flight</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Flight Type</th>
                      <th>From Country</th>
                      <th>To Country</th>
                      <th>Date</th>
                      <th>Business Seat</th>
                      <th>Regular Seat</th>
                      <th>Business Price</th>
                      <th>Regular Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Flight Type</th>
                      <th>From Country</th>
                      <th>To Country</th>
                      <th>Date</th>
                      <th>Business Seat</th>
                      <th>Regular Seat</th>
                      <th>Business Price</th>
                      <th>Regular Price</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach ($flights as $fight)
                    <tr>
                      <td>{{$fight->flight_type}}</td>
                      <td>{{$fight->from_country}}</td>
                      <td>{{$fight->to_country}}</td>
                      <td>
                       {{date('d/m/Y',strtotime($fight->date))}}
                      </td>
                     
                      <td>{{$fight->business_seat}}</td>
                      <td>{{$fight->regular_seat}}</td>
                      <td>{{$fight->business_price}} Tk.</td>
                      <td>{{$fight->regular_price}} Tk.</td>
                      
                      <td>
                        <a href="{{ url('admin/flight-seat-edit/'.$fight->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="{{ url('admin/flight-delete/'.$fight->id) }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



@endsection

