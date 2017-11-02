<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 16:07
 */

namespace Target\Domain\DeliveryContext\Entities\Interfaces;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;

interface PublisherInterface
{
    public function getId(): UUIDInterface;

    public function getName(): EntityNameInterface;

    public function getStatus(): EntityStatusInterface;

    public function getTrafficChannel(): TrafficChannelInterface;
}