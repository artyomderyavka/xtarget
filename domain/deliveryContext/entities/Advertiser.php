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
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class Advertiser implements AdvertiserInterface
{
    protected $id;
    protected $limitationBundleIds;
    protected $name;
    protected $status;
    protected $targetUrl;

    public function __construct(
        UUIDInterface $id,
        UUIDsCollectionInterface $limitationBundleIds,
        EntityNameInterface $name,
        EntityStatusInterface $status,
        UrlInterface $targetUrl
    ) {
        $this->id = $id;
        $this->limitationBundleIds = $limitationBundleIds;
        $this->name = $name;
        $this->status = $status;
        $this->targetUrl = $targetUrl;
    }

    public function getId(): UUIDInterface
    {
        return $this->id;
    }

    public function getLimitationBundleId(): UUIDsCollectionInterface
    {
        return $this->limitationBundleIds;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getTargetUrl(): string
    {
        return $this->targetUrl;
    }
}