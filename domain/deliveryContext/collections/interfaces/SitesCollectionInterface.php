<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 01.11.2017
 * Time: 17:11
 */

namespace Target\Domain\DeliveryContext\Collections\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;

interface SitesCollectionInterface
{
    public function add(SiteInterface $site): void;

    public function get(string $siteId): SiteInterface;
}