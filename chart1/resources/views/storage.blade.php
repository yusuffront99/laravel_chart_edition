@extends('layouts.app')

@section('container')
    <div class="container mt-4">
        <div class="row">
            <h4 class="text-center text-primary">Chart JS & Laravel </h4>
            <div class="col-md-8">
                <button class="btn btn-sm btn-success" id="click">Hello</button>
            </div>
            <div class="row mt-3">
                <div id = "container" style = "width: 1000px; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
@endsection

@push('add-script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    var storage_levels = {{ Js::from($levels) }};
    var storage_dates = {{ Js::from($dates) }};

    Highcharts.chart('container', {
        title: {
            text: 'New User Growth, 2020'
        },
        subtitle: {
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories : storage_dates
        },

        yAxis: {
            title: {
                text: 'Level'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            type: 'line',
            name: 'Storage Tank',
            data: storage_levels
        },{
            type: 'line',
            name: 'Daily Tank',
            data: [1,2,3,4,5,6,7,8,9,10]
        }
        ],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
@endpush