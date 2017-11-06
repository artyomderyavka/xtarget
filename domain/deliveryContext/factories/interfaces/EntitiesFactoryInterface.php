<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 10:38
 */

namespace Target\Domain\DeliveryContext\Factories\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\PublicationInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\PublisherInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;

interface EntitiesFactoryInterface
{
    public function createAdvertiser(array $advertiserData): AdvertiserInterface;

    public function createPublication(array $publicationData): PublicationInterface;

    public function createPublisher(array $publisherData): PublisherInterface;

    public function createSite(array $siteData): SiteInterface;
}