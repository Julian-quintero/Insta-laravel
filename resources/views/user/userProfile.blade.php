@extends('layouts.app')

@section('content')

<div class="card" style="width:100%">
<div class="d-flex justify-content-center"> 
    <div style="width:500px;height:500px" class="">
        <img class="img-thumbnail card-img-top img-fluid" src="{{route('user.avatar',['fileName'=>$image->user->image])}}" alt="Card image cap">
    </div>
    </div>

    
    <div class="card-body">

        <h2 class="card-title d-flex justify-content-center">{{Auth::user()->name}}</h2>



        <p class="card-text d-flex justify-content-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       
        <form method="POST" enctype="multipart/form-data" action="{{route('user.avatar.upload')}}">
        @csrf
            <div class="d-flex justify-content-center">


                <div class="col-md-6 ">
                    <input id="image_path" type="file" class="d-flex justify-content-center form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="image_path" required autofocus>

                    @if($errors->has('image_path'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image_path') }}</strong>
                    </span>
                    @endif
                </div>
                
            </div>
       
            <button type="submit" class="btn btn-primary ">
                    Guardar cambios
                </button>
         
            
        </form>
    </div>
</div>
@endsection