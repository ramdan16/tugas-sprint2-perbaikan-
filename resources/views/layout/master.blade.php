<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CrafTable</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css">
	
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Craftable</a>
			</div>
			<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i></a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-check-square"></i>Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
			{{-- <div class="collapse navbar-collapse" id="bs-example-navbar-colappse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ route('login') }}" class="scrol"><i class="fa fa-user"></i></a></li>
					<li><a href="/" class="scrol"><i class="fa fa-sign-out"></i></a></li>
					<li><a href="" class="scrol"><i class="fa fa-menu"></i></a></li>
				</ul>
			</div> --}}
		</nav>
		<aside class="sidebar">
			<div class="menu">
				<ul class="menu-content">
					<li><a href="/blogy"><i class="fa fa-home"></i>HOME</a>
					</li>
					<li><a href="/blogy"><i class="fa fa-cube"></i><span>Suppliers</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul>
							<li><a href=""></a>Merk</li>
							<li><a href=""></a>product</li>
							<li><a href=""></a>data</li>
						</ul>
					</li>
					<li><a href=""><i class="fa fa-tag"></i><span>Produk</span></a></li>

				</div>
			</aside>

			<section class="content">
				<section class="tols">
					<div class="row">
						<div class="col-md-6" id="left">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="#about" class="scrol"><i class="fa fa-file"></i></a></li><br>
								<li>
									<form class="form-inline my-2 my-lg-0">
										<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
										<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
									</form>
								</li>
							</ul>
						</div>
						<div class="col-md-6" id="right">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="/blogy/create" class="plus">New Supllier
										<i class="fa fa-plus"></i>
									</a>
								</li><br>
							</ul>
							
						</div>
					</section>
					<div class="inner">
						@yield('content')
					</div>
				</section>
				<section class="before">
					
					<div class="col-md-4">
						<a href="https://www.facebook.com/ramdan.n.waratsoe"><i class="fa fa-facebook" style="padding: 10px;"></i>
						</a><br>
						<a href="#"><i class="fa fa-twitter"></i>
						</a><br>
						<a href="#"><i class="fa fa-instagram"></i>
						</a>
					</div>
					<div class="col-md-4"><img src="/img/map.png" alt="">
					</div>
					<div class="col-md-4">
						<i class="fa fa-map-marker"></i>Jln.Arief Rahman N0.16<br>
						<i class="fa fa-phone"></i>+623817063731<br>
						<i class="fa fa-globe"></i>www.CrafTable.com
					</div>
				</section>
<div class="footer">
   <h3 class="text-center">Copyright @ CrafTable 2018</h3>
</div>


  
   <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>