<?php
include('KroT_AirlineFlight.php');

class KroT_AirlineFlightDB
{
    public function getAirlineFlight($aFlightNumber)
    {
        $airlineFlight = new KroT_AirlineFlight();
        $airlineFlight->setFlightNumber($aFlightNumber);
        
        if ($aFlightNumber == 111)
        {
            $airlineFlight->setAirlineName("Delta Airlines");
            $airlineFlight->setSeatNumber("21B");
			$airlineFlight->setTicketPrice(435.5);
        }
        else if ($aFlightNumber == 112)
        {
            $airlineFlight->setAirlineName("Alaska Airlines");
            $airlineFlight->setSeatNumber("5D");
			$airlineFlight->setTicketPrice(400.5);
        }
        else if ($aFlightNumber == 113)
        {
            $airlineFlight->setAirlineName("American Airlines");
            $airlineFlight->setSeatNumber("13A");
			$airlineFlight->setTicketPrice(395.5);
        }
        else if ($aFlightNumber == 114)
        {
            $airlineFlight->setAirlineName("Allegiant Air");
            $airlineFlight->setSeatNumber("12B");
			$airlineFlight->setTicketPrice(455.9);
        }
		else if ($aFlightNumber == 115)
        {
            $airlineFlight->setAirlineName("Southwest Airlines");
            $airlineFlight->setSeatNumber("29C");
			$airlineFlight->setTicketPrice(375.8);
        }
		
        return $airlineFlight;
    }
}
?>