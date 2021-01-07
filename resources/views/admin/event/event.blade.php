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
            <div class="card-header py-3 d-flex justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Events List</h6>
              <a href="{{ url('admin/add-event') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Event</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Event Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Event Date</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach ($events as $event)
                    <tr>
                      <td><img src="{{ asset('uploads/event/'.$event->thumnail) }}" width="80" class="rounded" alt=""></td>
                      <td>{{$event->title}}</td>
                      <td>{{date('d/m/Y',strtotime($event->event_date))}}</td>
                      <td>
                        <a href="{{ url('admin/event/details/'.$event->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/event/edit/'.$event->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="{{ url('admin/event/delete/'.$event->id) }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
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

