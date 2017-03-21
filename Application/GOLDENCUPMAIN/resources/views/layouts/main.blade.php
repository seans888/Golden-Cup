<!doctype html>
<html class="no-js" lang="en" dir="ltr">

@include('partials.head')
<body>
@include('partials.nav')


<div class="container">
<div class="bcontainer">
@yield('content')


@include('partials.footer')
</div>
</div>

@include('partials.javascripts')
</body>
</html>
