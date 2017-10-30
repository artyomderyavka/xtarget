<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 30.10.2017
 * Time: 13:46
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;

class AdvertiserStatus implements EntityStatusInterface
{
    const INACTIVE_STATUS = 0;
    const ACTIVE_STATUS = 1;

    protected $value;

    public function __construct(?int $status = null)
    {
        $this->value = $status ?? self::INACTIVE_STATUS;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}