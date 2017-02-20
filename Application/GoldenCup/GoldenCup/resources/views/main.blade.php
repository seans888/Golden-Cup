<!DOCTYPE html>
<html lang="en">

@include('partials._head')
<body>

@include('partials._nav')

<!-- Page Content -->
<div class="container">


@yield('content')
@include('partials._footer')

</div>
<!-- /.container -->
@include('partials._javascripts')


</body>

</html>
