<?php
echo '<header class="top-navbar">
<nav style="background-color: #F2F2EB;" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img class="logo" src="images/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-rs-food">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">À propos</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a class="dropdown-item" href="reservation.php">Reservation</a>
                        <a class="dropdown-item" href="stuff.php">Equipe</a>
                        <a class="dropdown-item" href="gallery.php">Gallery</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a class="dropdown-item" href="blog.php">blog</a>
                        <a class="dropdown-item" href="blog-details.php">blog Single</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>';
?>