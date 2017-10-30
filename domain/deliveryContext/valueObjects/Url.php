<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 14:03
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UrlInterface;

class Url implements UrlInterface
{
    protected $value;

    public function __construct(?string $url = null)
    {
        $this->value = $url ?? '';
    }

    public function getValue(): string
    {
        return $this->value;
    }
}