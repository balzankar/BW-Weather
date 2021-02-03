<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="bw-weather/css/style.css" />
</head>

<style>

</style>

<body>
    <?php include('nav.php'); ?>
    <div class="container page-start">
        <h1 class="text-center text-white">BW Weather App</h1>
        <p class="text-center text-white">Weather info from User Input Values</p>
    </div>
    <div class="pt-4 container bw-weather-card">
        <div class="pt-4 pb-4">
            <input type="text" name="city" id="city" class="form-control" placeholder="Manually Enter Location" onkeyup="setCity(this.value)">
        </div>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-5">
                    <div class="bw-weather-icon-container">
                        <div class="weather-icon justify-content-center d-flex">
                            <img src="bw-weather/icons/unknown.png" alt="">
                        </div>

                        <div class="temperature-description">
                            <p class="text-center"> - </p>
                        </div>
                    </div>
                </div>
                <div class="col-7 text-left">
                    <div class="bw-weather-info-container">
                        <div class="bw-weather-convert" title="Convert Unit">
                            <i class="fa fa-sync"></i>
                        </div>
                        <div class="temperature-value">
                            <p class="text-black">- °<span>C</span></p>
                        </div>
                        <div class="location">
                            <p class="text-dark">-</p>
                        </div>
                        <div class="more">
                            <p>-</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 bw-notification float-right"> </div>

    </div>
    <footer class="pt-4 container">
        <p class="text-white">Designed and Developed by Bal Sankar. All Rights Reserved.</p>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="bw-weather/bw-weather.js"></script>

</html>