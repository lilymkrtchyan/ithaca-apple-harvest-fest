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

<h2>Do you need a transportation? We got you!</h2>
<div class="route_box_and_images">
<div class="map_and_buttons">
<img id="bus10" class="busimg" alt="bus 10 route" src="public/images/bus10_rescaled.png">
<img id="bus11" class="busimg hidden" alt="bus 11 route" src="public/images/bus11_rescaled.png">
<img id="bus13" class="busimg hidden" alt="bus 13 route" src="public/images/bus13_rescaled.png">
<img id="bus14" class="busimg hidden" alt="bus 14 route" src="public/images/bus14_rescaled.png">
<img id="bus17" class="busimg hidden" alt="bus 17 route" src="public/images/bus17_rescaled.png">
<img id="bus20" class="busimg hidden" alt="bus 20 route" src="public/images/bus20_new.png">
<img id="bus21" class="busimg hidden" alt="bus 21 route" src="public/images/bus21_rescaled.png">
<img id="bus30" class="busimg hidden" alt="bus 30 route" src="public/images/bus30_rescaled.png">
<img id="bus32" class="busimg hidden" alt="bus 32 route" src="public/images/bus32_rescaled.png">
<img id="bus40" class="busimg hidden" alt="bus 40 route" src="public/images/bus40_rescaled.png">
<p class="caption">All the map images are taken from TCAT's official <a href="tcatbus.com">website</a>.</p>
<p class="caption">Please visit the website for the complete list of routes available.</p>

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

<div class="route_info_and_disclaimer">
<div class="route_info">
<h1 class="winter_schedules">Winter & Spring 2023 Schedules</h1>
<h2>Effective Sunday, January 22, 2023 (5am) through May 27, 2023</h2>
<p><b>Please Note</b> Effective Mon. Feb. 6, a redesigned route 90 will run on Feeney Way outbound, stopping at Statler and Rockefeller. the route will continue its current route inbound (on West Ave). This change is to provide central campus service to the dorms late at night.</p>
<p><b>Route 10 [Mon-Fri] Cornell - Commons Shuttle</b> Also Serving: Sage Hall, Boldt Hall, Milstein Hall, Goldwin Smith Hall, Stewart Ave.</p>
<p><b>Route 11 [Everyday]: Ithaca College - Commons.</b> Also Serving: College Circle Apts., Challenge, South Hill Business Park, South Hill Elementary, Longview</p>
<p><b>Route 13: [Everyday] Fall Creek</b> Also Serving: Commons, Stewart Park, Guthrie - Ithaca City Harbor, TCAT, Aldi, Ithaca High School, Lake St., Hancock St., Cayuga St., Stewart Park [Weekdays Only:  and Shops at Ithaca Mall]</p>
<p><b>Route 14: [Everyday] Hospital - West Hill - Commons</b>Also Serving: W. State Street, West Village, Cayuga Gardens Apts., Lehman School, Linderman Creek Apts., Overlook Apts., Cayuga Meadows, Conifer Village Apts</p>
<p><b>Route 17: [Everyday] Fall Creek - Commons </b> Also Serving: Guthrie - Ithaca City Harbor, TCAT Offices, W. Lincoln St., Cayuga St.</p>
<p><b>Route 20: [Monday - Friday + Saturday] Enfield - Commons </b> Also Serving: Eco Village, Agway. Select trips serve Cornell. Saturday & Sunday: First trip is demand hiker drop-off at Bock Harvey Nature Preserve or the entrance to Upper Treman State Park. Route 67 picks up at the Lower Treman Stop (Elmira Rd @ Enfield Creek Bridge), allowing for a through hike.</p>
<p><b>Route 21: [Everyday] Trumansburg - Commons  </b> Also Serving: Ulysses, Jacksonville, Agway, Cornell, Commons</p>
<p><b>Route 30: [Everyday] Shops at Ithaca Mall - Cornell - Commons </b> Also Serving: Collegetown, Cornell, Community Corners, Kendal, Tops (Lansing), YMCA
Mon - Fri: Route serves Feeney Way.      Sat & Sun: Routes serves West Campus.</p>
<p><b>Route 32: [Everyday] Airport - Cornell - Commons  </b> Also Serving: Tower Road, Humphreys, Cornell Business Park, Langmuir Lab, Northwood Apts., Gaslight Village, Uptown Village, University Park, Convenient Care, Community Corners, Tompkins County Health Department.  Saturday & Sunday service to Village Solars.</p>
<p><b>Route 40: [Everyday] Freeville - Groton</b> Also Serving: Groton H.S., Varna, Etna, Dairy Bar, Sage Hall, Ithaca Commons [See Route 43 for additional trips]</p>
</div>
<p class="caption2">All the route information above is taken from TCAT's official website and is TCAT's property.</p>
</div>
</div>

<!-- Source: ALL THE CONTENT IS PROVIDED BY THE INSTRUCTOR-->

<h2>Can't find a suitable transit? We got you!</h2>
<p>Request a transportation and we will create additional routes based on people's demand.</p>
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
