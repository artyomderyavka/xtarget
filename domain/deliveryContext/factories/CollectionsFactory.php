<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 11:22
 */

namespace Target\Domain\DeliveryContext\Factories;


use Target\Domain\DeliveryContext\Collections\AdvertisersCollection;
use Target\Domain\DeliveryContext\Collections\Interfaces\AdvertisersCollectionInterface;
use Target\Domain\DeliveryContext\Collections\Interfaces\SitesCollectionInterface;
use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;
use Target\Domain\DeliveryContext\Collections\SitesCollection;
use Target\Domain\DeliveryContext\Collections\UUIDsCollection;
use Target\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;

class CollectionsFactory implements CollectionsFactoryInterface
{
    public function createAdvertisersCollection(): AdvertisersCollectionInterface
    {
        return new AdvertisersCollection();
    }

    public function createUUIDsCollection(): UUIDsCollectionInterface
    {
        return new UUIDsCollection();
    }

    public function createSitesCollection(): SitesCollectionInterface
    {
        return new SitesCollection();
    }
}