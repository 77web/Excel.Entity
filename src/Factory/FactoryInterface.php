<?php


namespace Excel\Entity\Factory;

use Excel\Entity\EntityInterface;

interface FactoryInterface
{
    /**
     * @return EntityInterface
     */
    public function create();
}
