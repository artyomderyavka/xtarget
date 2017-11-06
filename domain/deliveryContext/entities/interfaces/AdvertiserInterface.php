<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 26.10.2017
 * Time: 15:22
 */

namespace Target\Domain\DeliveryContext\Entities\Interfaces;


use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface AdvertiserInterface
{
    public function getId(): UUIDInterface;

    public function getLimitationBundleIds(): UUIDsCollectionInterface;

    public function getName(): EntityNameInterface;

    public function getSiteId(): UUIDInterface;

    public function getStatus(): EntityStatusInterface;

    public function getTargetUrl(): UrlInterface;

    public function getTrafficChannel(): TrafficChannelInterface;

}