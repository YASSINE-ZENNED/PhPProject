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
                <h4>Testimonials</h4>
                <h2>Read what people say about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <div class="blog-posts">
      <div class="container">
        <div class="sidebar-item comments">
          <div class="content">
            <ul>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-01.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>John Doe<span>10.07.2020</span></h4>
                  <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-02.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Jane Smith<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-03.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Kate Blue<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>

              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-01.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>John Doe<span>10.07.2020</span></h4>
                  <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-02.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Jane Smith<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>
            </ul>
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