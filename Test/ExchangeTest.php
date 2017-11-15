<?php

require 'App/Exchange.php';

class ExchangeTest extends PHPUnit_Framework_TestCase
{
    private $exchange;

    public function setUp()
    {
        $mockedReceiver = $this->getMock('User', array('isValid'));
        $mockedReceiver->expects($this->any())->method('isValid')->will($this->returnValue(true));

        $mockedOwner = $this->getMock('User', array('isValid'));
        $mockedOwner->expects($this->any())->method('isValid')->will($this->returnValue(true));

        $mockedProduct = $this->getMock('Product', array('isValid'));
        $mockedProduct->expects($this->any())->method('isValid')->will($this->returnValue(true));

        $mockedSender = $this->getMock('EmailSender', array('sendMail'));
        $mockedSender->expects($this->any())->method('sendMail')->will($this->returnValue(true));

        $mockedDatabase = $this->getMock('DatabaseConnection', array('isValid'));
        $mockedDatabase->expects($this->any())->method('isValid')->will($this->returnValue(true));

        $this->exchange = new \App\Exchange($mockedReceiver, $mockedProduct, $mockedOwner);
    }
}
