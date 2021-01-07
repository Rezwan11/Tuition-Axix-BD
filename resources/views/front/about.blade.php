@extends('master')


@section('content')
	
{{-- about section --}}
<div class="container mt-100 about-section">
	<div class="text-center mb-5">
        <h1>About Us</h1>
    </div>

   <div class="row">
       <div class="col-md-6">
           <img src="{{asset('assets/img/about.jpg')}}" class="w-100" alt="">
       </div>
        <div class="col-md-6">
            <h6>About</h6>
            <h3>Lorem Ipsum is simply dummy text of the printing</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>

            <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
           
       </div> 
   </div>

    <div class="row mt-100">
       
        <div class="col-md-6">
            <h6>Our Causes</h6>
            <h3>Lorem Ipsum is simply dummy text of the printing</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>

            <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
           
       </div> 
       <div class="col-md-6">
           <img src="{{asset('assets/img/causes.jpg')}}" class="w-100" alt="">
       </div>
   </div>

        
   </div>
</div>
@endsection