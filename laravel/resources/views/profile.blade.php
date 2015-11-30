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
                            @if (!empty($profiles))
                            <h4>{{ $profiles->nombre }}</h4>
                            <div class="follow-ava">
                                <img alt="" src="{{ $profiles->foto }}">
                            </div>
                            <h6>{{ $profiles->apellido }}</h6>
                          </div>
                          <div class="col-lg-4 col-sm-4 follow-info">
                              <p>{{ $profiles->descripcion }}</p>

                              <h6>
                                  <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                  <span><i class="icon_calendar"></i>25.10.13</span>
                                  <span><i class="icon_pin_alt"></i>{{ $profiles->pais }}</span>
                                  @else
                                  <p>Por favor señor(a) {{ Auth::user()->name }} complete su perfil.</p>
                                  @endif
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
                                @if(Auth::user()->name == $profiles->nombre)
                                <li class="active">
                                    <a data-toggle="tab" href="#recent-activity">
                                        <i class="icon-home"></i>
                                        Upload
                                    </a>
                                </li>
                                 @endif
                                <li>
                                    <a data-toggle="tab" href="#profile">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>
                                  @if(Auth::user()->name == $profiles->nombre)
                                <li class="">
                                    <a data-toggle="tab" href="#edit-profile">
                                        <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                                </li>
                                 @endif
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                              @if(Auth::user()->name == $profiles->nombre)
                                <div id="recent-activity" class="tab-pane active">
                                  <form method="POST" action="{{ route('file') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                      <div class="form-group">
                                          <label class="col-md-4 control-label">Nuevo Archivo</label>
                                          <div class="col-md-6">
                                              <label for="nombre">Nombre</label>
                                              <input type="text" class="form-control" name="nombre">
                                                <label for="descripcion">Descripcion</label>
                                              <textarea type="text" class="form-control" name="descripcion" cols="40" rows="5"></textarea>
                                                <label for="tipo">Tipo de documento</label>
                                                <select name="tipo">
                                                  <option value="" selected="selected">- selecciona -</option>
                                                  <option value="documentos">Documento</option>
                                                  <option value="libros">Libro</option>
                                                  <option value="parcial">Parcial</option>
                                                </select>
                                                  <label for="materia">Materia</label>
                                                <select name="materia">
                                                  <option value="" selected="selected">- selecciona -</option>
                                                    @forelse ($subject as $subjects)
                                                  <option value="{{ $subjects->nombre }}">{{ $subjects->nombre }}</option>
                                                  @empty
                                                  <p>No hay materias por ahora...</p>
                                                @endforelse
                                                </select>

                                              <input type="file" class="form-control" name="file" >

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
                                @endif
                                <!-- profile -->
                                <div id="profile" class="tab-pane">
                                  <section class="panel">
                                      @if (!empty($profiles))
                                    <div class="bio-graph-heading">
                                             {{ $profiles->descripcion }}
                                    </div>
                                    <div class="panel-body bio-graph-info">
                                        <h1>Bio Graph</h1>
                                        <div class="row">
                                            <div class="bio-row">
                                                <p><span>First Name </span>: {{ $profiles->nombre }} </p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Last Name </span>: {{ $profiles->apellido }}</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Birthday</span>: {{ $profiles->fecha_nacimiento }}</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Country </span>: {{ $profiles->pais}}</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Occupation </span>: {{ $profiles->ocupacion }}</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Email </span>: {{ $profiles->email }}</p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span>Mobile </span>: {{ $profiles->celular }}</p>
                                            </div>

                                        </div>
                                    </div>
                                    @endif
                                  </section>
                                    <section>
                                        <div class="row">
                                        </div>
                                    </section>
                                </div>
                                <!-- edit-profile -->
                                @if(Auth::user()->name == $profiles->nombre)
                                <div id="edit-profile" class="tab-pane">
                                  <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1> Profile Info</h1>
                                            <form method="POST" action="{{ route('profile') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                                              <input type="hidden" name="_token" value="{{ csrf_token() }}">



                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Last Name</label>
                                                    <div class="col-lg-6">
                                                        <input name="apellido" type="text" class="form-control" id="l-name" placeholder=" ">
                                                    </div>
                                                </div><br><br>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">About Me</label>
                                                    <div class="col-lg-10">
                                                        <textarea name="descripcion" id="" class="form-control" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div><br><br><br>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Country</label>
                                                    <div class="col-lg-6">
                                                        <input name="pais" type="text" class="form-control" id="c-name" placeholder=" ">
                                                    </div>
                                                </div><br><br><br><br>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Birthday</label>
                                                    <div class="col-lg-6">
                                                        <input name="fechaNac" type="date" class="form-control" id="b-day">
                                                    </div>
                                                </div><br><br><br>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Occupation</label>
                                                    <div class="col-lg-6">
                                                        <input name="ocupacion" type="text" class="form-control" id="occupation" placeholder=" ">
                                                    </div>
                                                </div><br><br><br>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Mobile</label>
                                                    <div class="col-lg-6">
                                                        <input name="celular" type="text" class="form-control"  placeholder=" ">
                                                    </div>
                                                </div><br><br>
                                                <input type="file" class="form-control" name="foto" >
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
                                @endif
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
