<!DOCTYPE html>
<html lang="en">
@include('partials.scripts')
<body data-spy="scroll" data-offset="0" data-target="#navigation">
<!-- Fixed navbar -->
@include('home.main')
<!-- carrousel, en este caso img del home de laradmin -->
@include('home.carousel')
@include('home.about')
<!-- FEATURES WRAP -->
@include('home.feactures')
@include('home.contact')
@include('home.footer')





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
