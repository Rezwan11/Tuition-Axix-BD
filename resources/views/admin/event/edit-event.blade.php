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
              <h6 class="font-weight-bold text-primary">Update Event </h6>
            </div>
            <div class="card-body">

               <div class="col-md-6">
                 <form class="user" action="{{ url('admin/update-event') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" class="form-control form-control-user @error('title') is-invalid @enderror" name="title" id="exampleInputtitle" value="{{ $event->title }}" aria-describedby="titleHelp" placeholder="Enter title ...">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                     <div class="form-group">
                      <label for="">Event Date</label>
                      <input type="date" class="form-control form-control-user @error('event_date') is-invalid @enderror" name="event_date" id="exampleInputevent_date" value="{{ $event->event_date }}" aria-describedby="event_dateHelp" placeholder="Enter event_date ...">
                      @error('event_date')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                     <div class="form-group">
                    
                      <label for="">Thumnail</label><br>
                     
                      <input type="file" class="@error('thumnail') is-invalid @enderror" name="thumnail" >
                      @error('thumnail')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <div class="mt-4">
                        <img src="{{ url('uploads/event/'.$event->thumnail) }}" width="150" class="rounded" alt="">
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" id="" cols="30" class="form-control  @error('description') is-invalid @enderror" rows="10">{!! $event->description !!}</textarea>
                      @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                    <input type="hidden" name="event_id" value="{{$event->id}}">
                 
                 
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      <i class="fa fa-plus"></i> Update Event
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

