@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-10 mb-4">
        <!-- Simple Tables -->
        <div class="card">

        @if ($employes->count() > 0)
        <div class="card-header py-3 ">
          <h2 class="my-2">Total {{$employes->count()}} Result found</h2>
          {{-- <strong class="text-info">{{$phone}}</strong> --}}
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
               
              </tr>
            </thead>
            <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($employes as $employe)
              @php
                $i++;
            @endphp
                 <tr>
                <td><a href="#">{{$i}}</a></td>
                  <td>{{$employe->name}}</td>
                  
                  <td>{{$employe->phone}}</td>
                  <td>{{$employe->address}}</td>
                 
               
              </tr>
            @endforeach
         
            </tbody>
               
          
          </table>
          
        </div>
    
        <div class="card-footer"></div>
        @else
            <div class="card text-white ">
            
              <div class="card-body text-center">
                <img class="card-img-top " src="{{asset('ui/img/no.jpg')}}" style="height:500px;width:500px">
              </div>
            </div>
        @endif
         
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection