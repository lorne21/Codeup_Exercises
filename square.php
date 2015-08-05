<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
	public function __construct($height)
	{
		parent::__construct($height, $height);

	}

	public function perimeter()
	{
		$perimeter = $this->height * 4;
		return $perimeter; 
	}

	public function area()
	{
		$result = $this->height * 2; 
		return $result;
	}

}




?>