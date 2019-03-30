<?php

namespace SoConnect\Espresso\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Espresso\EspressoMachine;

class TestEspressoMachine extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testEspressoGettersAndSetters()
    {
        $espressoMachine = new EspressoMachine(0,);
    }
}
