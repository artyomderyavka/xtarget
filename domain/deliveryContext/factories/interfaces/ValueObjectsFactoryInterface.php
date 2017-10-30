<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 10:42
 */

namespace Target\Domain\DeliveryContext\Factories\Interfaces;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface ValueObjectsFactoryInterface
{
    public function createAdvertiserName(?string $name = null): EntityNameInterface;

    public function createAdvertiserStatus(?int $status = null): EntityStatusInterface;

    public function createUrl(?string $url = null): UrlInterface;

    public function createUUID(?string $uuid = null): UUIDInterface;
}