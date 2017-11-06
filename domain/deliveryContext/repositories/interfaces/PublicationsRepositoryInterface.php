<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 06.11.2017
 * Time: 11:38
 */

namespace Target\Domain\DeliveryContext\Repositories\Interfaces;


use Target\Domain\DeliveryContext\Collections\PublicationsCollection;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface PublicationsRepositoryInterface
{
    public function findByPublisherIdAndSegmentId(
        UUIDInterface $publisherId,
        UUIDInterface $segmentId,
        ?EntityStatusInterface $status
    ): PublicationsCollection;
}