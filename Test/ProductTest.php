<?php

require 'App/Product.php';

class ProductTest extends PHPUnit_Framework_TestCase
{

    private $product;


	public function testIsValidNominal()
	{
		$result = $this->product->isValid();
		$this->assertTrue($result);
	}


	public function testIsNotValidOwnerIsNotValid()
	{
		$mockedOwnerNotValid = $this->getMock('User', array('isValid'));
		$mockedOwnerNotValid->expects($this->any())->method('isValid')->will($this->returnValue(false));

		$this->product->setOwner($mockedOwnerNotValid);
		$result = $this->product->isValid();
		$this->assertFalse($result);
	}

    protected function setUp()
    {
        $mockedOwner = $this->getMock('User', array('isValid'));
        $mockedOwner->expects($this->any())->method('isValid')->will($this->returnValue(true));

        $this->product = new \App\Product("mon objet", $mockedOwner);
    }

	protected function tearDown()
	{
		$this->product = NULL;
	}


}
