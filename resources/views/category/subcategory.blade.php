@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">
        <h1>Sub Category Form</h1>
        <form enctype="multipart/form-data" method="post" action="{{url('/createsubcategory')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>

                <select class="form-control" name="categoryname" id="categoryid">
                    @foreach($Categorylist->all() as $clist) 
                    <option value="{{$clist->categoryid}}">{{$clist->categoryname}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Sub Category Name</label>
                <input type="text" name="subcategoryname" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Sub Category Name">
            </div>
            <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
        </form>
    </div>
    <div class="row">
        <h1>Sub Category List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Sub Category Name</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($SubCategorylist)>0)
                @foreach($SubCategorylist->all() as $sclist) 
                <tr>
                    <td>{{$sclist->id}}</td>
                    <td>{{$sclist->subcategoryname}}</td>  
                    <td>{{$sclist->categoryname}}</td>                 
                    <td>
                        <a class="btn btn-primary" href='{{url("/update/{$sclist->id}")}}'>Edit</a>
                        <a class="btn btn-danger" onclick="return myFunction()" href='{{url("/delete/{$sclist->id}")}}'>Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection





