<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body>
    <div class="container">
       <div class="row">
       <div class="col-lg-6 m-auto"></div>
       <div class="card">
        <div class="cardtitle">
        <h2>Contact US</h2>
        <hr>
        <?php 
        
          if(isset($_GET['error']))
          {
              $MSG=" please Fill in the Blanks";
              echo'<div class="alert alert-danger">'.$MSG.'';
          }
          if(isset($_GET['sussed']))
          {
            $MSG=" your message have been sent";
            echo'<div class="alert alert-danger">'.$MSG.'';

          }
        
        ?>
        </div>
        <div class="card-body">
         <form class="f1" action="submit-contact.php" method="POST">
           <input type="text" name="username" placeholder="User name" class="form-control mb-2">
           <input type="email" name="email" placeholder="Email" class="form-control mb-2">
           <input type="text" name="subject" placeholder="Subject" class="form-control mb-2">
           <textarea name="msg" class="form-control mb-2" placeholder="Write the Message"></textarea>
           <button class="btn btn-success" name="btn-send">Send</button>
           <button class="btn btn-success" name="btn-send"><a href="index.php">Return to Acceuil</a></button>
         </form>
        </div>
       </div>
       </div>
    </div>
</body>
</html>