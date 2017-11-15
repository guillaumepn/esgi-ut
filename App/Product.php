<?php

namespace App;
require 'User.php';

class Product
{
    private $name;
	private $owner;

	function __construct($name, $user)
	{
		$this->name = $name;
		$this->owner = $user;
	}

	public function isValid()
	{
		return !empty($this->name)
		&& isset($this->owner)
		&& $this->owner->isValid();
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

	public function setOwner($user)
	{
		$this->owner = $user;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getOwner()
	{
		return $this->owner;
	}
}
