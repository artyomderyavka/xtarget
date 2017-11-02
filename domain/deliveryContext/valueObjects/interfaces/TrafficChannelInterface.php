<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 16:16
 */

namespace Target\Domain\DeliveryContext\ValueObjects\Interfaces;


interface TrafficChannelInterface
{
    public function getValue(): string;
}