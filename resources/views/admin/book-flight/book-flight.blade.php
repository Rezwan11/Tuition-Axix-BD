@extends('admin.master')



@section('content')
	       
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 "> Book Flight</h1>
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
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Flight Type</th>
                      <th>Date</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Flight Type</th>
                      <th>Date</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach ($flights as $flight)
                    <tr>
                      <td>{{$flight->flight_type}}</td>
                      <td>{{$flight->date}}</td>
                      <td>{{$flight->from_country}}</td>
                      <td>{{$flight->to_country}}</td>
                      <td>
                        @if ($flight->status==1)
                         <span class="text-success">Booked</span>
                         @else
                         <span class="text-danger">Pending</span>
                        @endif
                       
                      </td>
                     
                      <td>
                        @if ($flight->status==0)
                        <a href="{{ url('admin/flight-book-status/'.$flight->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-check"></i></a>
                        @endif
                        <a href="{{ url('admin/flight-book-details/'.$flight->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/flight-book-delete/'.$flight->id) }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
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

