
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <img src="bw-weather/icons/01n.png" style="height: 50px;">
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
                        <a class="dropdown-item" href="#">GitHub</a>
                        <a class="dropdown-item" href="#">About BW Weather App</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Developer</a>
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