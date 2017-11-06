<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 03.11.2017
 * Time: 16:16
 */

namespace Target\Infrastructure\DeliveryContext\Repositories;


use Target\Domain\DeliveryContext\Entities\Interfaces\PublisherInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\EntitiesFactoryInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\PublishersRepositoryInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;

class PublishersInMemoryRepository implements PublishersRepositoryInterface
{
    protected $collectionsFactory;

    protected $entitiesFactory;

    public function __construct(
        CollectionsFactoryInterface $collectionsFactory,
        EntitiesFactoryInterface $entitiesFactory
    )
    {
        $this->collectionsFactory = $collectionsFactory;
        $this->entitiesFactory = $entitiesFactory;
    }

    protected $publishersInMemory = [
        '11111111111111111111111111111111' => [
            'id' => '11111111111111111111111111111111',
            'siteId' => '11111111111111111111111111111111',
            'name' => 'Banner BeNaughty Publisher',
            'trafficChannel' => 'banner',
            'status' => 1
        ],
        '11111111111111111111111111111112' => [
            'id' => '11111111111111111111111111111112',
            'siteId' => '11111111111111111111111111111112',
            'name' => 'Banner Flirt Publisher',
            'trafficChannel' => 'banner',
            'status' => 1
        ],
        '11111111111111111111111111111113' => [
            'id' => '11111111111111111111111111111113',
            'siteId' => '11111111111111111111111111111113',
            'name' => 'Banner CheekyLovers Publisher',
            'trafficChannel' => 'banner',
            'status' => 1
        ],
    ];

    public function findBySiteAndTrafficChannel(
        SiteInterface $site,
        TrafficChannelInterface $trafficChannel,
        ?EntityStatusInterface $status = null
    ): ?PublisherInterface
    {
        $foundPublisherInfo = null;

        foreach ($this->publishersInMemory as $publisherInfo) {
            if (
                $publisherInfo['siteId'] === $site->getId()->getValue()
                && (is_null($status) || $publisherInfo['status'] === $status->getValue())
            ) {
                $foundPublisherInfo = $publisherInfo;
                break;
            }
        }

        if (is_null($foundPublisherInfo)) {
            return null;
        }

        $foundPublisher = $this->entitiesFactory->createPublisher($foundPublisherInfo);

        return $foundPublisher;
    }
}