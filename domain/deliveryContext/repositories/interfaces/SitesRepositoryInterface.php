<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 01.11.2017
 * Time: 17:06
 */

namespace Target\Domain\DeliveryContext\Repositories\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\SiteDomainInterface;

interface SitesRepositoryInterface
{
    public function findByDomain(SiteDomainInterface $domain): ?SiteInterface;
}