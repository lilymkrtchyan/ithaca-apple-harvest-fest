<?php
$page = 'FAQ';

$home = '';
$vendors = '';
$entertainment = '';
$transportation = '';
$transportation_confirmation = '';
$faq = 'this page';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>faq</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>

<body>

<?php include('includes/header.php'); ?>
<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->


<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="question">
    <img id="q1" class="verticalTriangle" alt="" src="public/images/triangle.png">
    <img id="q11" class="horizontalTriangle hidden" alt="" src="public/images/triangleHorizontal.png">
    <h2 class="q">How much money should I bring?</h2>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<p id="a1" class="indent hidden">Entry to the event is completely free! The amount of money you should bring is dependent on what, if anything, you wish to purchase at the festival. If you are driving, there is a $5 charge to park at the parking garage (You can find more parking information here ). If you plan to eat at the festival, you may also wish to bring at least $10. Prices of the various baked goods, produce, and crafts vary by vendor. Many of our vendors and their items can be found in the vendor page of this website.</p>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="question">
    <img id="q2" class="verticalTriangle" alt="" src="public/images/triangle.png">
    <img id="q22" class="horizontalTriangle hidden" alt="" src="public/images/triangleHorizontal.png">
    <h2 class="q">Can I pay with a credit card?</h2>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<p id="a2" class="indent hidden">Most of our vendors accept credit cards, however, you should bring some cash in case a shop you are interested in does not accept them.</p>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="question">
    <img id="q3" class="verticalTriangle" alt="" src="public/images/triangle.png">
    <img id="q33" class="horizontalTriangle hidden" alt="" src="public/images/triangleHorizontal.png">
    <h2 class="q">Can I bring my dog?</h2>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<p id="a3" class="indent hidden">Bringing a dog is strongly discouraged due to pets not being allowed on the Commons. Additionally, the event will be crowded and may be overwhelming for your furry friend, or it may be difficult to move through the crowds. Registered service animals are permitted.</p>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="question">
    <img id="q4" class="verticalTriangle" alt="" src="public/images/triangle.png">
    <img id="q44" class="horizontalTriangle hidden" alt="" src="public/images/triangleHorizontal.png">
    <h2 class="q">What should I wear?</h2>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<p id="a4" class="indent hidden">If you are not familiar with the Ithaca area, it can get quite cold in the fall! Check the weather and bring layers.</p>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="question">
    <img id="q5" class="verticalTriangle" alt="" src="public/images/triangle.png">
    <img id="q55" class="horizontalTriangle hidden" alt="" src="public/images/triangleHorizontal.png">
    <h2 class="q">When is the best time to attend?</h2>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<p id="a5" class="indent hidden">If you are looking to avoid the crowds, attending midday Friday is a good idea. However, many attendees find that the crowds on the weekend add to the energy and fun of the festival.</p>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="question">
    <img id="q6" class="verticalTriangle" alt="" src="public/images/triangle.png">
    <img id="q66" class="horizontalTriangle hidden" alt="" src="public/images/triangleHorizontal.png">
    <h2 class="q">Will there be alcohol?</h2>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<p id="a6" class="indent hidden">Some vendors do sell alcohol (such as hard cider), so be sure to bring your ID if you are over 21. Many of these vendors also offer tastings.</p>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<div class="question">
    <img id="q7" class="verticalTriangle" alt="" src="public/images/triangle.png">
    <img id="q77" class="horizontalTriangle hidden" alt="" src="public/images/triangleHorizontal.png">
    <h2 class="q">Directions & Parking</h2>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->
<p id="a7" class="indent hidden">Tompkins Consolidated Area Transit (TCAT) offers public bus transportation from all over the county. One-way fares are \$1.50 per adult. Cornell University students can ride without a fare on weekends and after 6pm with their student ID card.</p>
<p id="a8" class="indent hidden">Residents and visitors can park in the Seneca, and Cayuga Street garages and walk to anywhere in Downtown Ithaca. Please note the Green Garage is closed for construction.</p>
<p id="a9" class="indent hidden">Garage parking is \$1.00 per hour in the garages. On-street parking is \$1.50 per hour during the week until 6pm.</p>
<p id="a10" class="indent hidden">For additional downtown parking, visit <a href="https://www.cityofithaca.org/243/Parking">this</a> website.</p>


<img id="parking" class=" indent park hidden" alt="map of Ithaca parking" src="public/images/parkingphoto.PNG">
<p id="parkSource" class="indent hidden">Source: Google Maps</p>


<script src="public/scripts/jquery-3.6.1.js"></script>

<script src="public/scripts/accordion.js"></script>

<?php include('includes/contact.php'); ?>
</body>


</html>
