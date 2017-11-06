<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 01.11.2017
 * Time: 17:12
 */

namespace Target\Domain\DeliveryContext\Collections;


use Target\Domain\DeliveryContext\Collections\Interfaces\SitesCollectionInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;

class SitesCollection extends AbstractCollection implements SitesCollectionInterface
{
    public function add(SiteInterface $site): void
    {
        if (!isset($this->items[$site->getId()->getValue()])) {
            $this->items[$site->getId()->getValue()] = $site;
        }
    }

    public function get(string $siteId): SiteInterface
    {
        if (isset($this->items[$siteId])) {
            return $this->items[$siteId];
        }
    }
}