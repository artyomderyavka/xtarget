<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 18:46
 */

namespace Target\Domain\DeliveryContext\Entities\Interfaces;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\SiteDomainInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

interface SiteInterface
{
    public function getDomain(): SiteDomainInterface;

    public function getId(): UUIDInterface;

    public function getName(): EntityNameInterface;

    public function getNameAbbreviation(): EntityNameInterface;
}