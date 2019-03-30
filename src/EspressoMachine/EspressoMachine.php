<?php

namespace SoConnect\Espresso\EspressoMachine;

use SoConnect\Coffee\Containers\BeanContainer\BeanContainer;
use SoConnect\Espresso\Containers\WaterContainer\WaterContainer;

class EspressoMachine implements EspressoMachineInterface
{
    /**
     * @var string $status  The Status of the espresso machine
     */
    private $status;

    /**
     * @var WaterContainer $waterContainer
     */
    private $waterContainer;

    /**
     * @var BeanContainer $beanContainer
     */
    private $beanContainer;

    /**
     * EspressoMachine constructor.
     * @param BeanContainer $beanContainer
     * @param WaterContainer $waterContainer
     * @param string $status
     */
    public function __construct(BeanContainer $beanContainer, WaterContainer $waterContainer, String $status = '')
    {
        $this->waterContainer = $waterContainer;
        $this->beanContainer = $beanContainer;
        $this->status = $status;
    }

    /**
     * @return float Return the espresso that was made by the machine in litres
     * @throws EspressoMachineException
     */
    public function makeEspresso(): float
    {
        // Use some beans and some water to return an espresso, decrementing the total available amounts

    }

    /**
     * @return float Return the espresso that was made by the machine in litres
     * @throws EspressoMachineException
     */
    public function makeDoubleEspresso(): float
    {
        // Use some more beans and water to make a double espresso, decrementing the total available amounts
    }

    /**
     * @return string Return the status of the coffee machine
     */
    public function getStatus(): string
    {
        // Return the status
        return $this->status;
    }

    /**
     * @return WaterContainer
     */
    public function getWaterContainer(): WaterContainer
    {
        return $this->waterContainer;
    }

    /**
     * @param WaterContainer $waterContainer
     */
    public function setWaterContainer(WaterContainer $waterContainer): void
    {
        $this->waterContainer = $waterContainer;
    }

    /**
     * @return BeanContainer
     */
    public function getBeanContainer(): BeanContainer
    {
        return $this->beanContainer;
    }

    /**
     * @param BeanContainer $beanContainer
     */
    public function setBeanContainer(BeanContainer $beanContainer): void
    {
        $this->beanContainer = $beanContainer;
    }
}
