<?php

namespace SoConnect\Espresso;

use SoConnect\Espresso\Exceptions\ContainerFullException;

interface ContainsBeans
{
    /**
     * Adds beans to the container
     *
     * @param integer $numSpoons number of spoons of beans
     * @throws ContainerFullException
     *
     * @return void
     */
    public function addBeans(int $numSpoons) : void;

    /**
     * Get $numSpoons from the container
     *
     * @param integer $numSpoons number of spoons of beans
     * @return integer
     */
    public function useBeans(int $numSpoons) : int;

    /**
     * Returns the number of spoons of beans left in the container
     *
     * @return integer
     */
    public function getBeans() : int;
}
