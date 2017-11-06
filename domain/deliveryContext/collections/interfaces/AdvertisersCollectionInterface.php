<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 26.10.2017
 * Time: 15:05
 */

namespace Target\Domain\DeliveryContext\Collections\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;

interface AdvertisersCollectionInterface
{
    public function add(AdvertiserInterface $advertiser): void;

    public function contains(string $advertiserId): bool;

    public function get(string $advertiserId): AdvertiserInterface;
}