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
              <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach ($users as $user)
                    <tr>
                      <td>{{$user->first_name}} {{$user->last_name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->gender}}</td>
                      <td>
                        @if ($user->status==1)
                          <span class="badge badge-success">Verified</span>
                          @else
                          <span class="badge badge-danger">Not Verified</span>
                        @endif
                      </td>
                      <td>
                         @if ($user->status==0)
                        <a href="{{ url('admin/user/verify/'.$user->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-check"></i> Verify</a>
                        @endif
                        <a href="{{ url('admin/user/details/'.$user->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/user/delete/'.$user->id) }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
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

