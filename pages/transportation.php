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
  <title>Transportation</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>

<body>

<?php include('includes/header.php'); ?>
<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<div class="map_and_buttons">
<img id="bus10" alt="bus 10 route" src="public/images/bus10_rescaled.png">
<img id="bus11" class="hidden" alt="bus 11 route" src="public/images/bus11_rescaled.png">
<img id="bus13" class="hidden" alt="bus 13 route" src="public/images/bus13_rescaled.png">
<img id="bus14" class="hidden" alt="bus 14 route" src="public/images/bus14_rescaled.png">
<img id="bus17" class="hidden" alt="bus 17 route" src="public/images/bus17_rescaled.png">
<img id="bus20" class="hidden" alt="bus 20 route" src="public/images/bus20_new.png">
<img id="bus21" class="hidden" alt="bus 21 route" src="public/images/bus21_rescaled.png">
<img id="bus30" class="hidden" alt="bus 30 route" src="public/images/bus30_rescaled.png">
<img id="bus32" class="hidden" alt="bus 32 route" src="public/images/bus32_rescaled.png">
<img id="bus40" class="hidden" alt="bus 40 route" src="public/images/bus40_rescaled.png">


<div class="buttons">
<div class="button-col-1">
<button type="button" id="b10" class="bus10">10 Cornell - Commons</button>
<button type="button" id="b11" class="bus11">11 Ithaca College - Commons</button>
<button type="button" id="b13" class="bus13">13 IHS - Northside - Commons</button>
<button type="button" id="b14" class="bus14">14 West Hill - Hospital - Commons</button>
<button type="button" id="b17" class="bus17">17 TCAT - Fall Creek - Commons</button>
</div>
<div class="button-col-2">
<button type="button" id="b20" class="bus20">20 Enfield - Commons</button>
<button type="button" id="b21" class="bus21">21 Trumansburg - Commons</button>
<button type="button" id="b30" class="bus30">30 Commons - Cornell - Shops at Ithaca Mall</button>
<button type="button" id="b32" class="bus32">32 Airport - Cornell - Commons</button>
<button type="button" id="b40" class="bus40">40 Groton - Freewille - Cornell - Commons</button>
</div>
</div>
</div>


<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<form id="transportation-request" action="pages/transportation-confirmation.php" method="post" novalidate>

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



<?php include('includes/contact.php'); ?>

<script src="public/scripts/jquery-3.6.1.js"></script>

<script src="public/scripts/map.js"></script>
</body>

</html>
