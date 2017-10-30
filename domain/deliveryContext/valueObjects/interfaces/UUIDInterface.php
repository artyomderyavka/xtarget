<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 27.10.2017
 * Time: 18:11
 */

namespace Target\Domain\DeliveryContext\ValueObjects\Interfaces;


interface UUIDInterface
{
    public function getValue(): string;
}