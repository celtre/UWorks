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
        <li><i class="fa fa-home"></i><a href="principal">Home</a></li>
        <li><i class="fa fa-laptop"></i>Home</li>
      </ol>
    </div>
  </div>

        <div class="row">
            <h4>Bienvenidos a UWorks</h4>
            <h5>Este es un espacio integral y confiable para la vida universitaria que esta pensado para representar
                  la expericiencia educativa, independientemente de su programa academico. Este es espacio le permite
                  compartir sus conocimientos y experciencias en la universidad.</h5>



    <div class="col-lg-9 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2><i class="fa fa-flag-o red"></i><strong>Registro Archivos</strong></h2>

        </div>
        <div class="panel-body">
          <table class="table bootstrap-datatable countries">
            <thead>
              <tr>
                <th></th>
                <th>Materia</th>
                <th>Descargados</th>
                <th>Online</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>Fisica</td>
                <td>2563</td>
                <td>1025</td>

              </tr>
              <tr>
                <td></td>
                <td>Calculo</td>
                <td>3652</td>
                <td>2563</td>

              </tr>
              <tr>
                <td></td>
                <td>Ing. Software</td>
                <td>562</td>
                <td>452</td>

              </tr>
              <tr>
                <td></td>
                <td>Simulacion</td>
                <td>1258</td>
                <td>958</td>

              </tr>
              <tr>
                <td></td>
                <td>Inteligencia Artifical</td>
                <td>4856</td>
                <td>3621</td>

              </tr>
              <tr>
                <td></td>
                <td>S.O</td>
                <td>265</td>
                <td>102</td>

              </tr>
              <tr>
                <td></td>
                <td>Estadistica</td>
                <td>265</td>
                <td>102</td>

              </tr>
              <tr>
                <td></td>
                <td>Biologia</td>
                <td>265</td>
                <td>102</td>

              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </div><!--/col-->



    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <div class="info-box blue-bg">
        <i class="fa fa-cloud-download"></i>
        <div class="count">15</div>
        <div class="title">Download</div>
      </div><!--/.info-box-->
    </div><!--/.col-->

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <div class="info-box brown-bg">
                                            <i class="fa fa-cloud-upload"></i>
        <div class="count">3</div>
        <div class="title">Uploads</div>
      </div><!--/.info-box-->
    </div><!--/.col-->

                            <div class="col-lg-9 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2><i class="fa fa-flag-o red"></i><strong>Tus Materias</strong></h2>
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
                <th>Subidos</th>


              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>Ing. Software</td>
                <td>2</td>


              </tr>
              <tr>
                <td></td>
                <td>Inteligencia Artifical</td>
                <td>3</td>


              </tr>

            </tbody>
          </table>
        </div>

      </div>

    </div><!--/col-->



          </div>



            <!-- statics end -->




          <!-- project team & activity start -->





          <!-- project team & activity end -->

      </section>
  </section>
  <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<!-- jQuery full calendar -->
<<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="js/calendar-custom.js"></script>
<script src="js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="js/jquery.customSelect.min.js" ></script>
<script src="assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/xcharts.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/sparklines.js"></script>
<script src="js/charts.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script>

  //knob
  $(function() {
    $(".knob").knob({
      'draw' : function () {
        $(this.i).val(this.cv + '%')
      }
    })
  });

  //carousel
  $(document).ready(function() {
      $("#owl-slider").owlCarousel({
          navigation : true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true

      });
  });

  //custom select box

  $(function(){
      $('select.styled').customSelect();
  });

/* ---------- Map ---------- */
$(function(){
$('#map').vectorMap({
  map: 'world_mill_en',
  series: {
    regions: [{
      values: gdpData,
      scale: ['#000', '#000'],
      normalizeFunction: 'polynomial'
    }]
  },
backgroundColor: '#eef3f7',
  onLabelShow: function(e, el, code){
    el.html(el.html()+' (GDP - '+gdpData[code]+')');
  }
});
});



</script>
</section>
@endsection
