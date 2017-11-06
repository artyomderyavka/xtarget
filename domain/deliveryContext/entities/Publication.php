<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 06.11.2017
 * Time: 11:09
 */

namespace Target\Domain\DeliveryContext\Entities;


use Target\Domain\DeliveryContext\Entities\Interfaces\PublicationInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class Publication implements PublicationInterface
{
    protected $id;

    protected $advertiserId;

    protected $publisherId;

    protected $segmentId;

    protected $status;

    public function __construct(
        UUIDInterface $id = null,
        UUIDInterface $advertiserId,
        UUIDInterface $publisherId,
        UUIDInterface $segmentId,
        EntityStatusInterface $status
    )
    {
        $this->id = $id;
        $this->advertiserId = $advertiserId;
        $this->publisherId = $publisherId;
        $this->segmentId = $segmentId;
        $this->status = $status;

    }

    public function getId(): UUIDInterface
    {
        return $this->id;
    }

    public function getAdvertiserId(): UUIDInterface
    {
        return $this->advertiserId;
    }

    public function getPublisherId(): UUIDInterface
    {
        return $this->publisherId;
    }

    public function getSegmentId(): UUIDInterface
    {
        return $this->segmentId;
    }

    public function getStatus(): EntityStatusInterface
    {
        return $this->status;
    }
}