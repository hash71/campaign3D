<!DOCTYPE html>


@include('layouts.default.metaHead')

<body>

<!--Smooth Scroll-->
<div class="smooth-overflow">

@include('layouts.default.navigation')
  
  
    
@yield('content')

      <!-- / Content Wrapper --> 
  </div>
  <!--/MainWrapper-->
</div>
<!--/Smooth Scroll-->

@include('layouts.default.modals')

@include('layouts.default.scripts')


</body>
</html>