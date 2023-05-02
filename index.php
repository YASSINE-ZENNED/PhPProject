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
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
<?php


// assuming $conn is your PDO connection object

if (isset($conn)) {
    $stmt = $conn->prepare('SELECT * FROM rentals ');
}else{
    echo "fuck this shit";
}

$stmt->execute();

while ($row = $stmt->fetch()) {
          echo ' <div class="item">';

            echo '<img src="assets/img/'.$row['image']. '.jpg"  width="300" height="300" alt="">';
            echo ' <div class="item-content">';
             echo ' <div class="main-content">';
            echo '    <div class="meta-category">';
               echo '  <p style="background-color: rgba(128, 128, 128, 0.5);">
                       <font color="#ff4500">  


                       <i class="fa fa-bed" aria-hidden="true" title="bed"></i> ' .$row['bed'] .'&nbsp;&nbsp;&nbsp;
                      <i class="fa fa-bath" aria-hidden="true" title="bath "></i> ' .$row['bath'] .' &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-square" aria-hidden="true"> ' .$row['size'] .' &nbsp;&nbsp;&nbsp;</i><br>
                     <i class="fa fa-map" aria-hidden="true"></i> ' .$row['addresse'] .'
                  </font> 
                  </p>
                </div>
               
              </div>
            </div>
          </div>';

              }
?>

        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">Offers</h2>
          <br>
          <div class="row">

                <?php


                // assuming $conn is your PDO connection object

                if (isset($conn)) {
                    $stmt = $conn->prepare('SELECT * FROM rentals ORDER BY RAND() LIMIT 3;');
                }else{
                    echo "fuck this shit";
                }

                $stmt->execute();

                while ($row = $stmt->fetch()) {
               echo '<div class="col-md-4 col-sm-6">';
               echo '   <div class="blog-post"><div class="blog-thumb">';
            echo '<img src="assets/img/'.$row['image']. '.jpg"  width="300" height="300" alt="">';
                    echo '  </div>
                <div class="down-content">';
                  echo '<strong> </strong> <span>'. $row['price'] . '$</span> <strong>/Month</strong>';
                    echo '   <a href="offers.php"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>';


                    echo ' <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="offers.php">View More</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           
          </div>';
                      }
                ?>
          </div>
        </div>
      </div>
    </section>

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Lorem ipsum dolor sit amet.</span>
                  <h4>Sed doloribus accusantium reiciendis et officiis.</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="contact.php">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">Blog</h2>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-1-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.php"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-2-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.php"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-3-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.php"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="blog-posts">
      <div class="container">
        <div class="sidebar-item comments">
            <h2 class="text-center">Testimonials</h2>
          <br>
          <br>
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
            </ul>
          </div>

          <br>
          <br>
        
          <div class="row justify-content-md-center">
            <div class="col-md-3">
              <div class="main-button">
                <a href="testimonials.php">Read More</a>
              </div>
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
    <script src="assets/js/a  ccordions.js"></script>

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