<?php



    include "../includes/dbh.inc.php";

if(isset($_POST['details']) && isset($_POST['Rent_from']) && isset($_POST['Rent_to']) && isset($_POST['name']) && isset($_POST['e_mail'])&& isset($_POST['phone'])){
    $details = $_POST['details'];
    $rent_from = $_POST['Rent_from'];
    $rent_to = $_POST['Rent_to'];
    $name = $_POST['name'];
    $email = $_POST['e_mail'];
    $phone = $_POST['phone'];
    // connect to the database using PDO
       if (isset($conn)) {
                  $stmt = $conn->prepare('SELECT * FROM rentals ');




              $stmt = $conn->prepare("INSERT INTO request (details, D_from, D_to, name, email, phone) VALUES (?, ?, ?, ?, ?, ?)");
                  $stmt->execute([$details, $rent_from, $rent_to, $name, $email, $phone]);

   }else{
                  echo "shit";
              }




              $to = 'yassine.zenned.123@gmail.com';
              $subject = 'Test email';
              $message = 'This is a test email sent using the mail() function in PHP.';
              $headers = 'From: sender@example.com' . "\r\n" .
                  'Reply-To: sender@example.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();

              mail($to, $subject, $message, $headers);

              }



?>