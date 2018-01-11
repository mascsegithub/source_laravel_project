@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
        <div class="row">
            <form enctype="multipart/form-data" method="post" action="{{url('/upload')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="imageInput">Upload a image</label>
                    <input  type="file" name="image"  id="image">
                </div>
                <div class="form-group">
                    <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
