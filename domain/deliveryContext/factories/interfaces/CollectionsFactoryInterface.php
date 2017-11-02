<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 10:40
 */

namespace Target\Domain\DeliveryContext\Factories\Interfaces;


use Target\Domain\DeliveryContext\Collections\Interfaces\AdvertisersCollectionInterface;
use Target\Domain\DeliveryContext\Collections\Interfaces\SitesCollectionInterface;
use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;

interface CollectionsFactoryInterface
{
    public function createAdvertisersCollection(): AdvertisersCollectionInterface;

    public function createUUIDsCollection(): UUIDsCollectionInterface;

    public function createSitesCollection(): SitesCollectionInterface;
}