<?php

namespace SoConnect\Espresso;

use SoConnect\Espresso\Exceptions\ContainerException;
use SoConnect\Espresso\Exceptions\ContainerFullException;
use SoConnect\Espresso\Exceptions\EspressoMachineException;

class EspressoMachine implements BeansContainer, WaterContainer, EspressoMachineInterface
{
    /**
     * @var int $beans  The number of spoons of beans available
     */
    private $beans;

    /**
     * @var string $status  The Status of the espresso machine
     */
    private $status;

    /**
     * @var Float $water  The number of Litres of water
     */
    private $water;

    /**
     * EspressoMachine constructor.
     * @param Int $beans
     * @param Float $water
     * @param string $status
     */
    public function __construct(Int $beans, Float $water, String $status = '')
    {
        $this->beans = $beans;
        $this->water = $water;
        $this->status = $status;
    }

    /**
     * @param int $numSpoons  The number of spoons available
     * @throws ContainerFullException
     */
    public function addBeans(int $numSpoons): void
    {
        // Increment the number of beans by how many spoons

    }

    /**
     * @param int $numSpoons  Number of spoons of beans to use
     * @throws ContainerException
     * @return int The number of spoons used
     */
    public function useBeans(int $numSpoons): int
    {
        // Decrement the number of beans by the num spoons
    }

    /**
     * @return int Return the number of beans available
     */
    public function getBeans(): int
    {
        // Return the total beans count
        return $this->beans;
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
     * Add a number of litres of water to the espresso machine
     * @param float $litres The number of litres of water to add
     * @throws ContainerFullException
     */
    public function addWater(float $litres): void
    {
        // Increment the water values by a float litres
    }

    /**
     * Uses a measurement of water in litres
     * @param float $litres
     * @throws ContainerException
     * @return float
     */
    public function useWater(float $litres): float
    {
        // Decrement the water values by a float litres
    }

    /**
     * Returns the amount of water available in the espresso machine
     * @return float
     */
    public function getWater(): float
    {
        // Return the float for litres of water
        return $this->water;
    }
}
