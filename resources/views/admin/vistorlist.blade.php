@extends('master.index')

@section('content')
<section class="module">
    <div class="container">
        <div class="row">
            <h1>Vistors List</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Visitor Name</th>
                        <th>Visitor Email</th>
                        <th>Visitor Phone</th>
                        <th>Visitor Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userlist as $ulist)
                    <tr>
                        <td>{{$ulist->user_id}}</td>
                        <td>{{$ulist->user_name}}</td>
                        <td>{{$ulist->user_email}}</td>
                        <td>{{$ulist->user_moble}}</td>  
                        <td>{{$ulist->user_address}}</td>  

                        <td>
                            <a class="btn btn-primary" href='{{url("/update/{$ulist->user_id}")}}'>Edit</a>
                            <a class="btn btn-danger" onclick="return myFunction()" href='{{url("/delete/{$ulist->user_id}")}}'>Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>
@endsection


