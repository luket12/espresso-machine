<?php

namespace SoConnect\Espresso\Containers\WaterContainer;

use SoConnect\Coffee\Containers\Container;
use SoConnect\Espresso\Containers\ContainerFullException;

class WaterContainer extends Container implements ContainsWater
{
    /**
     * @var Float $water  The number of Litres of water
     */
    private $water;

    /**
     * WaterContainer constructor.
     * @param Float $water The number of litres of water
     * @param float $limit
     */
    public function __construct(float $water, float $limit = 10)
    {
        parent::__construct($limit);
        $this->water = $water;
    }

    /**
     * Add a number of litres of water to the espresso machine
     * @param float $litres The number of litres of water to add
     * @throws ContainerFullException
     */
    public function addWater(float $litres): void
    {
        $newWaterTotal = $this->water + $litres;

        if ($newWaterTotal > $this->limit) {
            throw new ContainerFullException('The water container is full');
        }

        // Increment the water values by a float litres
        $this->water = $newWaterTotal;
    }

    /**
     * Uses a measurement of water in litres
     * @param float $litres
     * @return float
     */
    public function useWater(float $litres): float
    {
        // Decrement the number of beans by the num spoons
        $this->water -= $litres;

        return $litres;
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
