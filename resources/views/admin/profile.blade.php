@extends('admin.master')



@section('content')
	       
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 ">Profile</h1>
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
             <table class="table table-borderless">
                     
                  <tbody>

                     <tr>
                          <th scope="row">Name</th>
                          <td>{{Auth::user()->name}}</td>
                      </tr>
                       <tr>
                          <th scope="row">Phone</th>
                          <td>{{Auth::user()->phone}}</td>
                      </tr>
                      <tr>
                          <th scope="row">Email</th>
                          <td>{{Auth::user()->email}}</td>
                      </tr>
                      <tr>
                          <th scope="row">Address</th>
                          <td>{{Auth::user()->address}}</td>
                      </tr>
                      
                      
                   </tbody>
                  </table>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



@endsection

