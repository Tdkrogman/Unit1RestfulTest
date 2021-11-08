<?php

include('class_lib/KroT_AirlineFlight.php');

$airlineFlight = new KroT_AirlineFlight();

$output = $airlineFlight->toString();
print("$output");

print("<br /><br />");

$airlineFlight->setAirlineName("Delta Airlines");
$airlineFlight->setFlightNumber(111);
$airlineFlight->setSeatNumber("21B");
$airlineFlight->setTicketPrice(435.5);

$output = $airlineFlight->toString();
print("$output");

?>