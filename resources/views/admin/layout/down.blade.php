<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('asset/img/katanaicon.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/atlantis.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/demo.css') }}">
</head>

<body >

	@yield('content')
    <script src="{{ asset('asset/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    
    <script src="{{ asset('asset/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="{{ asset('asset/js/inser.js') }}"></script>
    <script src="{{ asset('asset/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/core/bootstrap.min.js.map') }}"></script>
    <script src="{{ asset('asset/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}">
    </script>
    <script src="{{ asset('asset/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}">
    </script>
    <script src="{{ asset('asset/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}">
    </script>
    <script src="{{ asset('asset/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}">
    </script>
    <script src="{{ asset('asset/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('asset/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('asset/js/atlantis.min.js') }}"></script>
    <script src="{{ asset('asset/js/setting-demo.js') }}"></script>
    <script src="{{ asset('asset/js/demo.js') }}"></script>
    <script>
         Circles.create({
            id:'circles-1',
            radius:45,
            value:60,
            maxValue:100,
            width:7,
            text: 5,
            colors:['#f1f1f1', '#FF9E27'],
            duration:400,
            wrpClass:'circles-wrp',
            textClass:'circles-text',
            styleWrapper:true,
            styleText:true
        })

        Circles.create({
            id:'circles-2',
            radius:45,
            value:70,
            maxValue:100,
            width:7,
            text: 36,
            colors:['#f1f1f1', '#2BB930'],
            duration:400,
            wrpClass:'circles-wrp',
            textClass:'circles-text',
            styleWrapper:true,
            styleText:true
        })

        Circles.create({
            id:'circles-3',
            radius:45,
            value:40,
            maxValue:100,
            width:7,
            text: 12,
            colors:['#f1f1f1', '#F25961'],
            duration:400,
            wrpClass:'circles-wrp',
            textClass:'circles-text',
            styleWrapper:true,
            styleText:true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets : [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines : {
                            drawBorder: false,
                            display : false
                        }
                    }],
                    xAxes : [ {
                        gridLines : {
                            drawBorder: false,
                            display : false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105,103,123,100,95,105,115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>

</body>