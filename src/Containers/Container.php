<?php

namespace SoConnect\Coffee\Containers;

abstract class Container
{
    /**
     * @var float $limit  The limit of litres of water the container can hold
     */
    protected $limit;

    public function __construct(float $limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return float
     */
    public function getLimit(): float
    {
        return $this->limit;
    }

    /**
     * @param float $limit
     */
    public function setLimit(float $limit): void
    {
        $this->limit = $limit;
    }
}
