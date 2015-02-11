<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
  <meta name="author" content="DazeinCreative">
  <meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>

  <link href="../assets/css/datepicker.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/styles.css" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <script type="text/javascript" src="../assets/js/vendors/modernizr/modernizr.custom.js"></script>
</head>

<body>

  <!--Smooth Scroll-->
  <div class="smooth-overflow">
    <!--Navigation-->
<nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="{{URL::to('messages/index')}}"><img src="../assets/images/logo1.png"></a> 
      
      
      
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
          
          <li>{{link_to('percentage/index','Percentage Report')}}</li>
          <li>{{link_to('table/index','Full Report')}}</li>
          <li>{{link_to('bplist','BP List')}}</li>
          <li>{{link_to('timeline','Live Feed')}}</li>
        </ul>
      </div>
      <!--/MainMenu-->
      
      <div class="content-wrapper"> 
        <!--Content Wrapper--><!--Horisontal Dropdown-->
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>
        
        <!--Breadcrumb-->
        <div class="breadcrumb clearfix">
          <ul>
            <li><a href="{{URL::to('messages/index')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{URL::to('messages/index')}}">Dashboard</a></li>
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
                    <h1>{{$bp->name}}</h1>
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
                                <td>{{$bp->name}}</td>
                                <td><strong>Mobile:</strong></td>
                                <td>{{$bp->mobile}}</td>
                              </tr>
                              <tr>
                                <td><strong>Region:</strong></td>
                                <td>{{$bp->region}}</td>
                                <td><strong>District:</strong></td>
                                <td>{{$bp->district}}</td>
                              </tr>
                              <tr>
                                <td><strong>Team:</strong></td>
                                <td>{{$bp->team}}</td>
                                <td><strong>LSA Code:</strong></td>
                                <td>{{$bp->lsa_code}}</td>
                              </tr>
                            </table>
                          </div>

                          <div class="tab-pane" id="activity">
                            <div class="profile-header">Activity</div>
                            <ul class="tmtimeline">

                              @foreach($messages as $message)

                              <li>
                                <time class="tmtime" datetime="2013-04-10 18:30"><span>{{date('Y-m-d',strtotime($message->created_at))}}</span> <span>{{date('h-i',strtotime($message->created_at))}}</span></time>
                                @if($message->error)
                                <div class="tmicon bg-red fa-envelope"></div>                        
                                @else
                                <div class="tmicon bg-green fa-envelope"></div>                        
                                @endif
                                <div class="tmlabel">
                                  <h2>
                                    {{DB::table('bp_info')->where('mobile',$message->bp_mobile)->pluck('name')}}--
                                    {{$message->bp_mobile}}
                                  </h2>

                                  @if($message->error)
                                  <p><strong>Error</strong></p>
                                  <?php $x = json_decode($message->error);?>

                                  @foreach($x as $y)
                                  {{"#".$y}}
                                  @endforeach

                                  
                                  
                                  @else
                                  <p>Name: {{$message->customer_name}} | Age: {{$message->age}} | Gender: {{$message->gender}} | Mobile: {{$message->customer_mobile}} | Upazilla/Thana: {{$message->thana_code}} | District: {{DB::table('thana')->where('thana_code',$message->thana_code)->pluck('district')}} | Division: {{DB::table('thana')->where('thana_code',$message->thana_code)->pluck('division')}} | Education: {{DB::table('education_info')->where('id',$message->education_id)->pluck('name')}} | Occupation: {{DB::table('occupation')->where('id',$message->id)->pluck('occupation_name')}} | Coupon: {{$message->coupon_code}} | Used Product: {{DB::table('currently_used_product')->where('id',$message->currently_used_product_table_id)->pluck('product')}}</p>
                                  <p>FAL: {{$message->FAL}} | PDF: {{$message->PDF}}| PWB: {{$message->PWB}}| PNS: {{$message->PNS}}| PPC: {{$message->PPC}}| DBM: {{$message->DBM}}</p>
                                  @endif
                                  
                                  
                                </div>
                              </li>
                              @endforeach
                              
                            </ul>
                          </div>


                          <div class="tab-pane" id="errorActivity">
                            <div class="profile-header">Error Activity</div>
                            <ul class="tmtimeline">
                             @foreach($messages as $message)

                             @if(json_decode($message->error))
                             
                             <li>
                              <time class="tmtime" datetime="{{$message->created_at}}"><span>{{date('Y-m-d',strtotime($message->created_at))}}</span> <span>{{date('h:i:s',strtotime($message->created_at))}}</span></time>
                              <div class="tmicon bg-red fa-times"></div>
                              <div class="tmlabel">
                                <h2>Error</h2>
                                <?php $e = json_decode($message->error);
                                    foreach ($e as $key => $value) {
                                      echo "<p>".$key."::".$value."</p>";      
                                    }
                                 ?>
                                
                                <h2>Message</h2>
                                <p>{{$message->full_message?$message->full_message:"This is the full message"}}</p>
                              </div>
                            </li>

                            @endif                           

                            @endforeach
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
              <button type="button" class="btn btn-default" id="yesilock">{{link_to('logout','Ok')}}</button>
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