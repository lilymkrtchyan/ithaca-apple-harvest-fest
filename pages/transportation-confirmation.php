<?php
$page = 'Form Confirmation';

$home = '';
$vendors = '';
$entertainment = '';
$transportation = '';
$transportation_confirmation = 'this page';
$faq = '';

$email_address = $_POST["email_address"];
$location = $_POST["location"];
$time = $_POST["time"];
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



   <div class="align">
   <dl>
    <div class="label_output">
    <div class="output_label"> <dt>Email</dt> </div>
      <div class="output_data"> <dd><?php echo htmlspecialchars($email_address); ?></dd> </div>
    </div>

    <div class="label_output">
    <div class="output_label">  <dt>Location</dt> </div>
      <div class="output_data"> <dd><?php echo htmlspecialchars($location); ?></dd> </div>
    </div>

    <div class="label_output">
    <div class="output_label"><dt>Time</dt> </div>
      <div class="output_data"><dd><?php echo htmlspecialchars($time); ?></dd></div>
    </div>
    </dl>
</div>

</main>


<p class="contact_info">Contact Information: (607) 277-8679</p>


</body>

</html>
