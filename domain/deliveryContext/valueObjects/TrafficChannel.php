<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 16:17
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;

class TrafficChannel implements TrafficChannelInterface
{
    protected $value;

    public function __construct(?string $trafficChannel = null)
    {
        $this->value = $trafficChannel ?? '';
    }

    public function getValue(): string
    {
        return $this->value;
    }
}