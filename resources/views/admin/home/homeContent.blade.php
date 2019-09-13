@extends('admin.master')

@section('content')
<div class="container">

    {{-- <p>{{ Auth::user()->name }}, You are logged in!</p> --}}

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- 1st row --}}

                    <div class="row">

                    <div class="item row-eq-height col-md-4">
                      <div id="piechart" style="width: 300px; height: 200px;"></div>
                    </div> 

                    <div class="item row-eq-height col-md-4">
                        <div class="row">
                      <div class="info-box-icon bg-aqua col-md-3">
                        <span class=""><i class="fa fa-users"></i></span>
                      </div>
                      <div class="info-box-content col-md-6">
                        <p>Employees</p>
                        <p id="employees">14</p>
                        <p><a href="#">Add New</a></p>
                      </div>
                      </div>
                    </div> 

                    <div class="item row-eq-height col-md-4">
                        <div class="row">
                      <div class="info-box-icon bg-red col-md-3">
                        <span class=""><i class="fa fa-bed"></i></span>
                      </div>
                      <div class="info-box-content col-md-6">
                        <p>Leave Application</p>
                        <p id="lvapp">2</p>
                        <p><a href="#">View All</a></p>
                      </div>
                      </div>
                    </div>              

                    </div> 

                    {{-- 2nd row --}}

                    <div class="row">

                    <div class="item row-eq-height col-md-6">
                        <div id="top_x_div" style="width: 400px; height: 300px;"></div>
                    </div> 

                    <div class="item row-eq-height col-md-6">
                        <div id="chart_div" style="width: 400px; height: 300px;"></div>
                    </div>              

                    </div> 

                    <p><br></p>

                    {{-- 3rd row --}}

                    <div class="row">

                    <div class="item row-eq-height col-md-6">
                        <div id="barchart_material" style="width: 400px; height: 300px;"></div>
                    </div> 

                    <div class="item row-eq-height col-md-6">
                        
                    </div>              

                    </div> 
                    {{-- row ends --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customscript')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{-- pie chart --}}
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'Employee Attendance Status'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    {{-- bar chart --}}
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);

        var options = {
          title: 'Salary Breakdown by Department',
          width: 400,
          legend: { position: 'none' },
          chart: { title: 'Salary Breakdown by Department',
                   //subtitle: 'popularity by percentage' 
                 },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>

    {{-- column chart --}}
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Galaxy', 'Distance', 'Brightness'],
          ['Canis Major Dwarf', 8000, 23.3],
          ['Sagittarius Dwarf', 24000, 4.5],
          ['Ursa Major II Dwarf', 30000, 14.3],
          ['Lg. Magellanic Cloud', 50000, 0.9],
          ['Bootes I', 60000, 13.1]
        ]);

        var materialOptions = {
          width: 400,
          chart: {
            title: 'Department Wise Employee',
            //subtitle: 'distance on the left, brightness on the right'
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'parsecs'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 400,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Nearby galaxies - distance on the left, brightness on the right',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'parsecs'},
            1: {title: 'apparent magnitude'}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>

    {{-- 2nd bar chart --}}
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Salary Range Breakdown',
            //subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

@endsection