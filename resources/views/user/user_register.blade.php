@extends('master.index')

@section('content')
<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-3 col-sm-5">
                <h4 class="font-alt">Register Here</h4>
                <hr class="divider-w mb-10">
                <form class="form" method="post" action="{{ url('/submit_register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" id="full_name" type="text" name="visitor_name" placeholder="Full Name" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="visitor_email" type="email" name="visitor_email" placeholder="Email" required/>
                        <span class="font-alt help-block" style="color:red;" id="email_check"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="re_email" type="email" name="re_email" placeholder="Re-enter Email" required/>
                        <span class="font-alt help-block" style="color:red;" id="re_email_check"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="phone" type="number" name="visitor_phone" placeholder="Mobile No." required/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="address" type="text" name="visitor_address" placeholder="Address" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn" id="check" class="btn btn-block btn-round btn-b">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


