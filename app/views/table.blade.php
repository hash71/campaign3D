<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ORB</title>

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
            <li class="active">Data Table</li>
          </ul>
        </div>
        <!--/Breadcrumb--> 
        
          
        <!-- Widget Row Start grid -->
        <div class="row" id="powerwidgets">
                          
          <div class="col-md-12 bootstrap-grid"> 
            
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="datatable-filter-column" data-widget-editbutton="false">
              <header>
                <h2>Datatable<small>Columns Filtering</small></h2>
              </header>
              <div class="inner-spacer">
                <div class="table-overflow">
                <div class="table-responsive">
                <table class="display table table-striped table-hover" id="table-2">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Upazilla/Thana</th>
                      <th>Division</th>
                      <th>District</th>
                      <th>Education</th>
                      <th>Occupation</th>
                      <th>Coupon No</th>
                      <th>Currently Used Product</th>
                      <th>Sales Status</th>
                      <th>Fair &amp; Lovely Facewash 50g</th>
                      <th>Pond's Daily Facewash 60g</th>
                      <th>Pond's White Beauty Facewash 50g</th>
                      <th>Pond's Nourishing Scrub Facewash 60g</th>
                      <th>Pond's Pimple Clear White Facewash 50g</th>
                      <th>Dove Beauty Moisture Facewash 50g</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($datas as $data)
                    <tr>
                      <td>{{$data->customer_name}}</td>
                      <td>{{$data->age}}</td>
                      <td>{{$data->gender}}</td>
                      <td>{{$data->customer_mobile}}</td>
                      
                      <td>{{$tmp = DB::table('thana')->where('thana_code',$data->thana_code)->pluck('thana_name')}}</td>

                      <td>{{$tmp = DB::table('thana')->where('thana_code',$data->thana_code)->pluck('division')}}</td>
                      
                      <td>{{$tmp = DB::table('thana')->where('thana_code',$data->thana_code)->pluck('district')}}</td>

                      <td>{{$tmp = DB::table('education_info')->where('id',$data->education_id)->pluck('name')}}</td>
                      
                      <td>{{$tmp = DB::table('occupation')->where('id',$data->occupation_id)->pluck('occupation_name')}}</td>

                      <td>{{$data->coupon_code}}</td>
                      <td>{{$tmp = DB::table('currently_used_product')->where('id',$data->currently_used_product_table_id)->pluck('product')}}</td>
                     
                      <td>{{$data->sales}}</td>
                      
                      <td>{{$data->FAL}}</td>
                      <td>{{$data->PDF}}</td>
                      <td>{{$data->PWB}}</td>
                      <td>{{$data->PNS}}</td>
                      <td>{{$data->PPC}}</td>
                      <td>{{$data->DBM}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Upazilla/Thana</th>
                      <th>Division</th>
                      <th>District</th>
                      <th>Education</th>
                      <th>Occupation</th>
                      <th>Coupon No</th>
                      <th>Currently Used Product</th>
                      <th>Sales Status</th>
                      <th>Fair &amp; Lovely Facewash 50g</th>
                      <th>Pond's Daily Facewash 60g</th>
                      <th>Pond's White Beauty Facewash 50g</th>
                      <th>Pond's Nourishing Scrub Facewash 60g</th>
                      <th>Pond's Pimple Clear White Facewash 50g</th>
                      <th>Dove Beauty Moisture Facewash 50g</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              </div>
              </div>
            </div>
            <!-- End .powerwidget --> 
            
          </div>
          <!-- /Inner Row Col-md-12 -->
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

<!--Datatables--> 
<script type="text/javascript" src="../assets/js/vendors/datatables/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/datatables/jquery.dataTables-bootstrap.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/datatables/dataTables.colVis.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/datatables/colvis.extras.js"></script>
<script type="text/javascript" src="../assets/js/vendors/datatables/column-filter.js"></script> 

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