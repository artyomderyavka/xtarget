<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 31.10.2017
 * Time: 10:01
 */

namespace Target\Domain\DeliveryContext\Entities;


use Target\Domain\DeliveryContext\Entities\Interfaces\SiteInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityNameInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\SiteDomainInterface;
use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class Site implements SiteInterface
{
    protected $id;
    protected $domain;
    protected $name;
    protected $nameAbbreviation;

    public function __construct(
        UUIDInterface $id,
        SiteDomainInterface $domain,
        EntityNameInterface $name,
        EntityNameInterface $nameAbbreviation
    )
    {
        $this->id = $id;
        $this->domain = $domain;
        $this->name = $name;
        $this->nameAbbreviation = $nameAbbreviation;
    }

    public function getDomain(): SiteDomainInterface
    {
        return $this->domain;
    }

    public function getId(): UUIDInterface
    {
        return $this->id;
    }

    public function getName(): EntityNameInterface
    {
        return $this->name;
    }

    public function getNameAbbreviation(): EntityNameInterface
    {
        return $this->nameAbbreviation;
    }
}