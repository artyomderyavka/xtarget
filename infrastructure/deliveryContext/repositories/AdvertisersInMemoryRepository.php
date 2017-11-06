<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 03.11.2017
 * Time: 16:12
 */

namespace Target\Infrastructure\DeliveryContext\Repositories;


use Target\Domain\DeliveryContext\Collections\Interfaces\AdvertisersCollectionInterface;
use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\EntitiesFactoryInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\AdvertisersRepositoryInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;

class AdvertisersInMemoryRepository implements AdvertisersRepositoryInterface
{
    protected $collectionsFactory;

    protected $entitiesFactory;

    protected $advertisersInMemory = [
        '11111111111111111111111111111111' => [
            'id' => '11111111111111111111111111111111',
            'limitationBundleIds' => [],
            'name' => 'Banner BeNaughty Advertiser',
            'siteId' => '11111111111111111111111111111111',
            'targetUrl' => 'https://benaughty.com',
            'trafficChannel' => 'banner',
            'status' => 1
        ],
        '11111111111111111111111111111112' => [
            'id' => '11111111111111111111111111111112',
            'limitationBundleIds' => [],
            'name' => 'Banner Flirt Advertiser',
            'siteId' => '11111111111111111111111111111112',
            'targetUrl' => 'https://flirt.com',
            'trafficChannel' => 'banner',
            'status' => 1
        ],
        '11111111111111111111111111111113' => [
            'id' => '11111111111111111111111111111113',
            'limitationBundleIds' => [],
            'name' => 'Banner CheekyLovers Advertiser',
            'siteId' => '11111111111111111111111111111113',
            'targetUrl' => 'https://cheekylovers.com',
            'trafficChannel' => 'banner',
            'status' => 1
        ],
    ];

    public function __construct(
        CollectionsFactoryInterface $collectionsFactory,
        EntitiesFactoryInterface $entitiesFactory
    )
    {
        $this->collectionsFactory = $collectionsFactory;
        $this->entitiesFactory = $entitiesFactory;
    }

    public function findByIds(
        UUIDsCollectionInterface $ids,
        ?EntityStatusInterface $status = null
    ): AdvertisersCollectionInterface
    {
        $advertisersCollection = $this->collectionsFactory->createAdvertisersCollection();

        foreach ($this->advertisersInMemory as $advertiserInfo) {
            if (
                $ids->contains($advertiserInfo['id'])
                && (is_null($status) || $advertiserInfo['status'] === $status->getValue())
            ) {
                $advertisersCollection->add($this->entitiesFactory->createAdvertiser($advertiserInfo));
            }
        }

        return $advertisersCollection;
    }
}