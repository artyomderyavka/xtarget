<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 14:14
 */

namespace Target\Domain\DeliveryContext\Services;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsRequestDtoInterface;
use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsResponseDtoInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\DtoFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\EntitiesFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\ValueObjectsFactoryInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\PublicationsRepositoryInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\PublishersRepositoryInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\SitesRepositoryInterface;
use Target\Domain\DeliveryContext\Services\Interfaces\TargetServiceInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;
use Target\Domain\DeliveryContext\ValueObjects\PublicationStatus;

class TargetService implements TargetServiceInterface
{
    const RESPONSE_TARGETS_AMOUNT = 5;

    protected $collectionsFactory;

    protected $dtoFactory;

    protected $entitiesFactory;

    protected $publicationsRepository;

    protected $publishersRepository;

    protected $sitesRepository;

    protected $valueObjectsFactory;

    public function __construct(
        CollectionsFactoryInterface $collectionsFactory,
        DtoFactoryInterface $dtoFactory,
        EntitiesFactoryInterface $entitiesFactory,
        PublicationsRepositoryInterface $publicationsRepository,
        PublishersRepositoryInterface $publishersRepository,
        SitesRepositoryInterface $sitesRepository,
        ValueObjectsFactoryInterface $valueObjectsFactory
    )
    {
        $this->collectionsFactory = $collectionsFactory;
        $this->dtoFactory = $dtoFactory;
        $this->entitiesFactory = $entitiesFactory;
        $this->publicationsRepository = $publicationsRepository;
        $this->publishersRepository = $publishersRepository;
        $this->sitesRepository = $sitesRepository;
        $this->valueObjectsFactory = $valueObjectsFactory;

    }

    public function pickTargets(PickTargetsRequestDtoInterface $pickTargetsRequestDto): PickTargetsResponseDtoInterface
    {
        $sourceSiteDomain = $this->valueObjectsFactory->createSiteDomain($pickTargetsRequestDto->getSourceSiteDomain());
        $trafficChannel = $this->valueObjectsFactory->createTrafficChannel($pickTargetsRequestDto->getTrafficChannel());
        $segmentId = $this->getSegmentId($pickTargetsRequestDto);

        $sourceSite = $this->sitesRepository->findByDomain($sourceSiteDomain);
        if (is_null($sourceSite)) {
            echo "SOURCE SITE NOT FOUND"; die;
        }
        $publisher = $this->publishersRepository
            ->findBySiteAndTrafficChannel(
                $sourceSite,
                $trafficChannel,
                $this->valueObjectsFactory->createPublisherStatus(1)
            );

        $publications = $this->publicationsRepository
            ->findByPublisherIdAndSegmentId(
                $publisher->getId(),
                $segmentId,
                $this->valueObjectsFactory->createPublicationStatus(1)
            );
        //$advertisersCollection = $this->pickBestAdvertisers($pickTargetsRequestDto, self::RESPONSE_TARGETS_AMOUNT);
        var_dump($sourceSite, $publisher, $segmentId, $publications);
        die;
    }

    protected function getSegmentId(PickTargetsRequestDtoInterface $pickTargetsRequestDto): ?UUIDInterface
    {
        return $this->valueObjectsFactory->createUUID('11111111111111111111111111111111');
    }

    protected function pickBestAdvertisers(PickTargetsRequestDtoInterface $pickTargetsRequestDto, int $limit = 0)
    {
        $advertisersData = [
            [
                'id' => 'ffffffffffffffffeeeeeeeeeeeee1',
                'name' => 'Google',
                'status' => 1,
                'domain' => 'google.com',
                'targetUrl' => 'https://google.com'
            ],
            [
                'id' => 'ffffffffffffffffeeeeeeeeeeeee2',
                'name' => 'BeNaughty',
                'status' => 1,
                'domain' => 'benaughty.com',
                'targetUrl' => 'https://benaughty.com'
            ]
        ];
        $advertisersCollection = $this->collectionsFactory->createAdvertisersCollection();

        foreach ($advertisersData as $advertiserData) {
            $advertiser = $this->entitiesFactory->createAdvertiser($advertiserData);
            $advertisersCollection->add($advertiser);
        }
        var_dump($advertisersCollection); die;


        return $targets;
    }
}