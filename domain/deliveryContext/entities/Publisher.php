<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 16:29
 */

namespace Target\Domain\DeliveryContext\Entities;


use Target\Domain\DeliveryContext\Entities\Interfaces\PublisherInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\TrafficChannelInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class Publisher implements PublisherInterface
{
    protected $id;
    protected $name;
    protected $siteId;
    protected $status;
    protected $trafficChannel;

    public function __construct(
        UUIDInterface $id,
        EntityNameInterface $name,
        UUIDInterface $siteId,
        EntityStatusInterface $status,
        TrafficChannelInterface $trafficChannel
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->trafficChannel = $trafficChannel;
        $this->siteId = $siteId;
    }

    public function getId(): UUIDInterface
    {
        return $this->id;
    }

    public function getName(): EntityNameInterface
    {
        return $this->name;
    }

    public function getSiteId(): UUIDInterface
    {
        return $this->siteId;
    }

    public function getStatus(): EntityStatusInterface
    {
        return $this->status;
    }

    public function getTrafficChannel(): TrafficChannelInterface
    {
        return $this->trafficChannel;
    }
}