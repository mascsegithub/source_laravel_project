@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">
        <h1>Product Upload Form</h1>
        <form enctype="multipart/form-data" method="post" action="{{url('/createsproduct')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="productname" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Sub Category Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <select class="form-control" name="categoryname" id="category">
                    @foreach($Categorylist as $clist) 
                    <option value="{{$clist->categoryid}}">{{$clist->categoryname}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Sub Category Name</label>
                <select class="form-control" id="prosubcategory" name="subcategoryname" >

                </select>
            </div>
            <div class="form-group">
                <label for="imageInput">Upload Product image</label>
                <input  type="file" name="image"  id="image">
            </div>
            <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
        </form>
    </div>
    <div class="row">
        <h1>Product List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Product Name</th>
                    <th>Category Name</th>
                    <th>Sub Category Name</th>
                    <th>Product Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product_list as $plist) 
                <tr>
                    <td>{{$plist->productid}}</td>
                    <td>{{$plist->productname}}</td>
                    <td>{{$plist->categoryname}}</td>  
                    <td>{{$plist->subcategoryname}}</td>  
                    <td><img src="http://localhost/lvp/storage/app/upload/product/{{$plist->productimage}}" height="100" width="80"></td> 
                    <td>
                        <a class="btn btn-primary" href='{{url("/update/{$plist->productid}")}}'>Edit</a>
                        <a class="btn btn-danger" onclick="return myFunction()" href='{{url("/delete/{$plist->productid}")}}'>Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
                            $(document).ready(function () {
                                $('#category').on('change', function (e) {
                                    var id = e.target.value;
                                    var url_op = base_url + "/getSubCatByCate/" + id;
                                    $.ajax({
                                        url: url_op,
                                        type: 'GET',
                                        dataType: 'json',
                                        data: '',
                                        success: function (data)
                                        {
                                            $('#prosubcategory').empty();
                                            $.each(data, function (index, subcatobj) {
                                                $('#prosubcategory').append('<option value="' + subcatobj.id + '">' + subcatobj.subcategoryname + '</option>');
                                            });

                                        }
                                    });
                                });
                            });


</script>







