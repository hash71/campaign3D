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
    var all_data={{json_encode($data)}};
    var sms_pie=null,gender_pie=null,product_pie=null,sales_pie=null,sku_bar=null,sku_area=null;
    function updater()
    {
        for (var i = 0; i < sms_pie.series.length; i++) {sms_pie.series[i].remove(true);}
        sms_pie.addSeries(all_data.right_wrong[0],true);
        console.log(all_data.right_wrong);
        //.Series.update(all_data.right_wrong);
    }
    $(document).ready(function () {
      $("#switch_view").change(function(){
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
          method: 'GET',
          data:{ 'range': $("#datetimepicker1").val()},
          success: function(dt){
            all_data=dt;
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
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'Chart rotation demo'
        },
        subtitle: {
            text: 'Test options by dragging the sliders below'
        },
        plotOptions: {
            column: {
                depth: 25
            }
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
            text: 'US and USSR nuclear stockpiles'
        },
        subtitle: {
            text: 'Source: <a href="http://thebulletin.metapress.com/content/c4120650912x74k7/fulltext.pdf">' +
                'thebulletin.metapress.com</a>'
        },
        xAxis: {
            allowDecimals: false,
            labels: {
                formatter: function () {
                    return this.value; // clean, unformatted number for year
                }
            }
        },
        yAxis: {
            title: {
                text: 'Nuclear weapon states'
            },
            labels: {
                formatter: function () {
                    return this.value / 1000 + 'k';
                }
            }
        },
        tooltip: {
            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
        },
        plotOptions: {
            area: {
                pointStart: 1940,
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