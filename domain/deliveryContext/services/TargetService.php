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
use Target\Domain\DeliveryContext\Repositories\Interfaces\SitesRepositoryInterface;
use Target\Domain\DeliveryContext\Services\Interfaces\TargetServiceInterface;

class TargetService implements TargetServiceInterface
{
    const RESPONSE_TARGETS_AMOUNT = 5;

    protected $dtoFactory;

    protected $collectionsFactory;

    protected $entitiesFactory;

    protected $valueObjectsFactory;

    protected $sitesRepository;

    public function __construct(
        DtoFactoryInterface $dtoFactory,
        CollectionsFactoryInterface $collectionsFactory,
        EntitiesFactoryInterface $entitiesFactory,
        ValueObjectsFactoryInterface $valueObjectsFactory,
        SitesRepositoryInterface $sitesRepository
    )
    {
        $this->dtoFactory = $dtoFactory;
        $this->collectionsFactory = $collectionsFactory;
        $this->entitiesFactory = $entitiesFactory;
        $this->valueObjectsFactory = $valueObjectsFactory;
        $this->sitesRepository = $sitesRepository;
    }

    public function pickTargets(PickTargetsRequestDtoInterface $pickTargetsRequestDto): PickTargetsResponseDtoInterface
    {
        $sourceSite = $this->sitesRepository
            ->findByDomain($this->valueObjectsFactory->createSiteDomain($pickTargetsRequestDto->getSourceSiteDomain()));
        //$advertisersCollection = $this->pickBestAdvertisers($pickTargetsRequestDto, self::RESPONSE_TARGETS_AMOUNT);
        var_dump($sourceSite);
        die;
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