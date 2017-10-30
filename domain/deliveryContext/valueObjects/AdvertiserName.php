<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 27.10.2017
 * Time: 18:39
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;

class AdvertiserName implements EntityNameInterface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getValue(): string
    {
        return $this->name;
    }
}