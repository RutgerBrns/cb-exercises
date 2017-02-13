<?php
require 'classhuman.class.php';

class Momoki extends Human
{
	private $length = null;
	private $laptop = null;
	private $drink = null;
	private $visa = null;
	private $nationality = null;
	private $born = null;


//CONSTRUCT & DESTRUCT
	  public function __construct() 
  {
    // Momoki is born
    $this->();
  }

//GETS AND SETS
	public function setVisa($status){
		$this->visa=$status;
	}

	public function getVisa(){
		return $this->visa;
	}



