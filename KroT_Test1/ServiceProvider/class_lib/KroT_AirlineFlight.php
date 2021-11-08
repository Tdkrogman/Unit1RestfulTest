<?php

class KroT_AirlineFlight
{
	private $airlineName = "Unknown";
	private $flightNumber = 0;
	private $seatNumber = "Unknown";
	private $ticketPrice = 0.0;
	
	public function getAirlineName()
	{
		return $this->airlineName;
	}
	public function setAirlineName($airlineName)
	{
		$this->airlineName = $airlineName;
	}
	public function getFlightNumber()
	{
		return $this->flightNumber;
	}
	public function setFlightNumber($flightNumber)
	{
		$this->flightNumber = $flightNumber;
	}
	public function getSeatNumber()
	{
		return $this->seatNumber;
	}
	public function setSeatNumber($seatNumber)
	{
		$this->seatNumber = $seatNumber;
	}
	public function getTicketPrice()
	{
		return $this->ticketPrice;
	}
	public function getFormattedTicketPrice()
	{
		$formattedPrice = "$" . number_format($this->ticketPrice, 2);
		return $formattedPrice;
	}
	public function setTicketPrice($ticketPrice)
	{
		$this->ticketPrice = $ticketPrice;
	}
	public function toString()
	{
		return $this->getAirlineName() . ", " . $this->getFlightNumber()
			. ", " . $this->getSeatNumber() . ", " . $this->getFormattedTicketPrice();
	}
}


?>