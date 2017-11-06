<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 27.10.2017
 * Time: 18:18
 */

namespace Target\Domain\DeliveryContext\Collections\Interfaces;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface UUIDsCollectionInterface
{
    public function add(UUIDInterface $uuid): void;

    public function contains(string $uuid): bool;

    public function get(string $uuid): UUIDInterface;
}