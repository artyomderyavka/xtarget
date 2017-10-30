<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 10:38
 */

namespace Target\Domain\DeliveryContext\Factories\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\AdvertiserInterface;

interface EntitiesFactoryInterface
{
    public function createAdvertiser(array $advertiserData): AdvertiserInterface;
}