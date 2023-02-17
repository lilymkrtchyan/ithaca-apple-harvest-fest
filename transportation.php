<?php
$page = 'Home';

$home = '';
$vendors = '';
$entertainment = '';
$transportation = 'this page';
$faq = '';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="styles/site.css" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>

<body>

<?php include 'includes/header.php'; ?>
<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<img id="hamburgermenu" class="hamburger" alt="" src="images/hamb.png">
<img id="cancel" class="cancel hidden" alt="" src="images/cancel.png">


<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<form id="transportation-request" action="transportation-confirmation.php" method="post" novalidate>

        <div class="request_email">
            <label for="email_address">Email</label>
            <div class="left_alignment"> <input type="email" name="email_address" id="request_email" /> </div>
        </div>

        <div class="request_location">
           <label for="location">Location</label>
        <div class="left_alignment">  <input type="text" name="location" id="request-location" /> </div>
        </div>

        <div class="request_time" role="group" aria-labelledby="time_options">
          <div id="time_options">Time</div>

          <div class="radio_buttons left_alignment">
         <div class="option">
          <input type="radio" id="nine" name="time" value="9AM" />
          <label for="nine">9 AM</label>
         </div>

         <div class="option">
          <input type="radio" id="ten" name="time" value="10AM" />
          <label for="ten">10 AM</label>
         </div>

         <div class="option">
          <input type="radio" id="eleven" name="time" value="11AM" />
          <label for="eleven">11 AM</label>
         </div>

        </div>
        </div>


        <div class="submit_button">
          <input id="submit" type="submit" value="Request Transportation" />
        </div>
      </form>





<script src="scripts/jquery-3.6.1.js"></script>

<script src="scripts/hamburgerMenu.js"></script>

<?php include 'includes/contact.php'; ?>
</body>

</html>
