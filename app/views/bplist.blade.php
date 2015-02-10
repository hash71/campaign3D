<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BP List</title>

<link href="assets/css/datepicker.css" rel="stylesheet" type="text/css">
<link href="assets/css/styles.css" rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript" src="assets/js/vendors/modernizr/modernizr.custom.js"></script>
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
      <li><a class="active" href="{{URL::to('messages/index')}}" title="Dashboard"><i class="entypo-briefcase"></i><span> Dashboard</span></a></li>
    </ul>
    <ul>
      <li>{{link_to('messages/index','Dashboard')}}</li>
      <li>{{link_to('percentage/index','% Report')}}</li>
      <li>{{link_to('table/index','Full Report')}}</li>
      <li>{{link_to('bplist','BP List')}}</li>
      <li>{{link_to('timeline','Live Feed')}}</li>
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
            <li><a href="{{URL::to('messages/index')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{URL::to('messages/index')}}">Dashboard</a></li>
            <li class="active">BP List</li>
          </ul>
        </div>
        <!--/Breadcrumb--> 
        

          
        <!-- Widget Row Start grid -->
        <div class="row" id="powerwidgets">   
          <div class="col-lg-12 bootstrap-grid" >
            <!-- New widget -->
            <div class="powerwidget" id="datatable-filter-column" data-widget-editbutton="false">
              <header>
                <h2>BP List</h2>
              </header>
              <div class="inner-spacer">
                <table class="display table table-striped table-hover" id="table-bplist">
                  <thead>
                    <tr>
                      <th>BP Name</th>
                      <th>BP Phone Number</th>
                      <th>BP LSA Code</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(DB::table('bp_info')->get() as $bp)
                    <tr>

                      <td><a href="{{URL::to('profile',$bp->id)}}">{{$bp->name}}</a></td>
                      <td>{{$bp->mobile}}</td>
                      <td>{{$bp->lsa_code}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th><input type="text" name="filter_bp_name" placeholder="Filter BP Name" class="search_init" /></th>
                      <th><input type="text" name="filter_bp_phone_number" placeholder="Filter BP Phone" class="search_init" /></th>
                      <th><input type="text" name="filter_bp_lsa_code" placeholder="Filter BP LSA" class="search_init" /></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- End .powerwidget -->
          </div>
          <!-- /Widgets Column Grid--> 
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
<script type="text/javascript" src="assets/js/vendors/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/jquery/jquery-ui.min.js"></script> 

<script>
$('.powerwidget > header').on('touchstart', function(event){});
</script>

<!--EasyPieChart--> 
<script type="text/javascript" src="assets/js/vendors/easing/jquery.easing.1.3.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/easypie/jquery.easypiechart.min.js"></script> 

<!--Fullscreen--> 
<script type="text/javascript" src="assets/js/vendors/fullscreen/screenfull.min.js"></script> 

<!--NanoScroller 
<script type="text/javascript" src="assets/js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script> -->

<!--Sparkline--> 
<script type="text/javascript" src="assets/js/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--Horizontal Dropdown--> 
<script type="text/javascript" src="assets/js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script> 
<script type="text/javascript" src="assets/js/vendors/classie/classie.js"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="assets/js/vendors/powerwidgets/powerwidgets.min.js"></script> 

<!--Morris Chart--> 
<script type="text/javascript" src="assets/js/vendors/raphael/raphael-min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/morris/morris.min.js"></script> 

<!--FlotChart--> 
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.resize.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.axislabels.js"></script>
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.pie.min.js"></script> 

<!--Chart.js--> 
<script type="text/javascript" src="assets/js/vendors/chartassets/js/chart.min.js"></script> 

<!--Calendar--> 
<script type="text/javascript" src="assets/js/vendors/fullcalendar/fullcalendar.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/fullcalendar/gcal.js"></script> 

<!--Bootstrap--> 
<script type="text/javascript" src="assets/js/vendors/bootstrap/bootstrap.min.js"></script> 

<!--Vector Map--> 
<script type="text/javascript" src="assets/js/vendors/vector-map/jquery.vmap.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/vector-map/jquery.vmap.sampledata.js"></script> 
<script type="text/javascript" src="assets/js/vendors/vector-map/jquery.vmap.world.js"></script>

<!--Datatables--> 
<script type="text/javascript" src="assets/js/vendors/datatables/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/datatables/jquery.dataTables-bootstrap.js"></script> 
<script type="text/javascript" src="assets/js/vendors/datatables/dataTables.colVis.js"></script> 
<script type="text/javascript" src="assets/js/vendors/datatables/colvis.extras.js"></script>
<script type="text/javascript" src="assets/js/vendors/datatables/column-filter.js"></script>  


<!--Datepicker--> 
<script type="text/javascript" src="assets/js/vendors/datepicker/bootstrap-datepicker.js"></script>

<!--ToDo--> 
<script type="text/javascript" src="assets/js/vendors/todos/todos.js"></script> 

<!--Main App--> 
<script type="text/javascript" src="assets/js/scripts.js"></script>

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