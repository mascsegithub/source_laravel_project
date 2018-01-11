@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">
        <h1>Email Form</h1>
        <form enctype="multipart/form-data" method="post" action="{{url('/establishcontact')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email address">
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" name="subject" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter subject">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Massage</label>
                <textarea class="form-control" name="promotiontext" rows="5" id="comment"></textarea>
            </div>
            <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
        </form>
    </div>   
</div>
@endsection








