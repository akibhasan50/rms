@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-10 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 ">
            <h2 class="my-2">Add Employe</h2>
          <form class="my-3" method="POST" action="{{route('employe.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="">Upload Exel file</label>
                  <input type="file" class="form-control" name="file"  placeholder="" aria-describedby="fileHelpId">
                
                </div>
                 @if ($errors->any())
                      @foreach ($errors->all() as $error)
                          <div class="text-danger">{{$error}}</div>
                      @endforeach
              
          @endif
            <button type="submit" class="btn btn-primary mx-2"> Insert</button>
          </form>

          </div>
        
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection