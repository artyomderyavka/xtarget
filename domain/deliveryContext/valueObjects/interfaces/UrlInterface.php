<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 14:02
 */

namespace Target\Domain\DeliveryContext\ValueObjects\Interfaces;


interface UrlInterface
{
    public function getValue(): string;
}