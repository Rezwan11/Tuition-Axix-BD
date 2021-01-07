@extends('admin.master')



@section('content')
	       
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 ">Book Flight</h1>
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
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Book Flight Details</h6>
            </div>
            <div class="card-body">

          
              <div class="mb-4">
                <h3>Flight Info</h3>
              </div>

              <div class="table-responsive">
               <table class="table table-borderless">
                  
                  <tbody>

                    <tr>
                      <th scope="row">Flight Type </th>
                      <td>{{$flights->flight_type}}</td>
                    </tr>
                     <tr>
                      <th scope="row">Date </th>
                      <td>{{$flights->date}}</td>
                    </tr>
                     <tr>
                      <th scope="row">From </th>
                      <td>{{$flights->from_country}}</td>
                    </tr>
                     <tr>
                      <th scope="row">to </th>
                      <td>{{$flights->to_country}}</td>
                    </tr>
                     <tr>
                      <th scope="row">Person </th>
                      <td>{{$flights->person}}</td>
                    </tr>
                     <tr>
                      <th scope="row">Class </th>
                      <td>{{$flights->class}}</td>
                    </tr>
                     <tr>
                      <th scope="row">Price </th>
                      <td>{{$flights->price}} Tk.</td>
                    </tr>

                    
                  </tbody>
                </table>


              <div class="mb-4">
                <a href="{{ url('admin/user/details/'.$flights->user_id) }}"  class="btn btn-outline-info">Book User Info</a>
                 
              </div>  

            
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



@endsection

