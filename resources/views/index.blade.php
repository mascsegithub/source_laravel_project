@extends('master.index')

@section('content')
<section class="home-section home-full-height" id="home">
    <div class="hero-slider">
        <ul class="slides">
            <li class="bg-dark-30 restaurant-page-header bg-dark" style="background-image:url(&quot;{{asset('source/slider_image/slider3_1.jpg')}}&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"> Hello & welcome</div>
                        <div class="font-alt mb-40 titan-title-size-4">We are Sristi Real Estate</div><a class="section-scroll btn btn-border-w btn-round" href="#">Check Our Portfolio</a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark" style="background-image: url(&quot;{{asset('source/slider_image/slider2.jpg')}}&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-2">Sristi Real Estate is creative multipurpose<br>home buld who change the world</div><a class="btn btn-border-w btn-round" href="about_us.php">Discover our story</a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark" style="background-image:url(&quot;{{asset('source/slider_image/slider1.jpg')}}&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"> Take a look at</div>
                        <div class="font-alt mb-40 titan-title-size-3">our specialities</div><a class="section-scroll btn btn-border-w btn-round" href="#specialities">See More</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<div class="main">
    <section class="module" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">For your comfort</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt">Our Services</h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-clock"></span></div>
                        <h3 class="features-title font-alt">Attached / multi-unit dwellings</h3>An individual unit in a multi-unit building. The boundaries of the apartment are generally defined by a perimeter of locked or lockable doors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-streetsign"></span></div>
                        <h3 class="features-title font-alt">Chawls</h3>Residential real estate may contain either a single family or multifamily structure that is available for occupation or for non-business purposes
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-map"></span></div>
                        <h3 class="features-title font-alt">Villas</h3>Residential real estate may contain either a single family or multifamily structure that is available for occupation or for non-business purposes
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-heart"></span></div>
                        <h3 class="features-title font-alt">Havelis</h3>Residential real estate may contain either a single family or multifamily structure that is available for occupation or for non-business purposes.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module" id="specialities">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="alt-module-subtitle"><span class="holder-w"></span>
                        <h5 class="font-serif">Take a look at</h5><span class="holder-w"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt">Our Specialities</h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="{{asset('source/banner/special1.jpg')}}" alt="Kabab"/></div>
                        <h3 class="content-box-title font-serif">Attached / multi-unit dwellings</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="{{asset('source/banner/special2.jpg')}}" alt="Limes"/></div>
                        <h3 class="content-box-title font-serif">Chawls</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="{{asset('source/banner/special3.jpg')}}" alt="Radish"/></div>
                        <h3 class="content-box-title font-serif">Villas</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="content-box">
                        <div class="content-box-image"><img src="{{asset('source/banner/special4.jpg')}}" alt="Corn"/></div>
                        <h3 class="content-box-title font-serif">Havelis</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module module-video bg-dark-30" data-background="{{asset('source/images/restaurant/coffee_bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt mb-0">The Best Real State In Town. Enjoy Your Home</h2>
                </div>
            </div>
        </div>
        <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=OFNr_KX5rNo', containment:'.module-video', startAt:3, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
    </section>
    @endsection


