<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
  <meta name="author" content="DazeinCreative">
  <meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Timeline</title>

  <link href="assets/css/datepicker.css" rel="stylesheet" type="text/css">
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <script type="text/javascript" src="assets/js/vendors/modernizr/modernizr.custom.js"></script>
</head>

<body>

  <!--Smooth Scroll-->
  <div class="smooth-overflow">
    <!--Navigation-->
<nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="{{URL::to('messages/index')}}"><img src="assets/images/logo1.png"></a> 
      
   
      
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
          <li>{{link_to('percentage/index','Percentage Report')}}</li>
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
        <li class="active">Live Feed</li>
      </ul>
    </div>
    <!--/Breadcrumb--> 
    
    
    <!-- Widget Row Start grid -->
    <div class="row" id="powerwidgets">

      <div class="col-md-12 bootstrap-grid">
        <!-- New widget -->
        <div class="powerwidget blue" id="timelineexample" data-widget-editbutton="false">
          <header>
            <h2>TimeLine<small>Example</small></h2>
          </header>
          <div class="inner-spacer">
            <div class="activity-block">
              <ul class="tmtimeline" id="smsLine">

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
                    <p>Age: {{$message->age}} | Gender: {{$message->gender}} | Mobile: {{$message->customer_mobile}} | Upazilla/Thana: {{$message->thana_code}} | District: {{DB::table('thana')->where('thana_code',$message->thana_code)->pluck('district')}} | Division: {{DB::table('thana')->where('thana_code',$message->thana_code)->pluck('division')}} | Education: {{DB::table('education_info')->where('id',$message->education_id)->pluck('name')}} | Occupation: {{DB::table('occupation')->where('id',$message->id)->pluck('occupation_name')}} | Coupon: {{$message->coupon_code}} | Used Product: {{DB::table('currently_used_product')->where('id',$message->currently_used_product_table_id)->pluck('product')}}</p>
                    <p>FAL: {{$message->FAL}} | PDF: {{$message->PDF}}| PWB: {{$message->PWB}}| PNS: {{$message->PNS}}| PPC: {{$message->PPC}}| DBM: {{$message->DBM}}</p>
                    @endif
                    
                    
                  </div>
                </li>
                @endforeach
                
              </ul>
            </div>
          </div>
        </div>
        <!-- End Widget -->
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

  <!--Bootstrap--> 
  <script type="text/javascript" src="assets/js/vendors/bootstrap/bootstrap.min.js"></script>



  <!--Main App--> 
  <script type="text/javascript" src="assets/js/scripts.js"></script>
  <script type="text/javascript" src="assets/js/vendors/ionsound/ion.sound.js"></script>
  <script type="text/javascript">

    function checker()
    {
      $.ajax({
        url: '#', 
        method: 'GET',
        success: function(dt){
          if(dt!='') {
            ion.sound.play("bell_ring");
            $("#smsLine").prepend(dt);
            $("#ajax_data").slideUp(1).slideDown(1000);
          }
        }
      });
      setTimeout(function() {
        checker();
      }, 5000);
    }
    $(function(){

      ion.sound({
        sounds: [
        {name: "beer_can_opening"},
        {name: "bell_ring"}
        ],
        path: "assets/js/vendors/ionsound/sounds/",
        preload: true,
        volume: 1.0
      });
    });
    checker();

  </script>

  <!--/Scripts-->

</body>
</html>