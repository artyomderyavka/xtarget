<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 03.11.2017
 * Time: 16:01
 */

namespace Target\Domain\DeliveryContext\Repositories\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;

interface AdvertisersRepositoryInterface
{
    public function findBySite(SiteInterface $site): ?AdvertiserInterface;
}