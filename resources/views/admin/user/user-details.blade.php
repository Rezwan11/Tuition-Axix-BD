@extends('admin.master')



@section('content')
	       
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 ">Users</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Users Details</h6>
            </div>
            <div class="card-body">

              <div class="mb-4">
                <img src="{{ asset('uploads/profile/'.$user->profile_photo) }}" class="rounded-circle"  width="200" alt="">
              </div>

              <div class="table-responsive">
               <table class="table table-borderless">
                  
                  <tbody>

                    <tr>
                      <th scope="row">Full Name</th>
                      <td>{{$user->first_name}}  {{$user->last_name}}</td>
                    </tr>
                    
                    <tr>
                      <th scope="row">Email</th>
                      <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Phone</th>
                      <td>{{$user->phone}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Address</th>
                      <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Gender</th>
                      <td>{{$user->gender}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Birth Date</th>
                      <td>{{date('d/m/Y',strtotime($user->birth_date))}}</td>
                    </tr>
                    <tr>
                      <th scope="row">NID Number</th>
                      <td>{{$user->nid_number}}</td>
                    </tr>

                    <tr>
                      <th scope="row">NID Front Photo</th>
                      <td>
                        <img src="{{ asset('uploads/nid/'.$user->nid_front) }}" class="rounded" width="400" alt="">
                      </td>
                    </tr>

                     <tr>
                      <th scope="row">NID Front Back</th>
                      <td>
                        <img src="{{ asset('uploads/nid/'.$user->nid_back) }}" class="rounded" width="400" alt="">
                      </td>
                    </tr>






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

