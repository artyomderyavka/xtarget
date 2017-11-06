<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 11:23
 */

namespace Target\Domain\DeliveryContext\Collections;



use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class UUIDsCollection extends AbstractCollection implements UUIDsCollectionInterface
{
    public function add(UUIDInterface $uuid): void
    {
        if (!isset($this->items[$uuid->getValue()])) {
            $this->items[$uuid->getValue()] = $uuid->getValue();
        }
    }

    public function contains(string $uuid): bool
    {
        return isset($this->items[$uuid]);
    }

    public function get(string $uuid): UUIDInterface
    {
        if (isset($this->items[$uuid])) {
            return $this->items[$uuid];
        }
    }
}