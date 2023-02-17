<?php
$page = 'Home';

$home = 'this_page';
$vendors = '';
$entertainment = '';
$transportation = '';
$transportation_confirmation = '';
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
<p class="description">Apple Harvest Festival will host plenty of farmstand fresh apples and produce, delectable apple and seasonal baked goods, a variety of food trucks offering tasty bites, and a craft fair with artisans from around the region. There will also be live music and entertainment, plus a cider trail to enjoy refreshing cider in store and plenty of great apple and apples-inspired products for sale inside shops in and around Downtown.</p>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="home">
  <div>
    <img class="applebasket" alt="image of apples in a basket" src="images/apple-basket-many.jpg">
  </div>

  <div>
    <aside>
      <h2>Downtown Ithaca</h2>
      <h2>Festival Hours</h2>
      <p>Friday, September 30: 12pm - 6pm</p>
      <p>Saturday, October 1: 10am - 6pm</p>
      <p>Sunday, October 2: 10am - 6pm</p>
    </aside>
  </div>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="homepara">
  <p class="fst">We are excited to welcome you back to one of Ithaca's most celebrated events: the Apple Harvest Festival! Join us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.</p>

  <!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
  <p>This annual festival marks the beginning of the fall harvest season, and features local apples and the Finger Lakes food, craft, and entertainment community! The weekend's happenings gives Ithaca residents, students, and visitors an opportunity to interact with small businesses and creators in the area. Welcome fall with us by visiting one of Ithaca's most famous events!</p>

</div>


<script src="scripts/jquery-3.6.1.js"></script>

<script src="scripts/hamburgerMenu.js"></script>

<?php include 'includes/contact.php'; ?>
</body>

</html>
