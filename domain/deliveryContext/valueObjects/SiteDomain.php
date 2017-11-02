<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 18:57
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\SiteDomainInterface;

class SiteDomain implements SiteDomainInterface
{
    protected $domain;

    public function __construct(string $domain)
    {
        $this->domain = $domain;
    }

    public function getValue(): string
    {
        return $this->domain;
    }
}