<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 26.10.2017
 * Time: 15:02
 */

namespace Target\Domain\DeliveryContext\Collections;


use Target\Domain\DeliveryContext\Collections\Interfaces\AdvertisersCollectionInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;

class AdvertisersCollection extends AbstractCollection implements AdvertisersCollectionInterface
{
    public function add(AdvertiserInterface $advertiser): void
    {
        if (!isset($this->items[$advertiser->getId()->getValue()])) {
            $this->items[$advertiser->getId()->getValue()] = $advertiser;
        }
    }

    public function get(string $advertiserId): AdvertiserInterface
    {
        if (isset($this->items[$advertiserId])) {
            return $this->items[$advertiserId];
        }
    }
}