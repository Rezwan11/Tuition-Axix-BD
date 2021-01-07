@extends('master')


@section('content')
	
{{-- about section --}}
<div class="container mt-100 about-section">
	<div class="text-center mb-5">
        <h1>Search Result</h1>
  </div>


  @if ($flights)
  <h4 class="text-success text-center mb-5">Congrats your requested flight seat available!.</h4>

  <div class="col-md-7 mx-auto">
     <div class="card">
       <div class="card-body">
         <table class="table table-borderless">
        <tbody>
          <tr>
            <th>Date</th>
            <td>:</td>
            <td>{{$dt}}</td>
          </tr>
          <tr>
            <th>Flight Type</th>
            <td>:</td>
            <td>{{$ft}}</td>
          </tr>
          <tr>
            <th>From </th>
            <td>:</td>
            <td>{{$fc}}</td>
          </tr>
          <tr>
            <th>To </th>
            <td>:</td>
            <td>{{$tc}}</td>
          </tr>
          <tr>
            <th>Person </th>
            <td>:</td>
            <td>{{$psn}}</td>
          </tr>
          <tr>
            <th>Class </th>
            <td>:</td>
            <td>{{$cls}}</td>
          </tr>
          <tr>
            <th>Price </th>
            <td>:</td>
            <td>
              @if ($cls=="Business")
               {{$flights->business_price*$psn}} Tk.

               @php
                 $price=$flights->business_price*$psn;
               @endphp

               @else

                {{$flights->regular_price*$psn}} Tk.

                @php
                 $price=$flights->regular_price*$psn;
                @endphp

              @endif
              
            </td>
          </tr>
        </tbody>
      </table>



        <form action="{{ url('flight-book') }}" method="post">

          @csrf
          
          <input type="hidden"   name="flight_id" value="{{$flights->id}}">
          <input type="hidden"   name="flight_type_id" value="{{$ft_id}}">
          <input type="hidden"   name="flight_type" value="{{$ft}}">
          <input type="hidden"   name="date" value="{{$dt}}">
          <input type="hidden"   name="from_country" value="{{$fc}}">
          <input type="hidden"   name="to_country" value="{{$tc}}">
          <input type="hidden"   name="date" value="{{$dt}}">
          <input type="hidden"   name="class" value="{{$cls}}">
          <input type="hidden"   name="person" value="{{$psn}}">
          <input type="hidden"   name="price" value="{{$price}}">

          <button class="btn btn-primary mt-4" type="submit">Book Now</button>

        </form>



       </div>
     </div> 
  </div>


    @else

      <h4 class="text-danger">Your requested flight seat not available!.</h4>
  @endif



  

  
        
   </div>
</div>
@endsection