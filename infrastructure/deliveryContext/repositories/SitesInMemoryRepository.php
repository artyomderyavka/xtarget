<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 01.11.2017
 * Time: 17:21
 */

namespace Target\Infrastructure\DeliveryContext\Repositories;


use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\EntitiesFactoryInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\SitesRepositoryInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\SiteDomainInterface;

class SitesInMemoryRepository implements SitesRepositoryInterface
{
    protected $collectionsFactory;

    protected $entitiesFactory;

    protected $sitesInMemory = [
        '11111111111111111111111111111111' => [
            'id' => '11111111111111111111111111111111',
            'name' => 'BeNaughty',
            'domain' => 'benaughty.com',
            'abbreviation' => 'BN'
        ],
        '11111111111111111111111111111112' => [
            'id' => '11111111111111111111111111111112',
            'name' => 'Flirt',
            'domain' => 'flirt.com',
            'abbreviation' => 'FLIRT'
        ],
        '11111111111111111111111111111113' => [
            'id' => '11111111111111111111111111111113',
            'name' => 'CheekyLovers',
            'domain' => 'cheekylovers.com',
            'abbreviation' => 'CL'
        ]
    ];

    public function __construct(
        CollectionsFactoryInterface $collectionsFactory,
        EntitiesFactoryInterface $entitiesFactory
    )
    {
        $this->collectionsFactory = $collectionsFactory;
        $this->entitiesFactory = $entitiesFactory;
    }

    public function findByDomain(SiteDomainInterface $domain): ?SiteInterface
    {
        $foundSiteInfo = null;
        foreach ($this->sitesInMemory as $siteInfo) {
            if ($siteInfo['domain'] === $domain->getValue()) {
                $foundSiteInfo = $siteInfo;
                break;
            }
        }
        if (is_null($foundSiteInfo)) {
            return null;
        }

        $foundSite = $this->entitiesFactory->createSite($foundSiteInfo);

        return $foundSite;
    }
}