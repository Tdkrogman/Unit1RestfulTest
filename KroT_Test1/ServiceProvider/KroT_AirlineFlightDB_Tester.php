<?php

include('class_lib/KroT_AirlineFlightDB.php');

$airlineFlightDB = new KroT_AirlineFlightDB();
$airlineFlight = $airlineFlightDB->getAirlineFlight(111);
print("Airline Name: " . $airlineFlight->getAirlineName());
print("<br />");
print("Flight Number: " . $airlineFlight->getFlightNumber());
print("<br />");
print("Seat Number: " . $airlineFlight->getSeatNumber());
print("<br />");
print("Ticket Price: " . $airlineFlight->getFormattedTicketPrice());
print("<br /><br />");
print($airlineFlight->toString());
?>