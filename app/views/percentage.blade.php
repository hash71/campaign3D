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

  @stop