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
            <div class="card-header">
              <h6 class="font-weight-bold text-primary">Update Flight</h6>
            </div>
            <div class="card-body">

               <div class="col-md-6">
                 <form class="user" action="{{ url('admin/edit-flight') }}" method="post" enctype="multipart/form-data">
                    @csrf
               
                    <div class="form-group">
                      <label for="">Date</label>
                      <input type="date" class="form-control @error('date') is-invalid @enderror"  value="{{$flights->date}}"  name="date">

                      @error('date')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    
                    </div>

                    <div class="form-group">
                      <label for="">Business Seat</label>
                      <input type="text" value="{{$flights->business_seat}}" class="form-control @error('business_seat') is-invalid @enderror" placeholder="Enter business seat" name="business_seat">

                      @error('business_seat')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    
                    </div>

                    <div class="form-group">
                      <label for="">Regular Seat</label>
                      <input type="text" value="{{$flights->regular_seat}}" class="form-control @error('regular_seat') is-invalid @enderror" placeholder="Enter regular seat" name="regular_seat">

                      @error('regular_seat')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    
                    </div>


                     <div class="form-group">
                      <label for="">Business Price</label>
                      <input type="text" value="{{$flights->business_price}}" class="form-control @error('business_price') is-invalid @enderror" placeholder="Enter business price" name="business_price">

                      @error('business_price')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    
                    </div>

                    <div class="form-group">
                      <label for="">Regular Price</label>
                      <input type="text" value="{{$flights->regular_price}}" class="form-control @error('regular_price') is-invalid @enderror" placeholder="Enter regular price" name="regular_price">

                      @error('regular_price')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    
                    </div>

                    <input type="hidden" name="flight_id" value="{{$flights->id}}" >

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      <i class="fa fa-plus"></i> Update Flight
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

