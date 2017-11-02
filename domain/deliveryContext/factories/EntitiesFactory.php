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
use Target\Domain\DeliveryContext\Entities\Interfaces\PublisherInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;
use Target\Domain\DeliveryContext\Entities\Publisher;
use Target\Domain\DeliveryContext\Entities\Site;
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
        $trafficChannel = $advertiserData['trafficChannel'] ?? null;
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
            $this->valueObjectsFactory->createUrl($advertiserUrl),
            $this->valueObjectsFactory->createTrafficChannel($trafficChannel)
        );

        return $advertiser;
    }

    public function createPublisher(array $publisherData): PublisherInterface
    {
        $publisherId = $publisherData['id'] ?? null;
        $publisherName = $publisherData['name'] ?? null;
        $publisherStatus = $publisherData['status'] ?? null;
        $publisherChannel = $publisherData['trafficChannel'] ?? null;

        $advertiser = new Publisher(
            $this->valueObjectsFactory->createUUID($publisherId),
            $this->valueObjectsFactory->createPublisherName($publisherName),
            $this->valueObjectsFactory->createPublisherStatus($publisherStatus),
            $this->valueObjectsFactory->createTrafficChannel($publisherChannel)
        );

        return $advertiser;
    }

    public function createSite(array $siteData): SiteInterface
    {
        $siteId = $siteData['id'] ?? null;
        $siteDomain = $siteData['domain'] ?? null;
        $siteName = $siteData['name'] ?? null;
        $siteAbbreviation = $siteData['abbreviation'] ?? null;

        $site = new Site(
            $this->valueObjectsFactory->createUUID($siteId),
            $this->valueObjectsFactory->createSiteDomain($siteDomain),
            $this->valueObjectsFactory->createSiteName($siteName),
            $this->valueObjectsFactory->createSiteNameAbbreviation($siteAbbreviation)
        );

        return $site;
    }
}