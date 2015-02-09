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
      <li>{{link_to('bplist','BP List')}}</li>
      <li>{{link_to('timeline','Timeline')}}</li>
    </ul>
    </div>
    <!--/MainMenu-->