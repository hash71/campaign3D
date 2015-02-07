<!DOCTYPE html>


<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ORB</title>

<link rel="stylesheet" type="text/css" href="../assets/css/daterangepicker-bs3.css" />
<link href="../assets/css/styles.css" rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript" src="../assets/js/vendors/modernizr/modernizr.custom.js"></script>
</head>

<body>

<!--Smooth Scroll-->
<div class="smooth-overflow">
<!--Navigation-->
  <nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="index.html"><span class="text-blue">ORB</span></a> 
    
    <!--Search-->
    <div class="site-search">
      <form action="#" id="inline-search">
        <i class="fa fa-search"></i>
        <input type="search" placeholder="Search">
      </form>
    </div>
    
    <!--Navigation Itself-->    
    <div class="navbar-content">

<!--Sidebar Toggler--> 
        <a href="#" class="btn btn-default left-toggler"><i class="fa fa-bars"></i></a>

      <!--Fullscreen Trigger-->
      <button type="button" class="btn btn-default hidden-xs pull-right" id="toggle-fullscreen"><i class=" entypo-popup"></i></button>
           
      <!--Lock Screen--> 
      <a href="#" data-toggle="modal" class="btn btn-default hidden-xs pull-right lockme"> <i class="entypo-lock"></i> </a>     

    </div>
  </nav>  
  <!--/Navigation--> 
  
  <!--MainWrapper-->
  <div class="main-wrap">  
   
    <!--Main Menu-->
    <div class="responsive-admin-menu">    
      <div class="responsive-menu">ORB
        <div class="menuicon"><i class="fa fa-angle-down"></i></div>
      </div>
      <ul id="menu">
        <li><a class="active" href="index.html" title="Dashboard"><i class="entypo-briefcase"></i><span> Dashboard</span></a></li>
      </ul>
      <ul>
      <li>{{link_to('messages/index','Index Page')}}</li>
      <li>{{link_to('percentage/index','Percentage Page')}}</li>
      <li>{{link_to('table/index','Table Page')}}</li>
    </ul>
    </div>
    <!--/MainMenu-->
    
    <div class="content-wrapper">
        <!-- 
        Please Dont Delete This portion  <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>  
        -->
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>

        <!--Breadcrumb-->
        <div class="breadcrumb clearfix">
          <ul>
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="index.html">Dashboard</a></li>
            <li class="active">Data</li>
          </ul>
        </div>
        <!--/Breadcrumb--> 
        
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-3">
            <div class="form-group">
              <select class="form-control" name="" id="switch_view">
                <option value="1">SKU Wise Bar Chart</option>
                <option value="2">Sales Trend</option>
              </select>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="date">
                <div class="form-group">
                  <div class="input-group date">
                    <input type='text' class="form-control" id="datetimepicker1" placeholder="Pick Date"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
            </div>
          </div>
        </div>
          
        <!-- Widget Row Start grid -->
        <div class="row" id="powerwidgets">

          <div class="col-md-8 bootstrap-grid">
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="morris-stacked-bar" data-widget-editbutton="false">
              <header>
                <h2>SKU Wise Bar Chart</h2>
              </header>
              <div class="inner-spacer">
                <div class="morrischart" id="bar_chart"></div>
              </div>
            </div>
            <!-- /New widget --> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="morrisasline" data-widget-editbutton="false">
              <header>
                <h2>Sales Trend<small>By Date</small></h2>
              </header>
              <div class="inner-spacer">
                <div class="morrischart" id="morris-area-lines"></div>
              </div>
            </div>
            <!-- /New widget -->
          </div>
          <!-- /Inner Row Col-md-8 -->
                          
          <div class="col-md-4 bootstrap-grid"> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-1" data-widget-editbutton="false">
              <header>
                <h2>SMS</h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container" style="width: 60%;float: left;">
                  <canvas id="placeholder6a"  class="flotchart-placeholder" width="290" height="210"/>
                </div>
                <div id="placeholder6a_legend"></div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 -->

          <div class="clearfix"></div>
                         
          <div class="col-md-4 bootstrap-grid">

            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-2" data-widget-editbutton="false">
              <header>
                <h2>Customers<small>Gender Wise</small></h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container" style="width: 60%;float: left;">
                  <canvas id="pie_gender"  class="flotchart-placeholder" width="290" height="210"/>
                </div>
                <div id="pie_gender_legend"></div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 -->             
                         
          <div class="col-md-4 bootstrap-grid"> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-3" data-widget-editbutton="false">
              <header>
                <h2>Used Product<small></small></h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container" style="width: 60%;float: left;">
                  <canvas id="pie_used"  class="flotchart-placeholder" width="290" height="210"/>
                </div>
                <div id="pie_used_legend"></div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 -->             
                         
          <div class="col-md-4 bootstrap-grid"> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-4" data-widget-editbutton="false">
              <header>
                <h2>Sales<small></small></h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container" style="width: 60%;float: left;">
                  <canvas id="pie_sales"  class="flotchart-placeholder" width="290" height="210"/>
                </div>
                 <div id="pie_sales_legend"></div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 --> 
        </div>
        <!-- /Widgets Row End Grid--> 
    </div>
      <!-- / Content Wrapper --> 
  </div>
  <!--/MainWrapper-->
</div>
<!--/Smooth Scroll-->

<!--Modals--> 

<!--Power Widgets Modal-->
<div class="modal" id="delete-widget">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">
        <p>Are you sure to delete this widget?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="trigger-deletewidget-reset">Cancel</button>
        <button type="button" class="btn btn-primary" id="trigger-deletewidget">Delete</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Sign Out Dialog Modal-->
<div class="modal" id="signout">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Sign Out?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesigo">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Lock Screen Dialog Modal-->
<div class="modal" id="lockscreen">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Lock Screen?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesilock">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Scripts--> 
<!--JQuery--> 
<script type="text/javascript" src="../assets/js/vendors/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/jquery/jquery-ui.min.js"></script> 

<script>
$('.powerwidget > header').on('touchstart', function(event){});
</script>

<!--EasyPieChart--> 
<script type="text/javascript" src="../assets/js/vendors/easing/jquery.easing.1.3.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/easypie/jquery.easypiechart.min.js"></script> 

<!--Fullscreen--> 
<script type="text/javascript" src="../assets/js/vendors/fullscreen/screenfull.min.js"></script> 

<!--NanoScroller 
<script type="text/javascript" src="../assets/js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script> -->

<!--Sparkline--> 
<script type="text/javascript" src="../assets/js/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--Horizontal Dropdown--> 
<script type="text/javascript" src="../assets/js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/classie/classie.js"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="../assets/js/vendors/powerwidgets/powerwidgets.min.js"></script> 

<!--Morris Chart--> 
<script type="text/javascript" src="../assets/js/vendors/raphael/raphael-min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/morris/morris.min.js"></script> 

<!--FlotChart--> 
<script type="text/javascript" src="../assets/js/vendors/flotchart/jquery.flot.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/flotchart/jquery.flot.resize.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/flotchart/jquery.flot.axislabels.js"></script>
<script type="text/javascript" src="../assets/js/vendors/flotchart/jquery.flot.pie.min.js"></script> 

<!--Chart.js--> 
<script type="text/javascript" src="../assets/js/vendors/chartjs/chart.min.js"></script> 

<!--Calendar--> 
<script type="text/javascript" src="../assets/js/vendors/fullcalendar/fullcalendar.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/fullcalendar/gcal.js"></script> 

<!--Bootstrap--> 
<script type="text/javascript" src="../assets/js/vendors/bootstrap/bootstrap.min.js"></script> 

<!--Vector Map--> 
<script type="text/javascript" src="../assets/js/vendors/vector-map/jquery.vmap.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/vector-map/jquery.vmap.sampledata.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/vector-map/jquery.vmap.world.js"></script>

<!--Datepicker-->
<script type="text/javascript" src="../assets/js/vendors/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../assets/js/vendors/datepicker/moment.js"></script>
<script type="text/javascript" src="../assets/js/vendors/datepicker/daterangepicker.js"></script>
<!--ToDo--> 
<script type="text/javascript" src="../assets/js/vendors/todos/todos.js"></script> 

<!--Main App--> 
<script type="text/javascript" src="../assets/js/scripts.js"></script>

        <script type="text/javascript">
            // When the document is ready
          var allData={{$data}};
          var bar_data = allData.bar;
          var pieData = allData.right_wrong;
          var skus=[],smsChart=null,morris_area=null,pie_sales=null,pie_used=null,pie_gender=null;
            $(document).ready(function () {
              $("#switch_view").change(function(){
                if($("#switch_view").val()==1)
                {
                    $("#morrisasline").hide();
                    $("#morris-stacked-bar").show();
                    moris_bar.redraw();morris_area.redraw();
                }
                else
                {
                    $("#morrisasline").show();
                    $("#morris-stacked-bar").hide();
                    moris_bar.redraw();morris_area.redraw();
                }

              });
              
                
                $('#datetimepicker1').daterangepicker(
          {
            format: 'YYYY-MM-DD'
          },
          function()
          { 
            $("#powerwidgets").css({ opacity: 0.5 });
            $.ajax({
              url: '#',     
              method: 'GET',
              data:{ 'range': $("#datetimepicker1").val()},
              success: function(dt){
                  allData=dt;
                  moris_bar.setData(dt.bar);
                  morris_area.setData(dt.trend);
                  moris_bar.redraw();morris_area.redraw();
                  smsChart.destroy();pie_sales.destroy();pie_used.destroy();pie_gender.destroy();
                  smsChart = new Chart($("#placeholder6a").get(0).getContext("2d")).Pie(dt.right_wrong);
                  pie_sales = new Chart($("#pie_sales").get(0).getContext("2d")).Pie(dt.yes_no);
                  pie_used = new Chart($("#pie_used").get(0).getContext("2d")).Pie(dt.used_product);
                  pie_gender = new Chart($("#pie_gender").get(0).getContext("2d")).Pie(dt.gender);
                  $("#pie_gender_legend").html(pie_gender.generateLegend());
                  $("#pie_sales_legend").html(pie_sales.generateLegend());
                  $("#pie_used_legend").html(pie_used.generateLegend());
                  $("#placeholder6a_legend").html(smsChart.generateLegend());
                  $("#powerwidgets").css({ opacity: 1 });
              }
            });
          });  

  $.each(bar_data,function(i,v){skus.push(v.y)});
    moris_bar = Morris.Bar({
                element: 'bar_chart',
                data: bar_data,
                gridTextFamily: 'Open Sans, sans-serif',
                gridTextColor: '#000',
                gridTextSize: 14,
                barColors: function (row, series, type) {
                  if(row.label == "FAL") return "#AD1D28";
                  else if(row.label == "PDF") return "#DEBB27";
                  else if(row.label == "PWB") return "#fec04c";
                  else if(row.label == "PNS") return "#1AB244";
                  else if(row.label == "PPC") return "#BAB244";
                  else if(row.label == "DBM") return "#BA7FB0";
                },
                        stacked: true,
                 xkey: 'y',
                ykeys: ['qtt'],
                labels: skus
            });

        morris_area = Morris.Area({
                element: 'morris-area-lines',
                data: allData.trend,
                xkey: 'y',
                ykeys: ['a', 'b','c','d','e','f'],
                labels: skus
              });      
        $("#morrisasline").hide();
            });
      smsChart = new Chart($("#placeholder6a").get(0).getContext("2d")).Pie(pieData);
      pie_sales = new Chart($("#pie_sales").get(0).getContext("2d")).Pie(allData.yes_no);
      pie_used = new Chart($("#pie_used").get(0).getContext("2d")).Pie(allData.used_product);
      pie_gender = new Chart($("#pie_gender").get(0).getContext("2d")).Pie(allData.gender);
      $("#pie_gender_legend").html(pie_gender.generateLegend());
      $("#pie_sales_legend").html(pie_sales.generateLegend());
      $("#pie_used_legend").html(pie_used.generateLegend());
      $("#placeholder6a_legend").html(smsChart.generateLegend());
        </script>


<!--/Scripts-->

</body>
</html>