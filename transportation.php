<?php
$page = 'Transportation';

$home = '';
$vendors = '';
$entertainment = '';
$transportation = 'this page';
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

<div class="map_and_buttons">
<img id="bus10" alt="bus 10 route" src="images/bus10_rescaled.png">
<img id="bus11" class="hidden" alt="bus 11 route" src="images/bus11_rescaled.png">
<img id="bus13" class="hidden" alt="bus 13 route" src="images/bus13_rescaled.png">
<img id="bus14" class="hidden" alt="bus 14 route" src="images/bus14_rescaled.png">
<img id="bus17" class="hidden" alt="bus 17 route" src="images/bus17_rescaled.png">

<div class="buttons">
<button id="b10" type="button" class="bus10">10</button>
<button id="b11" type="button" class="bus11">11</button>
<button id="b13" type="button" class="bus13">13</button>
<button id="b14" type="button" class="bus14">14</button>
<button id="b17" type="button" class="bus17">17</button>
<button id="b20" type="button" class="bus20">20</button>
<button id="b21" type="button" class="bus21">21</button>
<button id="b30" type="button" class="bus30">30</button>
<button id="b32" type="button" class="bus32">32</button>
<button id="b40" type="button" class="bus40">40</button>
</div>
</div>


<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<form id="transportation-request" action="transportation-confirmation.php" method="post" novalidate>

      <div class="form">
        <div class="request">
            <div class="label"> <label for="email_address">Email</label> </div>
            <div class="input"> <input type="email" name="email_address" id="request_email" /> </div>
        </div>

        <div class="request">
        <div class="label"> <label for="location">Location</label> </div>
        <div class="input">  <input type="text" name="location" id="request-location" /> </div>
        </div>

        <div class="request" role="group" aria-labelledby="time_options">
          <div class="label" id="time_options">Time</div>

         <div class="input">
          <input type="radio" id="nine" name="time" value="9AM" />
          <label for="nine">9 AM</label>


         <div>
          <input type="radio" id="ten" name="time" value="10AM" />
          <label for="ten">10 AM</label>
         </div>

         <div>
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
