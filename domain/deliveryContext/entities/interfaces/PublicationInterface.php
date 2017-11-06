<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 06.11.2017
 * Time: 10:48
 */

namespace Target\Domain\DeliveryContext\Entities\Interfaces;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface PublicationInterface
{
    public function getId(): UUIDInterface;

    public function getAdvertiserId(): UUIDInterface;

    public function getPublisherId(): UUIDInterface;

    public function getSegmentId(): UUIDInterface;

    public function getStatus(): EntityStatusInterface;
}