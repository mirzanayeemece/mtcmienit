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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customscript')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

@endsection