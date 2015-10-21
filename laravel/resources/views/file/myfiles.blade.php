@extends('layout')

@section('content')
<header class="header dark-bg">
      <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
      </div>

      <!--logo start-->
      <a href="principal.html" class="logo">Project <span class="lite">WEB 3</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
          <!--  search form start -->
          <ul class="nav top-menu">
              <li>
                  <form class="navbar-form">
                      <input class="form-control" placeholder="Search" type="text">
                  </form>
              </li>
          </ul>
          <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">

              <!-- inbox notificatoin start-->
              <li id="mail_notificatoin_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="icon-envelope-l"></i>
                      <span class="badge bg-important">5</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                      <div class="notify-arrow notify-arrow-blue"></div>
                      <li>
                          <p class="blue">You have 5 new messages</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="./img/avatar1_small.png"></span>
                              <span class="subject">
                              <span class="from">Cecilia Castellar</span>
                              <span class="time">1 min</span>
                              </span>
                              <span class="message">
                                  Me gusta la pagina.
                              </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="./img/avatar1_small.png"></span>
                              <span class="subject">
                              <span class="from">Jorge Gaviria</span>
                              <span class="time">5 mins</span>
                              </span>
                              <span class="message">
                               cual es el siguiente paso del proyecto
                              </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all messages</a>
                      </li>
                  </ul>
              </li>
              <!-- inbox notificatoin end -->
              <!-- alert notification start-->
              <li id="alert_notificatoin_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="icon-bell-l"></i>
                      <span class="badge bg-important">7</span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-blue"></div>
                      <li>
                          <p class="blue">You have 4 new notifications</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-primary"><i class="icon_profile"></i></span>
                              Friend Request
                              <span class="small italic pull-right">5 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="icon_book_alt"></i></span>
                              Project 3 Completed.
                              <span class="small italic pull-right">1 hr</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-success"><i class="icon_like"></i></span>
                              Mick appreciated your work.
                              <span class="small italic pull-right"> Today</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all notifications</a>
                      </li>
                  </ul>
              </li>
              <!-- alert notification end-->
              <!-- user login dropdown start-->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="profile-ava">
                          <img alt="" src="img/avatar1_small.png">
                      </span>
                      <span class="username">Javier Galindo</span>
                      <b class="caret"></b>
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
                          <a href="index.html"><i class="icon_key_alt"></i> Log Out</a>
                      </li>
                  </ul>
              </li>
              <!-- user login dropdown end -->
          </ul>
          <!-- notificatoin dropdown end-->
      </div>
</header>
<!--header end-->

<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
     <!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="principal.html">
                    <i class="icon_house_alt"></i>
                    <span>Home</span>
                </a>
            </li>
    <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Documentos</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="basic_table.html">Basic Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span>Proyectos</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                   <li><a class="" href="basic_table.html">project</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                 <a href="javascript:;" class="">
                    <i class="icon_genius"></i>
                    <span>Libros</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                   <li><a class="" href="basic_table.html">libros</a></li>
                </ul>
            </li>
            <li>
                <a class="" href="profile.html">
                    <i class="icon_documents_alt"></i>
                    <span>Profile</span>

                </a>

            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    </div>
</aside>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
      <li><i class="fa fa-table"></i>Table</li>
      <li><i class="fa fa-th-list"></i>Basic Table</li>
    </ol>
  </div>
</div>
        <!-- page start-->



                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_documents_alt"></i> Archive</th>
                           <th><i class="icon_calendar"></i> Date</th>
                           <th><i class="icon_profile"></i> User</th>
                           <th><i class="icon_document"></i> Description</th>
                           <th colspan="3"><i class="icon_cogs"></i> Action</th>
                        </tr>
                        @forelse ($files as $file)
                        <tr>
                           <td>{{ $file->nombre }}</td>
                           <td>{{ $file->created_at }}</td>
                           <td>{{ $file->descripcion  }}</td>
                           <td>{{ $file->created_at }}</td>


                             <td>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#">Download</a>
                              </div>
                              </td>
                              <td>
                               <form method="POST" action="{{ route('delete') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                                 <input type="hidden" name="tipo" value="{{ $file->tipo }}"><br>
                                 <input type="hidden" name="materia" value="{{ $file->materia }}"><br>
                                 <input type="hidden" name="nombre" value="{{ $file->path }}"><br>
                            <div class="btn-group">
                                <input type="submit"  value="Delete" class="btn btn-primary" >
                            </div>
                          </form>
                            </td>
                        </tr>
                          @empty
                          <p>No hay archivo por ahora...</p>
                        @endforelse

                     </tbody>
                  </table>
                </section>
            </div>
        </div>

        @endsection
