<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 11:06
 */

namespace Target\Domain\DeliveryContext\Factories;


use Target\Domain\DeliveryContext\Entities\Advertiser;
use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\EntitiesFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\ValueObjectsFactoryInterface;

class EntitiesFactory implements EntitiesFactoryInterface
{
    protected $valueObjectsFactory;

    protected $collectionsFactory;

    public function __construct(
        CollectionsFactoryInterface $collectionsFactory,
        ValueObjectsFactoryInterface $valueObjectsFactory
    )
    {
        $this->collectionsFactory = $collectionsFactory;
        $this->valueObjectsFactory = $valueObjectsFactory;
    }

    public function createAdvertiser(array $advertiserData): AdvertiserInterface
    {
        $advertiserId = $advertiserData['id'] ?? null;
        $advertiserName = $advertiserData['name'] ?? null;
        $advertiserStatus = $advertiserData['status'] ?? null;
        $advertiserUrl = $advertiserData['targetUrl'] ?? null;
        $limitationBundleIds = !empty($advertiserData['limitationBundleIds'])
            && is_array($advertiserData['limitationBundleIds']) ? $advertiserData['limitationBundleIds'] : [];

        $limitationBundleUUIDsCollection = $this->collectionsFactory->createUUIDsCollection();
        foreach ($limitationBundleIds as $limitationBundleId) {
            $limitationBundleUUID = $this->valueObjectsFactory->createUUID($limitationBundleId);
            $limitationBundleUUIDsCollection->add($limitationBundleUUID);
        }

        $advertiser = new Advertiser(
            $this->valueObjectsFactory->createUUID($advertiserId),
            $limitationBundleUUIDsCollection,
            $this->valueObjectsFactory->createAdvertiserName($advertiserName),
            $this->valueObjectsFactory->createAdvertiserStatus($advertiserStatus),
            $this->valueObjectsFactory->createUrl($advertiserUrl)
        );

        return $advertiser;
    }
}