<?php

namespace SoConnect\Espresso\Containers\WaterContainer;

use mysql_xdevapi\Exception;
use SoConnect\Espresso\Containers\ContainerException;
use SoConnect\Espresso\Containers\ContainerFullException;

class WaterContainer implements ContainsWater
{
    /**
     * @var Float $water  The number of Litres of water
     */
    private $water;

    /**
     * @var float $limit  The limit of litres of water the container can hold
     */
    private $limit;

    /**
     * WaterContainer constructor.
     * @param Float $water The number of litres of water
     * @param float $limit
     */
    public function __construct(Float $water, float $limit = 25)
    {
        $this->water = $water;
        $this->limit = $limit;
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
     * @throws ContainerException
     * @return float
     */
    public function useWater(float $litres): float
    {
        $newWaterTotal = $this->water -= $litres;

        var_dump($newWaterTotal);

        if ($newWaterTotal < 0) {
            throw new ContainerException('There is now water left in the container');
        }

        // Decrement the number of beans by the num spoons
        $this->water = $newWaterTotal;

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
