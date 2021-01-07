@extends('admin.master')



@section('content')
	       
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 ">Flight Type</h1>
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
            <div class="card-header">
              <h6 class="font-weight-bold text-primary">Add Fight Type </h6>
            </div>
            <div class="card-body">

               <div class="col-md-6">
                 <form class="user" action="{{ url('admin/add-flight-type') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Flight Type</label>
                      <input type="text" class="form-control form-control-user @error('flight_type') is-invalid @enderror" name="flight_type"  value="{{ old('flight_type') }}"  placeholder="Enter flight type ...">
                      @error('flight_type')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      <i class="fa fa-plus"></i> Add 
                    </button>
                   
                  </form>

           
               </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



@endsection

