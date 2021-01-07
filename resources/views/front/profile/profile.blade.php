@extends('master')

@section('content')
<div class="container mt-100">
    <div class="row justify-content-center">
        <div class="col-md-10">


            <div class="card border-0 shadow-sm">
                <h3 class="card-header">{{ __('Profile') }}</h3>

                <div class="card-body">

                <table class="table table-borderless">
                     
                  <tbody>

                     <tr>
                          <th scope="row">Full Name</th>
                          <td>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</td>
                      </tr>
                       <tr>
                          <th scope="row">Phone</th>
                          <td>{{Auth::user()->phone}}</td>
                      </tr>
                      <tr>
                          <th scope="row">Email</th>
                          <td>{{Auth::user()->email}}</td>
                      </tr>
                      <tr>
                          <th scope="row">Address</th>
                          <td>{{Auth::user()->address}}</td>
                      </tr>
                      <tr>
                          <th scope="row">Gender</th>
                          <td>{{Auth::user()->gender}}</td>
                      </tr>
                      <tr>
                          <th scope="row">Birth Date</th>
                          <td>{{date('d/m/Y',strtotime(Auth::user()->birth_date))}}</td>
                      </tr>
                      <tr>
                          <th scope="row">Passport</th>
                          <td>{{Auth::user()->passport}}</td>
                      </tr>
                      
                      
                   </tbody>
                  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
