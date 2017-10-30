<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 11:30
 */

namespace Target\Domain\DeliveryContext\Factories;


use Target\Domain\DeliveryContext\Factories\Interfaces\ValueObjectsFactoryInterface;
use Target\Domain\DeliveryContext\ValueObjects\AdvertiserName;
use Target\Domain\DeliveryContext\ValueObjects\AdvertiserStatus;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;
use Target\Domain\DeliveryContext\ValueObjects\Url;
use Target\Domain\DeliveryContext\ValueObjects\UUID;

class ValueObjectsFactory implements ValueObjectsFactoryInterface
{
    public function createAdvertiserName(?string $name = null): EntityNameInterface
    {
        return new AdvertiserName($name);
    }

    public function createAdvertiserStatus(?int $status = null): EntityStatusInterface
    {
        return new AdvertiserStatus($status);
    }

    public function createUrl(?string $url = null): UrlInterface
    {
        return new Url($url);
    }

    public function createUUID(?string $uuid = null): UUIDInterface
    {
        return new UUID($uuid);
    }
}