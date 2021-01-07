@extends('master')

@section('content')
<div class="container mt-100">




    <div class="row justify-content-center">
        <div class="col-md-12">

          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>{{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          @endif

  
            <div class="card border-0 shadow-sm">
                <h3 class="card-header">
                  {{ __('My Flights') }}


                  <a href="{{ url('/') }}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Book Flight</a>

                </h3>

                <div class="card-body p-0">
                 

                  <table class="table">
                    <thead class="">
                      <tr>
                        <th scope="col">Flight Type</th>
                        <th scope="col">Date</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Person</th>
                        <th scope="col">Class</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($myflights as $myflight)
                      <tr>
                       <td>{{$myflight->flight_type}}</td>
                       <td>{{$myflight->date}}</td>
                       <td>{{$myflight->from_country}}</td>
                       <td>{{$myflight->to_country}}</td>
                       <td>{{$myflight->person}}</td>
                       <td>{{$myflight->class}}</td>
                       <td>{{$myflight->price}}</td>
                       <td>
                        @if ($myflight->staus==1)
                          <span class="badge badge-success">Booked</span>
                          @else
                          <span class="badge badge-danger">Pending</span>
                        @endif
                       </td>
                      </tr>
                      @endforeach                        
                    </tbody>
                  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
