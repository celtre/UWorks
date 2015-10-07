@extends('layout')


@section('content')
<section id="container" class="">




    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
      <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Home</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="principal.html">Home</a></li>
          <li><i class="fa fa-laptop"></i>Home</li>
        </ol>
      </div>
    </div>

          <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box blue-bg">
          <i class="fa fa-cloud-download"></i>
          <div class="count">15</div>
          <div class="title">Download</div>
        </div><!--/.info-box-->
      </div><!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box brown-bg">
          <div class="count">3</div>
          <div class="title">Uploads</div>
        </div><!--/.info-box-->
      </div><!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box dark-bg">
          <i class="fa fa-thumbs-o-up"></i>
          <div class="count">7</div>
          <div class="title">Likes</div>
        </div><!--/.info-box-->
      </div><!--/.col-->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="info-box green-bg">
          <i class="fa fa-cubes"></i>
          <div class="count">5</div>
          <div class="title">Contacts</div>
        </div><!--/.info-box-->
      </div><!--/.col-->
    <div class="row">

      <div class="col-lg-9 col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa fa-flag-o red"></i><strong>Registro Archivos</strong></h2>
            <div class="panel-actions">
              <a href="principal.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
              <a href="principal.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
              <a href="principal.html#" class="btn-close"><i class="fa fa-times"></i></a>
            </div>
          </div>
          <div class="panel-body">
            <table class="table bootstrap-datatable countries">
              <thead>
                <tr>
                  <th></th>
                  <th>Materia</th>
                  <th>Descargados</th>
                  <th>Online</th>
                  <th>Performance</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>Fisica</td>
                  <td>2563</td>
                  <td>1025</td>
                  <td>
                    <div class="progress thin">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                      </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                        </div>
                    </div>
                    <span class="sr-only">73%</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Calculo</td>
                  <td>3652</td>
                  <td>2563</td>
                  <td>
                    <div class="progress thin">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                      </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                      </div>
                    </div>
                    <span class="sr-only">57%</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Ing. Software</td>
                  <td>562</td>
                  <td>452</td>
                  <td>
                    <div class="progress thin">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                      </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                        </div>
                    </div>
                    <span class="sr-only">93%</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Simulacion</td>
                  <td>1258</td>
                  <td>958</td>
                  <td>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div>
                    <span class="sr-only">20%</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Inteligencia Artifical</td>
                  <td>4856</td>
                  <td>3621</td>
                  <td>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div>
                    <span class="sr-only">20%</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>S.O</td>
                  <td>265</td>
                  <td>102</td>
                  <td>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div>
                    <span class="sr-only">20%</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Estadistica</td>
                  <td>265</td>
                  <td>102</td>
                  <td>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div>
                    <span class="sr-only">20%</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Biologia</td>
                  <td>265</td>
                  <td>102</td>
                  <td>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        </div>
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div>
                    <span class="sr-only">20%</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

      </div><!--/col-->
      <div class="col-md-3">

        <div class="social-box facebook">
          <i class="fa fa-facebook"></i>
          <ul>
            <li>
              <strong>256</strong>
              <span>friends</span>
            </li>
            <li>
              <strong>359</strong>
              <span>feeds</span>
            </li>
          </ul>
        </div><!--/social-box-->
      </div>
      <div class="col-md-3">

        <div class="social-box google-plus">
          <i class="fa fa-google-plus"></i>
          <ul>
            <li>
              <strong>130</strong>
              <span>followers</span>
            </li>
            <li>
              <strong>256</strong>
              <span>circles</span>
            </li>
          </ul>
        </div><!--/social-box-->

      </div><!--/col-->
      <div class="col-md-3">

        <div class="social-box twitter">
          <i class="fa fa-twitter"></i>
          <ul>
            <li>
              <strong>156</strong>
              <span>followers</span>
            </li>
            <li>
              <strong>2562</strong>
              <span>tweets</span>
            </li>
          </ul>
        </div><!--/social-box-->

      </div><!--/col-->

            </div>



              <!-- statics end -->




            <!-- project team & activity start -->
        <div class="row">
          <div class="col-md-4 portlets">
            <!-- Widget -->
            <div class="panel panel-default">
      <div class="panel-heading">
                <div class="pull-left">Message</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body">
                <!-- Widget content -->
                <div class="padd sscroll">

                  <ul class="chats">

                    <!-- Chat by us. Use the class "by-me". -->
                    <li class="by-me">
                      <!-- Use the class "pull-left" in avatar -->
                      <div class="avatar pull-left">
                        <img src="img/avatar1_small.png" alt=""/>
                      </div>

                      <div class="chat-content">
                        <!-- In meta area, first include "name" and then "time" -->
                        <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                        Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <!-- Chat by other. Use the class "by-other". -->
                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/avatar1_small.png" alt=""/>
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Javier Galindo</span></div>
                        Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-me">
                      <div class="avatar pull-left">
                        <img src="img/avatar1_small.png" alt=""/>
                      </div>

                      <div class="chat-content">
                        <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/avatar1_small.png" alt=""/>
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Javier Galindo</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                  </ul>

                </div>
                <!-- Widget footer -->
                <div class="widget-foot">

                    <form class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Type your message here...">
          </div>
                      <button type="submit" class="btn btn-info">Send</button>
                    </form>


                </div>
              </div>


            </div>
          </div>

                <div class="col-lg-8">
                    <!--Project Activity start-->
                    <section class="panel">
                        <div class="panel-body progress-panel">
                          <div class="row">
                            <div class="col-lg-8 task-progress pull-left">
                                <h1>To Do Everyday</h1>
                            </div>
                            <div class="col-lg-4">
                              <span class="profile-ava pull-right">
                                      <img alt="" class="simple" src="img/avatar1_small.png">
                                      Javier Galindo
                              </span>
                            </div>
                          </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>
                            <tr>
                                <td>Today</td>
                                <td>
                                    web design
                                </td>
                                <td>
                                    <span class="badge bg-important">Upload</span>
                                </td>
                                <td>
                                  <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar1_small.png">
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Yesterday</td>
                                <td>
                                    Project Design Task
                                </td>
                                <td>
                                    <span class="badge bg-success">Task</span>
                                </td>
                                <td>
                                    <div id="work-progress2"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>21-10-14</td>
                                <td>
                                    Generate Invoice
                                </td>
                                <td>
                                    <span class="badge bg-success">Task</span>
                                </td>
                                <td>
                                    <div id="work-progress3"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>22-10-14</td>
                                <td>
                                    Project Testing
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar1_small.png">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>24-10-14</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-info">Milestone</span>
                                </td>
                                <td>
                                    <div id="work-progress4"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>28-10-14</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <div id="work-progress5"></div>
                                </td>
                            </tr>
              <tr>
                                <td>Last week</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <div id="work-progress1"></div>
                                </td>
                            </tr>
              <tr>
                                <td>last month</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-success">To-Do</span>
                                </td>
                                <td>
                                    <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar1_small.png">
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <!--Project Activity end-->
                </div>
            </div><br><br>



        </div>
            <!-- project team & activity end -->

        </section>
    </section>
    <!--main content end-->
</section>
@endsection
