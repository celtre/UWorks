@extends('layout')


@section('content')
<body>
<!-- container section start -->
<section id="container" class="">


    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index">Home</a></li>
          <li><i class="icon_documents_alt"></i>Pages</li>
          <li><i class="fa fa-user-md"></i>Profile</li>
        </ol>
      </div>
    </div>
            <div class="row">
              <!-- profile-widget -->
              <div class="col-lg-12">
                  <div class="profile-widget profile-widget-info">
                        <div class="panel-body">
                          <div class="col-lg-2 col-sm-2">
                            <h4>Jenifer Smith</h4>
                            <div class="follow-ava">
                                <img src="img/avatar1_small.png" alt="">
                            </div>
                            <h6>Administrator</h6>
                          </div>
                          <div class="col-lg-4 col-sm-4 follow-info">
                              <p>Soy Javier Galindo, estudiante de ingenieria de sistemas.</p>
                              <p>@javiergalindo</p>
              <p><i class="fa fa-twitter">javiertweet</i></p>
                              <h6>
                                  <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                  <span><i class="icon_calendar"></i>25.10.13</span>
                                  <span><i class="icon_pin_alt"></i>COL</span>
                              </h6>
                          </div>

                        </div>
                  </div>
              </div>
            </div>
            <!-- page start-->
            <div class="row">
               <div class="col-lg-12">
                  <section class="panel">
                        <header class="panel-heading tab-bg-info">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#recent-activity">
                                        <i class="icon-home"></i>
                                        Activity
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#profile">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#edit-profile">
                                        <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="recent-activity" class="tab-pane active">
                                    <div class="profile-activity">
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="img/avatar1_small.png" alt=""></a>
                                                    <p class="attribution"> at 4:25pm, 30th Octmber 2014</p>
                                                    <p>Upload projectweb</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="img/avatar1_small.png" alt=""></a>
                                                    <p class="attribution">at 5:25am, 30th Octmber 2014</p>
                                                    <p>Download Kanban Vs Scrum</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="act-time">
                                            <div class="activity-body act-in">
                                                <span class="arrow"></span>
                                                <div class="text">
                                                    <a href="#" class="activity-img"><img class="avatar" src="img/avatar1_small.png" alt=""></a>
                                                    <p class="attribution">at 5:25am, 30th Octmber 2014</p>
                                                    <p>Download Curso-de-Desarrollo-agil</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile -->
                                <div id="profile" class="tab-pane">
                                  <section class="panel">
                                    <div class="bio-graph-heading">
                                             Soy Javier Galindo, estudiante de ingenieria de sistemas en la universidad Tecnologica de Bolivar
                                    </div>
                                    <div class="panel-body bio-graph-info">
                                        <h1>Bio Graph</h1>
                                        <div class="row">
                                            <div class="bio-row">
                                                <p><span>First Name </span>: Javier </p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Last Name </span>: Galindo</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Birthday</span>: 10 Mayo 1988</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Country </span>: Colombia</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Occupation </span>: Estudiante</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Email </span>: javier@mailname.com</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Mobile </span>: (+6283) 456 789</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Phone </span>:  (+021) 956 789123</p>
                                            </div>
                                        </div>
                                    </div>
                                  </section>
                                    <section>
                                        <div class="row">
                                        </div>
                                    </section>
                                </div>
                                <!-- edit-profile -->
                                <div id="edit-profile" class="tab-pane">
                                  <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1> Profile Info</h1>
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">First Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="f-name" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Last Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="l-name" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">About Me</label>
                                                    <div class="col-lg-10">
                                                        <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Country</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="c-name" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Birthday</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="b-day" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Occupation</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="occupation" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="email" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Mobile</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="mobile" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Website URL</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
               </div>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

<script>

    //knob
    $(".knob").knob();

</script>


</body>

@endsection
