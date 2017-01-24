<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--nombre del sitio en el menu
            
            -->
            <a class="" href="#"><img src="" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">Iniciativa</a></li>
                <li><a href="#about" class="smoothScroll">Ediciones</a></li>
                <li><a href="#te" class="smoothScroll">Té Concierto</a></li>
                <li><a href="#contact" class="smoothScroll">Contacto</a></li>
            </ul>
            {{--
            {{asset('/la-assets/img/logo.png')}}
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
           --}}
        </div><!--/.nav-collapse -->
    </div>
</div>

{{--
home->iniciativa
about->ediciones
     ->te concierto
     ->un paso a la vez?
contact->contacto     


---}}