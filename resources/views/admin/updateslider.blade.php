@extends('layouts.app')

@section('content')
<div class="container">
    <!--  <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>
  
                  <div class="panel-body">
                      @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                      @endif
                      @if(Auth::user()->name!=' ')
                      You are logged in as user named <strong>{{ Auth::user()->name }}</strong>
                      @endif
                  </div>
              </div>
          </div>
      </div>-->
    <div class="row">
        <h1>Slider Image Edit Form</h1>
        @foreach($userimage as $image) 
        <form enctype="multipart/form-data" method="post" action="{{url("/edited/{$image['id']}")}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Title</label>
                <input type="text" name="slidertitle" class="form-control" value="{{$image['slidertitle']}}" id="" aria-describedby="emailHelp" placeholder="Enter Slider Image Title">
               <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Description</label>
                <input type="text" value="{{$image['sliderdescription']}}" name="sliderdescription" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Slider Image Description">
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="form-group">
                <label for="imageInput">Upload Slider image</label>
                <img src="http://localhost/lvp/storage/app/upload/images/{{$image->imagename}}" height="80" width="60">
                <input  type="file" name="image"  id="image">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Image Order</label>
                <input type="text" name="sliderimageorder"  value="{{$image['sliderimageorder']}}"class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Slider Image Order">
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit">Upload</button>
        </form>
        @endforeach
    </div>

</div>
@endsection


