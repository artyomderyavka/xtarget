<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 11:23
 */

namespace Target\Domain\DeliveryContext\Collections;


use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDInterface;
use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;

class UUIDsCollection extends AbstractCollection implements UUIDsCollectionInterface
{
    public function add(UUIDInterface $uuid): void
    {
        if (!isset($this->items[$uuid->getValue()])) {
            $this->items[$uuid->getValue()] = $uuid->getValue();
        }
    }

    public function get(string $uuid): UUIDInterface
    {
        if (isset($this->items[$uuid])) {
            return $this->items[$uuid];
        }
    }
}