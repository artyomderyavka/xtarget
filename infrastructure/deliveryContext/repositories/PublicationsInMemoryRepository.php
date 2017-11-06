<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 06.11.2017
 * Time: 11:41
 */

namespace Target\Infrastructure\DeliveryContext\Repositories;


use Target\Domain\DeliveryContext\Collections\PublicationsCollection;
use Target\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\EntitiesFactoryInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\PublicationsRepositoryInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class PublicationsInMemoryRepository implements PublicationsRepositoryInterface
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

    protected $publicationsInMemory = [
        '11111111111111111111111111111111' => [
            'id' => '11111111111111111111111111111111',
            'advertiserId' => '11111111111111111111111111111111',
            'publisherId' => '11111111111111111111111111111111',
            'segmentId' => '11111111111111111111111111111111',
            'status' => 1
        ],
        '11111111111111111111111111111112' => [
            'id' => '11111111111111111111111111111112',
            'advertiserId' => '11111111111111111111111111111112',
            'publisherId' => '11111111111111111111111111111111',
            'segmentId' => '11111111111111111111111111111111',
            'status' => 1
        ],
        '11111111111111111111111111111113' => [
            'id' => '11111111111111111111111111111113',
            'advertiserId' => '11111111111111111111111111111113',
            'publisherId' => '11111111111111111111111111111111',
            'segmentId' => '11111111111111111111111111111111',
            'status' => 1
        ],
    ];

    public function findByPublisherIdAndSegmentId(
        UUIDInterface $publisherId,
        UUIDInterface $segmentId,
        ?EntityStatusInterface $status = null
    ): PublicationsCollection
    {
        $foundPublicationsInfo = null;

        $publicationsCollection = $this->collectionsFactory->createPublicationsCollection();

        foreach ($this->publicationsInMemory as $publicationInfo) {
            if (
                $publicationInfo['publisherId'] === $publisherId->getValue()
                && $publicationInfo['segmentId'] === $segmentId->getValue()
                && (is_null($status) || $publicationInfo['status'] === $status->getValue())
            ) {
                $publicationsCollection->add($this->entitiesFactory->createPublication($publicationInfo));
            }
        }

        return $publicationsCollection;
    }
}