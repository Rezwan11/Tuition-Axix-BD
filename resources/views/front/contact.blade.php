@extends('master')


@section('content')
	

<div class="container mt-100">
	<div class="row">
		<div class="col-md-7">

      @if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success! </strong>{{session('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif


         <h2>Contact Us</h2>

		<div class="card border-0 shadow-sm">
			<div class="card-body">
			<form action="{{url('contact')}}" method="post">
					@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name">
				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email">
				@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject" aria-describedby="subject">
				@error('subject')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea name="message" class="form-control  @error('message') is-invalid @enderror" id="" cols="30" rows="10"></textarea>
				@error('message')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			
			<button type="submit" class="btn btn-primary">Send Message</button>
		</form>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-4 mt-5">
		<div>
			<h4><i class="fa fa-phone text-primary"></i> Phone</h4>
			<p>014234234</p>
		</div>

		<div>
			<h4><i class="fa fa-envelope-o  text-primary"></i> Email</h4>
			<p>example@domain.com</p>
		</div>
		<div>
			<h4><i class="fa fa-map  text-primary"></i> Address</h4>
			<p>Dhanmondi,Dhaka</p>
		</div>
	</div>
	</div>
</div>



@endsection