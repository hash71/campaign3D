<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Percentage Report</title>

<link href="../assets/css/datepicker.css" rel="stylesheet" type="text/css">
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
            <li class="active">Percentage Report View</li>
          </ul>
        </div>
        <!--/Breadcrumb--> 
        

          
        <!-- Widget Row Start grid -->
        <div class="row" id="powerwidgets">

            <div class="col-md-4 col-sm-6 bootstrap-grid">
              <!-- New widget -->
              <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-cold-grey" id="gender" data-widget-editbutton="false">
              <header><b>Gender</b></header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon animated bounceIn text-white"><i class="fa fa-male"></i><i class="fa fa-female"></i></div>
                <ul class="portlet-bottom-block">
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>{{$males}}({{round(($males/$total_records)*100,2)}}%)</strong><small>Male</small></li>

                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>{{$females}}({{round(($females/$total_records)*100,2)}}%)</strong><small>Female</small></li>

                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>{{$total_records}}</strong><small>total</small></li>
                </ul>
              </div>
            </div>
            <!-- /New widget -->
            </div>
            <!-- /Inner Row Col-md-4 -->

          <div class="col-md-8 col-sm-12 bootstrap-grid">            
            <!-- New widget -->
            <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-orange" id="education" data-widget-editbutton="false">
              <header><b>Education</b></header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon animated bounceIn"><i class="fa fa-graduation-cap"></i></div>
                <ul class="portlet-bottom-block">
                  <li class="col-md-2 col-sm-4 col-xs-4"><strong>{{$education['Under SSC']}}({{round(($education['Under SSC']/$total_records)*100,2)}}%)</strong><small>Under SSC</small></li>
                  <li class="col-md-2 col-sm-4 col-xs-4"><strong>{{$education['SSC']}}({{round(($education['SSC']/$total_records)*100,2)}}%)</strong><small>SSC</small></li>
                  <li class="col-md-2 col-sm-4 col-xs-4"><strong>{{$education['HSC']}}({{round(($education['HSC']/$total_records)*100,2)}}%)</strong><small>HSC</small></li>
                  <li class="col-md-2 col-sm-4 col-xs-4"><strong>{{$education['Grad']}}({{round(($education['Grad']/$total_records)*100,2)}}%)</strong><small>Graduate</small></li>
                  <li class="col-md-2 col-sm-4 col-xs-4"><strong>{{$education['Masters']}}({{round(($education['Masters']/$total_records)*100,2)}}%)</strong><small>Masters</small></li>
                  <li class="col-md-2 col-sm-4 col-xs-4"><strong>{{$total_records}}</strong><small>Total</small></li>
                </ul>
              </div>
            </div>
            <!-- /New widget -->             
          </div>
          <!-- /Inner Row Col-md-8 -->

          <div class="clearfix"></div>

          <div class="col-md-8 col-sm-12 bootstrap-grid">            
            <!-- New widget -->
            <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-green-alt" id="occupation" data-widget-editbutton="false">
              <header><b>Occupation</b></header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon animated bounceIn"><i class="fa fa-pied-piper-alt"></i></div>
                <ul class="portlet-bottom-block">

                  <li class="col-md-2 col-sm-2 col-xs-2"><strong>{{$occupation['Student']}}({{round(($occupation['Student']/$total_records)*100,2)}}%)</strong><small>Student</small></li>

                  <li class="col-md-2 col-sm-2 col-xs-2"><strong>{{$occupation['Housewife']}}({{round(($occupation['Housewife']/$total_records)*100,2)}}%)</strong><small>Housewife</small></li>

                  <li class="col-md-3 col-sm-3 col-xs-3"><strong>{{$occupation['Service Holder'] }}({{round(($occupation['Service Holder']/$total_records)*100,2)}}%)</strong><small>Service Holder</small></li>

                  <li class="col-md-3 col-sm-3 col-xs-3"><strong>{{$occupation['Owner of a Business']}}({{round(($occupation['Owner of a Business']/$total_records)*100,2)}}%)</strong><small>Owner of a Business</small></li>

                  <li class="col-md-2 col-sm-2 col-xs-2"><strong>{{$total_records}}</strong><small>Total</small></li>

                </ul>
              </div>
            </div>
            <!-- /New widget -->             
          </div>
          <!-- /Inner Row Col-md-8 -->

            <div class="col-md-4 col-sm-6 bootstrap-grid">
              <!-- New widget -->
              <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-dark-blue" id="sales" data-widget-editbutton="false">
              <header><b>Sales</b></header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon animated bounceIn text-white"><i class="fa fa-money"></i></div>
                <ul class="portlet-bottom-block">
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>{{$yes}}({{round(($yes/$total_records)*100,2)}}%)</strong><small>Yes</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>{{$no}}({{round(($no/$total_records)*100,2)}}%)</strong><small>No</small></li>
                  <li class="col-md-4 col-sm-4 col-xs-4"><strong>{{$total_records}}</strong><small>Total</small></li>
                </ul>
              </div>
            </div>
            <!-- /New widget -->
            </div>
            <!-- /Inner Row Col-md-4 -->

          <div class="clearfix"></div>
          <div class="col-md-12 col-sm-12 bootstrap-grid"> 
            
            <!-- New widget -->
            <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-purple" id="curUsedProduct" data-widget-editbutton="false">
              <header><b>Currently Used Product</b></header>
              <div class="inner-spacer nopadding">
                <div class="portlet-big-icon animated bounceIn"><i class="glyphicon glyphicon-magnet"></i></div>
                <ul class="portlet-bottom-block">
                <?php $sum = 0;?>
                @foreach($products as $key=>$amount)
                     <?php $sum+=$amount;?>
                @endforeach

                  <li class="col-md-2 col-sm-2 col-xs-2"><strong>{{$products['FAL']}}({{round(($products['FAL']/$sum)*100,2)}}%)</strong><small>FAL</small></li>

                  <li class="col-md-2 col-sm-2 col-xs-2"><strong>{{$products['PDF']}}({{round(($products['PDF']/$sum)*100,2)}}%)</strong><small>PDF</small></li>

                  <li class="col-md-2 col-sm-2 col-xs-2"><strong>{{$products['PWB']}}({{round(($products['PWB']/$sum)*100,2)}}%)</strong><small>PWB</small></li>

                  <li class="col-md-2 col-sm-2 col-xs-2"><strong>{{$products['PNS']}}({{round(($products['PNS']/$sum)*100,2)}}%)</strong><small>PNS</small></li>

                  <li class="col-md-2 col-sm-2 col-xs-"><strong>{{$products['PPC']}}({{round(($products['PPC']/$sum)*100,2)}}%)</strong><small>PPC</small></li>

                  <li class="col-md-1 col-sm-1 col-xs-1"><strong>{{$products['DBM']}}({{round(($products['DBM']/$sum)*100,2)}}%)</strong><small>DBM</small></li>

                  <li class="col-md-1 col-sm-1 col-xs-1"><strong>{{$sum}}</strong><small>Total</small></li>
                </ul>
              </div>
            </div>
            <!-- /New widget --> 
            
          </div>
          <!-- /Inner Row Col-md-3 -->


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
<script type="text/javascript" src="../assets/js/vendors/chart../assets/js/chart.min.js"></script> 

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

<!--ToDo--> 
<script type="text/javascript" src="../assets/js/vendors/todos/todos.js"></script> 

<!--Main App--> 
<script type="text/javascript" src="../assets/js/scripts.js"></script>

        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#datetimepicker1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>


<!--/Scripts-->

</body>
</html>