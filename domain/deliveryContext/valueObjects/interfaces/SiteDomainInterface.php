<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 18:56
 */

namespace Target\Domain\DeliveryContext\ValueObjects\Interfaces;


interface SiteDomainInterface
{
    public function getValue(): string;
}