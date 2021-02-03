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
<?php include('footer.php'); ?>