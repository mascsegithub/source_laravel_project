@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Slider List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title </th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action | <a class="btn btn-primary"  href='{{url("/admin")}}'>Add New Slider</a></th>
                </tr>
            </thead>
            <tbody>
                @if(count($userimage)>0)
                @foreach($userimage->all() as $image) 
                <tr>
                    <td> {{$image->slidertitle}}</td>
                    <td>{{$image->sliderdescription}}</td>
                    <td><img src="http://localhost/lvp/storage/app/upload/images/{{$image->imagename}}" height="100" width="80"></td>
                    <td>
                        <a class="btn btn-primary" href='{{url("/update/{$image->id}")}}'>Edit</a>
                        <a class="btn btn-danger" onclick="return myFunction()" href='{{url("/delete/{$image->id}")}}'>Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <!-- <form enctype="multipart/form-data" method="post" action="{{url('/upload')}}">
             {{ csrf_field() }}
             <div class="form-group">
                 <label for="imageInput">Upload a image</label>
                 <input  type="file" name="image"  id="image">
             </div>
             <div class="form-group">
                 <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit">Upload</button>
             </div>
         </form>-->
    </div>
</div>
<script>
    function myFunction() {
        var x;
        var r = confirm("Are you want to delete??");
        if (r == true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
</script>
@endsection




