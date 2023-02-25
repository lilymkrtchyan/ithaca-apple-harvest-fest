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

<html lang="en">
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>

<body>


<?php include('includes/header.php'); ?>

<p>Oopsies.. Looks like we can't find the page that you are looking for. Sorry about that.</p>
<p>You can use the navigation bar to try again <//3 </p>


<?php include('includes/contact.php'); ?>


</body>

</html>
