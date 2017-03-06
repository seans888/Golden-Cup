<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top role=navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src = "/images/gc-g2.png" height = 150% style="margin-top:-5px"></img></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li class=""><a href="/about">About us <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/copiers">Copiers</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/parts">Parts & Supplies</a></li>

                    </ul>
                </li>



            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#">Link</a></li>-->
                @if (Auth::check())
                
                    <li><a href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
   Shopping Cart</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>    Hello, {{ Auth::user()->first_name . ' '  . Auth::user()->last_name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Account Settings</a></li>
                        <!--<li role="separator" class="divider"></li>-->
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>

                    @else

                        <a href="{{ route('login') }}" class="btn btn-link"> Login</a>
                           or
                        <a href="{{ route('register') }}" class="btn btn-link"> Create an account</a>
                    @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>