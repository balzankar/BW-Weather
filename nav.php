<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
    <img src="bw-weather/img/logo.png" style="height: 50px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="auto.php">Auto Weather</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="location.php">Input Weather</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Download
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" target="_blank" href="https://github.com/balzankar/BW-Weather">GitHub</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#aboutModal" type="button">About BW Weather App</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="https://www.balworld.in" target="_blank">Developer</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.balworld.in/contact.php">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search Weather" onkeyup="setCity(this.value)">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">About BW Weather</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="bw-weather/img/logo-dark.png" style="height: 60px;">
                <p class="pt-4">BW Weather <br>version 1.0.1</p>
                <p>Designed and Developed by Bal Sankar. <br> Made with <i class="fa fa-heart text-danger"></i> in Thrissur.</p>
                <a class="btn btn-dark btn-rounded" href="https://github.com/balzankar/bw-weather" target="_blank"><i class="fab fa-github pr-2"></i>View on
                    Github
                </a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function changeImg(imgNumber) {
        var myImages = ["bw-weather/img/bg1.jpg", "bw-weather/img/bg2.jpg", "bw-weather/img/bg3.jpg", "bw-weather/img/bg4.jpg", "bw-weather/img/bg5.jpg", "bw-weather/img/bg6.jpg", "bw-weather/img/bg7.jpg", "bw-weather/img/bg8.jpg", "bw-weather/img/bg9.jpg", "bw-weather/img/bg10.jpg", "bw-weather/img/bg11.jpg", "bw-weather/img/bg12.jpg"
        ];
        var imgShown = document.body.style.backgroundImage;
        var newImgNumber = Math.floor(Math.random() * myImages.length);
        document.body.style.backgroundImage = 'url(' + myImages[newImgNumber] + ')';
    }
    window.onload = changeImg;
</script>