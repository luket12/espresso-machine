<?php

namespace SoConnect\Espresso\Containers\WaterContainer;

class WaterContainer implements ContainsWater
{
    /**
     * @var Float $water  The number of Litres of water
     */
    private $water;

    /**
     * WaterContainer constructor.
     * @param Float $water  The number of litres of water
     */
    public function __construct(Float $water)
    {
        $this->water = $water;
    }

    /**
     * Add a number of litres of water to the espresso machine
     * @param float $litres The number of litres of water to add
     * @throws ContainerFullException
     */
    public function addWater(float $litres): void
    {
        // Increment the water values by a float litres
        $this->water += $litres;
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
