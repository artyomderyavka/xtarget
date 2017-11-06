<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 03.11.2017
 * Time: 15:58
 */

namespace Target\Domain\DeliveryContext\Repositories\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\PublisherInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;

interface PublishersRepositoryInterface
{
    public function findBySiteAndTrafficChannel(
        SiteInterface $site,
        TrafficChannelInterface $trafficChannel,
        ?EntityStatusInterface $status = null
    ): ?PublisherInterface;
}