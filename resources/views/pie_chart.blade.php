@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Google Pie Chart</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="pie_chart" style="width:500px; height:300px;">
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <script type="text/javascript">
        var analytics = <?php echo $jenkel; ?>

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title: 'Persentase Jenis Kelamin',
                colors: ['#3498db','#e74c3c']
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
@endpush
