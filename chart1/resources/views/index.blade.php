<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello Developer</h1>
    <canvas id="myChart" height="100px"></canvas>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // var labels =  {{ Js::from($labels) }};
        // var users =  {{ Js::from($data) }};

        var labels =  {{ Js::from($labels) }};
        var storage =  {{ Js::from($data) }};

        // var yValues = [50,60,70,80,20,10,110,120,130,140,150];
        // var xValues = ['Jan','Feb', 'Mar', 'Apr', 'Mei'];

        const data = {
        labels: labels,
        datasets: [{
        label: 'My First dataset',
        backgroundColor: 'black',
        borderColor: 'green',
        data: users,
        }]
        };

        const config = {
        type: 'line',
        data: data,
        options: {}
        };

        const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
    </script>
</body>
</html>