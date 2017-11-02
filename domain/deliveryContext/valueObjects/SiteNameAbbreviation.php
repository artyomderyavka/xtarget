<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 31.10.2017
 * Time: 11:10
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;

class SiteNameAbbreviation implements EntityNameInterface
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