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

        <div class="form-label">
          <input type="email" name="email_address" id="request_email" />
          <label for="email_address">Email</label>
        </div>

        <div class="form-label">
          <input type="text" name="location" id="request-location" />
          <label for="location">Location</label>
        </div>

        <div role="group" aria-labelledby="group_head">
          <div id="group_head">Time</div>

          <input type="radio" id="nine" name="time" value="9AM" />
          <label for="nine">9 AM</label>

          <input type="radio" id="ten" name="time" value="10AM" />
          <label for="ten">10 AM</label>

          <input type="radio" id="eleven" name="time" value="11AM" />
          <label for="eleven">11 AM</label>
        </div>


        <div class="align-right">
          <input id="submit" type="submit_button" value="Request Transportation" />
        </div>
      </form>





<script src="scripts/jquery-3.6.1.js"></script>

<script src="scripts/hamburgerMenu.js"></script>

<?php include 'includes/contact.php'; ?>
</body>

</html>
