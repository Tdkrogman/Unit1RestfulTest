<?php
header("Content-type: application/json");
include('class_lib/KroT_AirlineFlightDB.php');

$flightNumber = $_REQUEST['flightNumber'];

$airlineFlightDB = new KroT_AirlineFlightDB();
$airlineFlight = $airlineFlightDB->getAirlineFlight($flightNumber);

$data = array();
$data['flightNumber'] = $airlineFlight->getFlightNumber();
$data['airlineName'] = $airlineFlight->getAirlineName();
$data['seatNumber'] = $airlineFlight->getSeatNumber();
$data['ticketPrice'] = $airlineFlight->getTicketPrice();

print(json_encode($data));

?>