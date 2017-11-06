<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 03.11.2017
 * Time: 16:01
 */

namespace Target\Domain\DeliveryContext\Repositories\Interfaces;


use Target\Domain\DeliveryContext\Collections\Interfaces\AdvertisersCollectionInterface;
use Target\Domain\DeliveryContext\Collections\Interfaces\UUIDsCollectionInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;

interface AdvertisersRepositoryInterface
{
    public function findByIds(
        UUIDsCollectionInterface $ids,
        ?EntityStatusInterface $status = null
    ): AdvertisersCollectionInterface;
}