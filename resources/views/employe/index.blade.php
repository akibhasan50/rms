@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-10 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 ">
            <h2 class="my-2">Search Employe</h2>
          <form class="form-inline my-3" method="POST" action="{{route('employe.search')}}">
            @csrf

            <div class="form-group mx-2">
             
              <input type="text" name="name" id="" class="form-control" placeholder="Enter name" aria-describedby="helpId">
            
              
            </div> 
           <strong>or</strong> 
            <div class="form-group mx-2">
            
              <input type="text" name="phone" id="" class="form-control" placeholder="Enter phone" aria-describedby="helpId">
           
            </div>
           <strong>or</strong> 
            <div class="form-group mx-2">
            
              <input type="text" name="address" id="" class="form-control" placeholder="Enter address" aria-describedby="helpId">
           
            </div>
            <button type="submit" class="btn btn-primary mx-2"> search</button>
          </form>

          @if ($errors->any())
          @foreach ($errors->all() as $error)
              <div class="text-danger">{{$error}}</div>
          @endforeach
              
          @endif
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
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection