<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 26.10.2017
 * Time: 15:22
 */

namespace Target\Domain\DeliveryContext\Entities\Interfaces;


use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface AdvertiserInterface
{
    public function getId(): UUIDInterface ;

    public function getName(): string ;

    public function getStatus(): int ;

    public function getTargetUrl(): string ;

    public function getLimitationBundleId(): UUIDsCollectionInterface ;
}