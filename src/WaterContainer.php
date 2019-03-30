<?php

namespace SoConnect\Espresso;

use SoConnect\Espresso\Exceptions\ContainerFullException;

interface WaterContainer
{
    /**
     * Adds water to the coffee machine's water tank
     *
     * @param float $litres
     * @throws ContainerFullException
     *
     * @return void
     */
    public function addWater(float $litres) : void;

    /**
     * Use $litres from the container
     *
     * @param float $litres
     * @return float
     */
    public function useWater(float $litres) : float;

    /**
     * Returns the volume of water left in the container
     *
     * @return float number of litres
     */
    public function getWater() : float;
}
