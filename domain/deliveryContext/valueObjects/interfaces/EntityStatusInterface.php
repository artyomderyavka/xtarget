<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 13:45
 */

namespace Target\Domain\DeliveryContext\ValueObjects\Interfaces;


interface EntityStatusInterface
{
    public function getValue(): int;
}