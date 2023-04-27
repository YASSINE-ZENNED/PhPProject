<?php require_once 'includes/header.php'; ?>
<?php include "includes/dbh.inc.php";?>
<link rel="stylesheet" href="assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

  <body>

    <!-- ***** Preloader Start ***** -->
<!--    <div id="preloader">-->
<!--        <div class="jumper">-->
<!--            <div></div>-->
<!--            <div></div>-->
<!--            <div></div>-->
<!--        </div>-->
<!--    </div>  -->
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
                <h4>Fleet</h4>
                <h2>Choose from our fleet!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">


          <div class="row">
              <?php


              // assuming $conn is your PDO connection object

              if (isset($conn)) {
                  $stmt = $conn->prepare('SELECT * FROM rentals ');
              }else{
                  echo "fuck this shit";
              }

              $stmt->execute();

              while ($row = $stmt->fetch()) {
                  echo '<div class="col-md-4 col-sm-6">';
                  echo ' <div class="blog-post">';
                  echo '<div class="blog-thumb">';
                  echo '<img src="assets/img/'.$row['image']. '.jpg"  width="300" height="300" alt="">';
                  echo '</div>';
                  echo '<div class="down-content">';
                  echo '<strong> </strong> <span>'. $row['price'] . '$</span> <strong>/Month</strong>';
                  echo '<a href="offers.php"><h4><strong>'.$row['type'].'  </strong></h4></a>';
                  echo '<p>
                      
                       <i class="fa fa-bed" aria-hidden="true" title="bed"></i> ' .$row['bed'] .'&nbsp;&nbsp;&nbsp;
                      <i class="fa fa-bath" aria-hidden="true" title="bath "></i> ' .$row['bath'] .' &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-square" aria-hidden="true"> ' .$row['size'] .' &nbsp;&nbsp;&nbsp;</i><br>
                     <i class="fa fa-map" aria-hidden="true"></i> ' .$row['addresse'] .'
                  
                  </p>';
                  echo '<div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="#" data-toggle="modal" data-target="#exampleModal">Rent Now</a></li>
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
    <?php

if(isset($_POST['book'])){


   $date = date('Y-m-d H:i:s');

   $query = "INSERT INTO request VALUES ($, total_amount, user_id, sent) ";
   $stmt = $con->prepare($query);

   if ($stmt->execute()) {
       $query = "SELECT t.t20pctID, t.main_artist, t.track_title, t.original_album, c.total_amount FROM cart c LEFT JOIN tblclaims t ON t.t20pctID = c.t20pctID WHERE t.t20pctID LIKE '%sony%' ORDER BY t.main_artist";
       $stmt=$con->prepare($query);
       $stmt->execute();
       $to = "yassine.zenned.123.com";
       $subject = "Test";
       $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       $headers .= "From: Test <testmail1@mail.com>" . "\r\n";
       $body = "Sent on: ". $date . "-\r\n";
       while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
           extract($row);
           $body .= "Track title: ".$row["track_title"]. "-";
       }
       $success = mail($headers, $to, $subject, $body);
       if ($success) {
           $query_delete = "DELETE FROM cart WHERE t20pctID LIKE '%sony%'";
           $stmt = $con->prepare($query_delete);
           $stmt->execute();
           header('Location: cart.php?action=sent');
       } else {
           header('Location: cart.php?action=sent_failed');
       }
   } else {
       header('Location: cart.php?action=sent_failed');
   }
}
 ?>
    
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

    <!-- Modal -->
    <form method="post" action="usefull\email.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">


                       <div class="col-md-12">
                          <fieldset>

                             <textarea id="details" class="form-control" name="details" rows="4" cols="50"  placeholder="details"></textarea>
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                             <label   class="form-control" for="Rent_from">Rent from:</label>
                            <input  class="form-control" type="date" id="Rent_from" name="Rent_from">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>

                            <label   class="form-control" >Rent to:</label>
                            <input  class="form-control" type="date" id="Rent_to" name="Rent_to">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name"  name="name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" name="e_mail" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" name="phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="book">Book Now</button>
          </div>
        </div>
      </div>
    </div>
</form>
    <!-- Bootstrap core JavaScript -->

    </script>
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