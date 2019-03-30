<?php

namespace SoConnect\Espresso\EspressoMachine;

use SoConnect\Coffee\Containers\BeanContainer\NoBeansException;

interface EspressoMachineInterface
{

    /**
     * Runs the process for making Espresso
     *
     * @throws NoBeansException, NoWaterException
     *
     * @return float of litres of coffee made
     */
    public function makeEspresso() : float;

    /**
     * @see makeEspresso
     * @throws NoBeansException, NoWaterException
     *
     * @return float of litres of coffee made
     */
    public function makeDoubleEspresso() : float;

    /**
     * This method controls what is displayed on the screen of the machine
     * Returns ONE of the following human readable statuses in the following preference order:
     *
     * Add beans and water
     * Add beans
     * Add water
     * {Integer} Espressos left
     *
     * @return string
     */
    public function getStatus() : string;
}
