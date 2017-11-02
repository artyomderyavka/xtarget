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
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\SiteDomainInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;
use Target\Domain\DeliveryContext\ValueObjects\PublisherName;
use Target\Domain\DeliveryContext\ValueObjects\PublisherStatus;
use Target\Domain\DeliveryContext\ValueObjects\SiteDomain;
use Target\Domain\DeliveryContext\ValueObjects\SiteName;
use Target\Domain\DeliveryContext\ValueObjects\SiteNameAbbreviation;
use Target\Domain\DeliveryContext\ValueObjects\TrafficChannel;
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

    public function createPublisherName(?string $name = null): EntityNameInterface
    {
        return new PublisherName($name);
    }

    public function createPublisherStatus(?int $status = null): EntityStatusInterface
    {
        return new PublisherStatus($status);
    }

    public function createSiteDomain(?string $domain = null): SiteDomainInterface
    {
        return new SiteDomain($domain);
    }

    public function createSiteName(?string $name = null): EntityNameInterface
    {
        return new SiteName($name);
    }

    public function createSiteNameAbbreviation(?string $abbreviation = null): EntityNameInterface
    {
        return new SiteNameAbbreviation($abbreviation);
    }

    public function createTrafficChannel(?string $trafficChannel = null): TrafficChannelInterface
    {
        return new TrafficChannel($trafficChannel);
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