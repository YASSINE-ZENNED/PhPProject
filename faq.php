<?php require_once 'includes/header.php'; ?>
<?php include "includes/dbh.inc.php";?>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php require_once 'includes/navbar.php'; ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>faq</h4>
                <h2>Answers for your questions here!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <div class="blog-posts">
      <div class="container">
        <div class="blog-post">
          <div class="down-content down-content-border">
            <h4><i class="fa fa-question-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit et atque nesciunt quaerat vitae natus fuga sapiente, numquam ea enim?</h4>
            <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
          </div>
        </div>

        <div class="blog-post">
          <div class="down-content down-content-border">
            <h4><i class="fa fa-question-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit et atque nesciunt quaerat vitae natus fuga sapiente, numquam ea enim?</h4>
            <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
          </div>
        </div>

        <div class="blog-post">
          <div class="down-content down-content-border">
            <h4><i class="fa fa-question-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit et atque nesciunt quaerat vitae natus fuga sapiente, numquam ea enim?</h4>
            <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
          </div>
        </div>

        <div class="blog-post">
          <div class="down-content down-content-border">
            <h4><i class="fa fa-question-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit et atque nesciunt quaerat vitae natus fuga sapiente, numquam ea enim?</h4>
            <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
          </div>
        </div>

        <div class="blog-post">
          <div class="down-content down-content-border">
            <h4><i class="fa fa-question-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit et atque nesciunt quaerat vitae natus fuga sapiente, numquam ea enim?</h4>
            <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
          </div>
        </div>

        <br>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-md-3">
              <div class="main-button">
                <a href="#">Load More</a>
              </div>
            </div>
          </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2020 Company Name
                | Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>