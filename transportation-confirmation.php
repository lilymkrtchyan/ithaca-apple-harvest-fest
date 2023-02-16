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

<main>

    <h2><?php echo $page; ?></h2>

    <p>Thank you for filling out our transportation request! We will follow up about the available routes via email.</p>

    <h3>Transportation Request</h3>

    <dl>

   <div class="align">
      <dt>Email:</dt>
      <dd><?php echo $_POST['email_address'];?></dd>
   </div>

      <div class='align'>
      <dt>Location</dt>
      <dd><?php echo $_POST['location'];?></dd>
      </div>

      <div class='align'>
      <dt>Time</dt>
      <dd><?php echo $_POST['time'];?></dd>
      </div>
    </dl>

</main>

<script src="scripts/jquery-3.6.1.js"></script>

<script src="scripts/hamburgerMenu.js"></script>

<?php include 'includes/contact.php'; ?>

</body>

</html>
