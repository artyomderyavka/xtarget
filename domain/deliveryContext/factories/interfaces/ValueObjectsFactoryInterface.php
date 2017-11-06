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
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\SiteDomainInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface ValueObjectsFactoryInterface
{
    public function createAdvertiserName(?string $name = null): EntityNameInterface;

    public function createAdvertiserStatus(?int $status = null): EntityStatusInterface;

    public function createPublicationStatus(?int $status = null): EntityStatusInterface;

    public function createPublisherName(?string $name = null): EntityNameInterface;

    public function createPublisherStatus(?int $status = null): EntityStatusInterface;

    public function createSiteDomain(?string $domain = null): SiteDomainInterface;

    public function createSiteName(?string $name = null): EntityNameInterface;

    public function createSiteNameAbbreviation(?string $abbreviation = null): EntityNameInterface;

    public function createTrafficChannel(?string $trafficChannel = null): TrafficChannelInterface;

    public function createUrl(?string $url = null): UrlInterface;

    public function createUUID(?string $uuid = null): UUIDInterface;
}