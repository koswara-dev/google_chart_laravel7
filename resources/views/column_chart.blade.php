@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Google Column Chart</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="column_chart" style="width:550px; height:300px;">
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <script type="text/javascript">
        var analytics = <?php echo $jenkel; ?>

        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title: 'Grafik Jenis Kelamin',
                colors: ['#3498db'],
                animation:{
                    duration: 700,
                    easing: 'linear',
                    startup: true
                },
                hAxis: {
                title: 'Jenis Kelamin',
                },
                vAxis: {
                title: 'Jumlah'
                }
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('column_chart'));
            chart.draw(data, options);
        }
    </script>
@endpush
