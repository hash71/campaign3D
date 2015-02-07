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
    var sms_pie=null,gender_pie=null,product_pie=null,sales_pie=null,sku_bar=null,sku_area=null;
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

          }
        });

      });
      /// SMS PIE
      sms_pie=$('#pie_sms').highcharts({
        credits:
        {
          enabled:false
        },
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:["#4EB82A","#DA2B2B"],
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
        series: [{
            type: 'pie',
            name: 'SMS',
            data: [
                ['Correct',   40],
                ['Wrong',       3]
            ]
        }]
    });
    /// Genderwise Customer
          gender_pie=$('#gender_pie').highcharts({
        credits:
        {
          enabled:false
        },
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:["#4EB82A","#DA2B2B"],
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
        series: [{
            type: 'pie',
            name: 'SMS',
            data: [
                ['Correct',   40],
                ['Wrong',       3],
            ]
        }]
    });
  /// Genderwise Customer
          product_pie=$('#product_pie').highcharts({
        credits:
        {
          enabled:false
        },
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:["#4EB82A","#DA2B2B"],
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
        series: [{
            type: 'pie',
            name: 'SMS',
            data: [
                ['Correct',   40],
                ['Wrong',       3]
            ]
        }]
    });

    /// Sales Pie
          sales_pie=$('#sales_pie').highcharts({
        credits:
        {
          enabled:false
        },
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:["#4EB82A","#DA2B2B"],
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
        series: [{
            type: 'pie',
            name: 'SMS',
            data: [
                ['Correct',   40],
                ['Wrong',       3]
            ]
        }]
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
        series: [
          {
            name:'SKU1',
            data: [29.9]
          },
          {
            name:'SKU2',
            data: [1.9]
          },
          {
            name:'SKU3',
            data: [13.9]
          },
          {
            name:'SKU4',
            data: [44.9]
          },
          {
            name:'SKU5',
            data: [33.9]
          },
          {
            name:'SKU6',
            data: [133.9]
          }
        ]
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
       sku_area= $('#sku_area').highcharts({
         credits:
        {
          enabled:false
        },
        chart: {
            type: 'line'
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
        series: [{
            name: 'SKU 1',
            data: [6,4,2,3,3,6,2,9,2,4]
        }, 
        {
            name: 'SKU 2',
            data: [8,4,2,3,3,6,2,9,2,4]
        }, 
        {
            name: 'SKU 3',
            data: [0,4,2,3,3,6,2,9,2,4]
        }, 
        {
            name: 'SKU 4',
            data: [3,4,2,3,3,6,2,9,2,4]
        }, 
        {
            name: 'SKU 5',
            data: [5,4,2,2,3,6,2,9,2,4]
        }, 
        {
            name: 'SKU 6',
            data: [3,4,2,0,3,6,2,9,2,4]
        }
        ]
    });

$("#morris-stacked-bar").hide();
    });
</script>


<!--/Scripts-->