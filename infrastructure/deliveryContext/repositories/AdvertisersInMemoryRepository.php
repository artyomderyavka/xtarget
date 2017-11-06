<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 03.11.2017
 * Time: 16:12
 */

namespace Target\Infrastructure\DeliveryContext\Repositories;


use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;
use Target\Domain\DeliveryContext\Repositories\Interfaces\AdvertisersRepositoryInterface;

class AdvertisersInMemoryRepository implements AdvertisersRepositoryInterface
{
    public function findBySite(SiteInterface $site): ?AdvertiserInterface
    {
        // TODO: Implement getBySite() method.
    }
}