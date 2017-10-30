<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 13:28
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\UUIDInterface;

class UUID implements UUIDInterface
{
    protected $value;

    public function __construct(?string $uuid = null)
    {
        if (!is_null($uuid)) {
            $this->value = $uuid;
        } else {
            $this->value = $this->generateNew();
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }

    protected function generateNew(): string
    {
        return 'aaaaaaaaaaaaaaaabbbbbbbbbbbbbb';
    }
}