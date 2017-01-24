<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1>{{ LAConfigs::getByKey('sitename_part1') }} <b><a>{{ LAConfigs::getByKey('sitename_part2') }}</a></b></h1>
                <h3>{{ LAConfigs::getByKey('site_description') }}</h3>
                <h3><a href="{{ url('/login') }}" class="btn btn-lg btn-success">Get Started!</a></h3><br>
            </div>
            <div class="col-lg-2">
                <h5>Amazing Functionalitiessss</h5>
                <p>for Modern Admin Panels</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/la-assets/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="{{ asset('/la-assets/img/app-bg.png') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/la-assets/img/arrow2.png') }}">
                <h5>Completely Packaged...</h5>
                <p>for Future expantion of Modules</p>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->
