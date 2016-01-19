<?php

namespace Twilio\Tests;

use \PHPUnit_Framework_TestCase;
use Twilio\Rest\Client;


class HolodeckTestCase extends PHPUnit_Framework_TestCase
{
    protected $holodeck = null;
    protected $twilio = null;

    protected function setUp() {
        $this->holodeck = new Holodeck();
        $this->twilio = new Client('ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'AUTHTOKEN', null, $this->holodeck);
    }

    protected function tearDown() {
        $this->twilio = null;
        $this->holodeck = null;
    }
}