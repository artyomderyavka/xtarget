<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 27.10.2017
 * Time: 18:38
 */

namespace Target\Domain\DeliveryContext\ValueObjects\Interfaces;


interface EntityNameInterface
{
    public function getValue(): string ;
}