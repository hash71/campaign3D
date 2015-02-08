<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile</title>

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
        <li><a class="active" href="index.html" title="Dashboard"><i class="entypo-briefcase"></i><span> Dashboard</span></a></li>
      </ul>
    </div>
    <!--/MainMenu-->
    
      <div class="content-wrapper"> 
        <!--Content Wrapper--><!--Horisontal Dropdown-->
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>
        
        <!--Breadcrumb-->
        <div class="breadcrumb clearfix">
          <ul>
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="index.html">Dashboard</a></li>
            <li class="active">Profile</li>
          </ul>
        </div>
        <!--/Breadcrumb-->
        

        
        <!-- Widget Row Start grid -->
        <div class="row" id="powerwidgets">
          <div class="col-md-12 bootstrap-grid"> 
            
            <!-- New widget -->
            
            <div class="powerwidget cold-grey" id="profile" data-widget-editbutton="false">
              <header>
                <h2>Profile Page</h2>
              </header>
              <div class="inner-spacer"> 
                
                <!--Profile-->
                <div class="user-profile">
                  <div class="main-info">
                    <div class="user-img">
                      <i class="fa fa-user fa-4x"></i>
                    </div>
                    <h1>BP Name</h1>
                    <!-- Followers: 451 | Friends: 45 | Items: 22 --> </div>
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="item item1 active"> </div>
                    </div>
                  </div>
                  <div class="user-profile-info">
                    <div class="tabs-white">
                      <ul id="myTab" class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#home" data-toggle="tab">About</a></li>
                        <li><a href="#activity" data-toggle="tab">Activity</a></li>
                        <li><a href="#errorActivity" data-toggle="tab">Error Activity</a></li>

                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div class="tab-pane in active" id="home">
                          <div class="profile-header">About</div>
                          <table class="table">
                            <tr>
                              <td><strong>Name:</strong></td>
                              <td>Jon Doe</td>
                              <td><strong>Mobile:</strong></td>
                              <td>23 4554 453</td>
                            </tr>
                            <tr>
                              <td><strong>Region:</strong></td>
                              <td>Region Name</td>
                              <td><strong>District:</strong></td>
                              <td>District Name</td>
                            </tr>
                            <tr>
                              <td><strong>Team:</strong></td>
                              <td>Team Name</td>
                              <td><strong>LSA Code:</strong></td>
                              <td>234985AeIIP</td>
                            </tr>
                          </table>
                        </div>

                        <div class="tab-pane" id="activity">
                          <div class="profile-header">Activity</div>
                          <ul class="tmtimeline">
                            <li>
                              <time class="tmtime" datetime="2013-04-10 18:30"><span>4/10/13</span> <span>18:30</span></time>
                              <div class="tmicon bg-green fa-check"></div>
                              <div class="tmlabel">
                                <h2>Added photo</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus turpis quis neque imperdiet, eleifend feugiat erat consectetur. Donec eget fringilla lorem, eget auctor sapien.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-11T12:04"><span>4/11/13</span> <span>12:04</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Added comment</h2>
                                <p>Caulie dandelion maize lentil collard greens radish arugula 
                                  sweet pepper water spinach kombu courgette lettuce. Celery coriander 
                                  bitterleaf epazote radicchio shallot winter purslane collard greens 
                                  spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea 
                                  brussels sprout garlic kohlrabi.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-13 05:36"><span>4/13/13</span> <span>05:36</span></time>
                              <div class="tmicon bg-green fa-check"></div>
                              <div class="tmlabel">
                                <h2>Drinked tea</h2>
                                <p>Nam tincidunt neque nec est bibendum, ut cursus nulla egestas. Etiam at mi vel sem viverra euismod. Nam scelerisque metus urna, ut facilisis augue dictum quis.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-15 13:15"><span>4/15/13</span> <span>13:15</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Uploaded files to cloud</h2>
                                <p> Donec fringilla metus dui, placerat pulvinar lectus elementum ullamcorper. Quisque dignissim nulla at purus volutpat placerat. In a justo purus.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-16 21:30"><span>4/16/13</span> <span>21:30</span></time>
                              <div class="tmicon bg-green fa-check"></div>
                              <div class="tmlabel">
                                <h2>Falling in love</h2>
                                <p>Fusce pretium nibh eros, at adipiscing neque euismod eget. Suspendisse sollicitudin justo vel urna sollicitudin, sed pellentesque dolor ultricies.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-17 12:11"><span>4/17/13</span> <span>12:11</span></time>
                              <div class="tmicon bg-green fa-check"></div>
                              <div class="tmlabel">
                                <h2>Giving Some Likes</h2>
                                <p> Fusce feugiat ornare libero sed gravida. Aenean metus est, suscipit nec condimentum ac, facilisis eget lorem. Suspendisse rutrum lorem orci. Ut in ligula neque. Phasellus a enim at leo pellentesque dapibus. Integer dignissim sem eu venenatis facilisis. Sed quis neque nec lectus gravida euismod. Nam sollicitudin, nisl nec lacinia blandit, magna felis pharetra enim, et lacinia metus ipsum et est.</p>
                              </div>
                            </li>
                          </ul>
                        </div>


                        <div class="tab-pane" id="errorActivity">
                          <div class="profile-header">Error Activity</div>
                          <ul class="tmtimeline">
                            <li>
                              <time class="tmtime" datetime="2013-04-10 18:30"><span>4/10/13</span> <span>18:30</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Added photo</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus turpis quis neque imperdiet, eleifend feugiat erat consectetur. Donec eget fringilla lorem, eget auctor sapien.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-11T12:04"><span>4/11/13</span> <span>12:04</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Added comment</h2>
                                <p>Caulie dandelion maize lentil collard greens radish arugula 
                                  sweet pepper water spinach kombu courgette lettuce. Celery coriander 
                                  bitterleaf epazote radicchio shallot winter purslane collard greens 
                                  spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea 
                                  brussels sprout garlic kohlrabi.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-13 05:36"><span>4/13/13</span> <span>05:36</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Drinked tea</h2>
                                <p>Nam tincidunt neque nec est bibendum, ut cursus nulla egestas. Etiam at mi vel sem viverra euismod. Nam scelerisque metus urna, ut facilisis augue dictum quis.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-15 13:15"><span>4/15/13</span> <span>13:15</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Uploaded files to cloud</h2>
                                <p> Donec fringilla metus dui, placerat pulvinar lectus elementum ullamcorper. Quisque dignissim nulla at purus volutpat placerat. In a justo purus.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-16 21:30"><span>4/16/13</span> <span>21:30</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Falling in love</h2>
                                <p>Fusce pretium nibh eros, at adipiscing neque euismod eget. Suspendisse sollicitudin justo vel urna sollicitudin, sed pellentesque dolor ultricies.</p>
                              </div>
                            </li>
                            <li>
                              <time class="tmtime" datetime="2013-04-17 12:11"><span>4/17/13</span> <span>12:11</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Giving Some Likes</h2>
                                <p> Fusce feugiat ornare libero sed gravida. Aenean metus est, suscipit nec condimentum ac, facilisis eget lorem. Suspendisse rutrum lorem orci. Ut in ligula neque. Phasellus a enim at leo pellentesque dapibus. Integer dignissim sem eu venenatis facilisis. Sed quis neque nec lectus gravida euismod. Nam sollicitudin, nisl nec lacinia blandit, magna felis pharetra enim, et lacinia metus ipsum et est.</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!--/Profile--> 
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