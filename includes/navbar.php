<?php include "dbh.inc.php";?>
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>House Rental Website<em>.</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fleet.php">Fleet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offers.php">Offers</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about.php">About Us</a>
                            <a class="dropdown-item" href="blog.php">Blog</a>
                            <a class="dropdown-item" href="team.php">Team</a>
                            <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                            <a class="dropdown-item" href="faq.php">FAQ</a>
                            <a class="dropdown-item" href="terms.php">Terms</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <?php /*
        if (isset($_SESSION["user"])){
          $username = $_SESSION['user'];
          if ($_SESSION['admin'] == true){
            $username = $_SESSION['user']." (admin)";
          }
          echo('
          <h5 class="mr-2 ml-2 id="usern">'.$username.'</h5>
          <button type="button" class="btn btn-dark btn-sm mr-2 ml-2" onclick="profilered()"><i class="fas fa-user"></i></button>
          <button type="button" class="btn btn-dark btn-sm" onclick="logoutred()"><i class="fas fa-sign-out-alt"></i></button>
          ');
        }
        else {
          echo('
          <button type="button" class="btn btn-dark btn-sm mr-2 ml-2" onclick="signupred()"><i class="fas fa-user-plus"></i></button>
          <button type="button" class="btn btn-dark btn-sm" onclick="signinred()"><i class="fas fa-sign-in-alt"></i></button>
          ');
        }*/
      ?>
  </div>
</nav>