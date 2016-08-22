<?php

namespace App\Exceptions\CustomExceptions;

class UserNotFoundException extends Exception
{
	function __construct($message, $code = 0, Exception $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}

	// custom string representation of object
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function getErrorMessage()
    {
        return 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b>';
    }
}