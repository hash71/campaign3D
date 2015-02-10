@extends('layouts.default.default') 
@section('content')
  <div class="content-wrapper">
      <!-- 
      Please Dont Delete This portion  <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>  
    -->
    <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>

    <!--Breadcrumb-->
    <div class="breadcrumb clearfix">
      <ul>
        <li><a href="{{URL::to('messages/index')}}"><i class="fa fa-home"></i></a></li>
        <!-- <li><a href="{{URL::to('messages/index')}}">Dashboard</a></li> -->
        <li class="active">Dashboard</li>
      </ul>
    </div>
    <!--/Breadcrumb--> 

    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-3">
        <div class="form-group">
          <select class="form-control" name="" id="switch_view">            
            <option value="2">Sales Trend</option>
            <option value="1">SKU Wise Bar Chart</option>
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
          <div id="sku_bar"></div>
          <div id="sliders">
            <table>
              <tr><td>Alpha Angle</td><td><input id="R0" type="range" min="0" max="45" value="15"/></td></tr>
                <tr><td>Beta Angle</td><td><input id="R1" type="range" min="0" max="45" value="15"/></td></tr>
            </table>
          </div>
        </div>
      </div>
      <!-- /New widget --> 
      <!-- New widget -->
      <div class="powerwidget cold-grey" id="morrisasline" data-widget-editbutton="false">
        <header>
          <h2>Sales Trend<small>By Date</small></h2>
        </header>
        <div class="inner-spacer">
          <div id="sku_area"></div>
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
          <div id="pie_sms" style="height: 400px"></div>
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
          <div id="gender_pie"></div>
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
          <div id="product_pie"></div>
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
          <div id="sales_pie"></div>
        </div>
      </div>
      <!-- End Widget -->
    </div>
    <!-- /Inner Row Col-md-4 --> 
  </div>
  <!-- /Widgets Row End Grid--> 
</div>
@stop