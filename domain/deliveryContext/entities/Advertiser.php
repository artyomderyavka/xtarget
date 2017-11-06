<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 27.10.2017
 * Time: 18:23
 */

namespace Target\Domain\DeliveryContext\Entities;


use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class Advertiser implements AdvertiserInterface
{
    protected $id;

    protected $limitationBundleIds;

    protected $name;

    protected $siteId;

    protected $status;

    protected $targetUrl;

    protected $trafficChannel;

    public function __construct(
        UUIDInterface $id,
        UUIDsCollectionInterface $limitationBundleIds,
        EntityNameInterface $name,
        UUIDInterface $siteId,
        EntityStatusInterface $status,
        UrlInterface $targetUrl,
        TrafficChannelInterface $trafficChannel
    ) {
        $this->id = $id;
        $this->limitationBundleIds = $limitationBundleIds;
        $this->name = $name;
        $this->siteId = $siteId;
        $this->status = $status;
        $this->targetUrl = $targetUrl;
        $this->trafficChannel = $trafficChannel;
    }

    public function getId(): UUIDInterface
    {
        return $this->id;
    }

    public function getLimitationBundleIds(): UUIDsCollectionInterface
    {
        return $this->limitationBundleIds;
    }

    public function getName(): EntityNameInterface
    {
        return $this->name;
    }

    public function getSiteId(): UUIDInterface
    {
        return $this->siteId;
    }

    public function getStatus(): EntityStatusInterface
    {
        return $this->status;
    }

    public function getTargetUrl(): UrlInterface
    {
        return $this->targetUrl;
    }

    public function getTrafficChannel(): TrafficChannelInterface
    {
        return $this->trafficChannel;
    }
}