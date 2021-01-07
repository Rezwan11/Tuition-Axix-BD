@extends('admin.master')



@section('content')
	       
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 ">Events</h1>
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
              <h6 class="font-weight-bold text-primary">Event Details </h6>
            </div>
            <div class="card-body">

              <h3 class="mb-4">{{$event->title}}</h3>
              <img src="{{ asset('uploads/event/'.$event->thumnail) }}" class="rounded w-50" alt="">

              <p class="mt-5 w-50">
                {!!nl2br($event->description)!!}
              </p>


           
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



@endsection

