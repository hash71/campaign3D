<!--Scripts--> 
<!--JQuery--> 
<script type="text/javascript" src="../assets/js/vendors/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/jquery/jquery-ui.min.js"></script> 

<script>
$('.powerwidget > header').on('touchstart', function(event){});
</script>

<!--Fullscreen--> 
<script type="text/javascript" src="../assets/js/vendors/fullscreen/screenfull.min.js"></script>

<!--Sparkline--> 
<script type="text/javascript" src="../assets/js/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--Horizontal Dropdown--> 
<script type="text/javascript" src="../assets/js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/classie/classie.js"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="../assets/js/vendors/powerwidgets/powerwidgets.min.js"></script>  

<!--Calendar--> 
<script type="text/javascript" src="../assets/js/vendors/fullcalendar/fullcalendar.min.js"></script> 
<script type="text/javascript" src="../assets/js/vendors/fullcalendar/gcal.js"></script> 

<!--Bootstrap--> 
<script type="text/javascript" src="../assets/js/vendors/bootstrap/bootstrap.min.js"></script> 

<!--Datepicker-->
<script type="text/javascript" src="../assets/js/vendors/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../assets/js/vendors/datepicker/moment.js"></script>
<script type="text/javascript" src="../assets/js/vendors/datepicker/daterangepicker.js"></script>
<!--ToDo--> 
<script type="text/javascript" src="../assets/js/vendors/todos/todos.js"></script> 
<!--High Chart--> 
<script src="../assets/js/chart/highcharts.js"></script>
<script src="../assets/js/chart/highcharts-3d.js"></script>
<script src="../assets/js/chart/modules/exporting.js"></script>
<!--Main App--> 
<script type="text/javascript" src="../assets/js/scripts.js"></script>



<script type="text/javascript">
    // When the document is ready
    var months = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
    var all_data={{json_encode($data)}};
    var sms_pie=null,gender_pie=null,product_pie=null,sales_pie=null,sku_bar=null,sku_area=null;
    function updater()
    {
        //SMS
        for (var i = 0; i < sms_pie.series.length; i++) {sms_pie.series[i].remove(true);}
        sms_pie.addSeries(all_data.right_wrong[0],true);
        //GENDER
        for (var i = 0; i < gender_pie.series.length; i++) {gender_pie.series[i].remove(true);}
        gender_pie.addSeries(all_data.gender[0],true);
        // Product
        for (var i = 0; i < product_pie.series.length; i++) {product_pie.series[i].remove(true);}
        product_pie.addSeries(all_data.used_product[0],true);
        // Sales
        for (var i = 0; i < sales_pie.series.length; i++) {sales_pie.series[i].remove(true);}
        sales_pie.addSeries(all_data.yes_no[0],true);

        //Bar
         for(var i=0;i<sku_bar.series.length;i++)
         {
            sku_bar.series[i].setData(all_data.bar[i].data);
         }
         sku_bar.redraw();
        //Trend
        for(var i=0;i<sku_area.series.length;i++){ sku_area.series[i].setData(all_data.trend[i].data);
         }
         sku_area.redraw();
    }
    $(document).ready(function () {
      $("#switch_view").change(function(){
            sku_area.redraw();
            sku_bar.redraw();
          if($("#switch_view").val()==1)
                {
                    $("#morrisasline").hide();
                    $("#morris-stacked-bar").show();
                }
                else
                {
                    $("#morrisasline").show();
                    $("#morris-stacked-bar").hide();
                }
      });
                     
      $('#datetimepicker1').daterangepicker(
      {
        format: 'YYYY-MM-DD'
      },
      function()
      { 
        $("#powerwidgets").css({ opacity: 0.5 });
        $.ajax({
          url: '#', 
          //dataType : 'json',    
          method: 'GET',
          data:{ 'range': $("#datetimepicker1").val()},
          success: function(dt){
            // console.log(dt);
           all_data = dt;
            
            updater();
            $("#powerwidgets").css({ opacity: 1 });
          }
        });

      });
      /// SMS PIE
      sms_pie = new Highcharts.Chart(
      {
        credits:
        {
          enabled:false
        },
        chart: {
            renderTo: 'pie_sms',
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:["#58E271","#BF304A"],
        title: {
            text: 'SMS Error Ratio'
        },
        tooltip: {
            pointFormat: '{series.name}- value:<b>{point.y:.1f}</b> Percentage <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: all_data.right_wrong
    });
    /// Genderwise Customer
    gender_pie = new Highcharts.Chart({
        credits:
        {
          enabled:false
        },
        chart: {
            renderTo:'gender_pie',
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:["#13D8D9","#D9299B"],
        title: {
            text: 'GENDER Ratio'
        },
        tooltip: {
            pointFormat: '{series.name}- value:<b>{point.y:.1f}</b> Percentage <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: all_data.gender
    });
  /// Genderwise Customer
    product_pie= new Highcharts.Chart({
        credits:
        {
          enabled:false
        },
        chart: {
            renderTo:'product_pie',
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Used Product Ratio'
        },
        tooltip: {
            pointFormat: '{series.name}- value:<b>{point.y:.1f}</b> Percentage <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: all_data.used_product
    });

    /// Sales Pie
    sales_pie= new Highcharts.Chart({
        credits:
        {
          enabled:false
        },
        chart: {
            renderTo:'sales_pie',
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:["#58E271","#BF304A"],
        title: {
            text: 'Sales Ratio'
        },
        tooltip: {
            pointFormat: '{series.name}- value:<b>{point.y:.1f}</b> Percentage <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: all_data.yes_no
    });
    //// SKU Bar
    sku_bar = new Highcharts.Chart({
        credits:
        {
          enabled:false
        },
        chart: {
            renderTo: 'sku_bar',
            type: 'column',
            margin: 100,
            options3d: {
                enabled: true,
                alpha: 0,
                beta: 0,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'SKU Wise Total Sales'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: ['SKU Wise 3D Bar Chart']
        },
        series: all_data.bar

    });

    function showValues() {
        $('#R0-value').html(sku_bar.options.chart.options3d.alpha);
        $('#R1-value').html(sku_bar.options.chart.options3d.beta);
    }

    // Activate the sliders
    $('#R0').on('change', function () {
        sku_bar.options.chart.options3d.alpha = this.value;
        //showValues();
        sku_bar.redraw(false);
    });
    $('#R1').on('change', function () {
        sku_bar.options.chart.options3d.beta = this.value;
        //showValues();
        sku_bar.redraw(false);
    });
    // SKU are
       sku_area=  new Highcharts.Chart({
         credits:
        {
          enabled:false
        },
        chart: {
            type: 'line',
            renderTo:'sku_area'
        },
        title: {
            text: 'Sales Trend'
        },
        xAxis: {
            title:
            {
                text: "Date Wise Sales Trend"
            },
            allowDecimals: true,
            labels: {
                rotation: -45,
                formatter: function () {
                    var tmp=new Date(this.value*1000);
                    return tmp.getDate()+'-'+months[tmp.getMonth()];
                }
            }
        },
        yAxis: {
            title: {
                text: 'Quantity'
            },
            min: 0
        },
        tooltip: {
            formatter: function () {
                    //console.log(this.point);
                   // return this.point.x;
                     var tmp=new Date(this.point.x*1000);
                     return tmp.getDate()+'-'+months[tmp.getMonth()]+'<br/><b>'+this.series.name+':</b>'+this.point.y;
                }
            // headerFormat: '<small>{point.key}</small><br/>',
            // pointFormat: '{series.name} Sell <b>{point.y:,.0f}</b>'
        },
        plotOptions: {
            area: {
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        },
        series: all_data.trend
    });

$("#morris-stacked-bar").hide();
    });
</script>


<!--/Scripts-->