<?php
$page = 'Form Confirmation';

$home = '';
$vendors = '';
$entertainment = '';
$transportation = '';
$transportation_confirmation = 'this page';
$faq = '';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>

<body>



<!-- <h1>Form Confirmation</h1> -->
<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<header>
  <h1 id="page"> Transportation - Ithaca Apple Harvest Festival</h1>

<nav id="menu">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/vendor">Vendors</a></li>
      <li><a href="/entertainment">Entertainment</a></li>
      <li><a href="/transportation">Transportation</a></li>
      <li><a href="/faq">FAQ</a></li>
    </ul>
  </nav>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<main>

    <p>Thank you for filling out our transportation request! We will follow up about the available routes via email.</p>

    <h3>Transportation Request</h3>

    <dl>

   <div class="align">
      <dt>Email:</dt>
      <dd><?php echo htmlspecialchars($email_address); ?></dd>
   </div>

      <div class='align'>
      <dt>Location</dt>
      <dd><?php echo htmlspecialchars($location); ?></dd>
      </div>

      <div class='align'>
      <dt>Time</dt>
      <dd><?php echo htmlspecialchars($time); ?></dd>
      </div>
    </dl>

</main>


<p class="contact_info">Contact Information: (607) 277-8679</p>


</body>

</html>
