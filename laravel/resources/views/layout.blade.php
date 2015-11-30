<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>UWorks</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/F
		bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
	<link href="assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->

	<link href="assets/css/widgets.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
	<link href="assets/css/xcharts.min.css" rel=" stylesheet">
	<link href="assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">


      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="principal" class="logo">U <span class="lite">Works</span></a>
            <!--logo end-->


            <div class="top-nav notification-row">

                    <!-- user login dropdown start-->
										<ul class="nav navbar-nav navbar-right">
												@if (Auth::guest())
															<li><a href="{{ route('home') }}">Login</a></li>
															<li><a href="{{ route('register') }}">Register</a></li>
												@else
															<li class="dropdown">
																			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span>
																				<span class="profile-ava">
						                                <img alt="" src="img/avatar1_small.png">
						                            </span>
																			</a>
																				<ul class="dropdown-menu extended logout">
																						<div class="log-arrow-up"></div>
																						<li class="eborder-top">
																								<a href="#"><i class="icon_profile"></i> My Profile</a>
																						</li>
																						<li>
																								<a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
																						</li>
																						<li>
																								<a href="#"><i class="icon_chat_alt"></i> Chats</a>
																						</li>
																						<li>
																								<a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Log Out</a>
																						</li>
																				</ul>
															</li>
											 @endif
										</ul>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="principal">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="{{ route('myfiles') }}" class="">
                          <i class="icon_document_alt"></i>
                          <span>Documentos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table">Basic Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('parciales') }}" class="">
                          <i class="icon_desktop"></i>
                          <span>Parciales</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                         <li><a class="" href="basic_table.html">project</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                       <a href="{{ route('mylibros') }}" class="">
                          <i class="icon_genius"></i>
                          <span>Libros</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                         <li><a class="" href="basic_table.html">libros</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="profile">
                          <i class="icon_documents_alt"></i>
                          <span>Profile</span>

                      </a>

                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>
