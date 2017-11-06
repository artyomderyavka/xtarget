<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 06.11.2017
 * Time: 11:26
 */

namespace Target\Domain\DeliveryContext\ValueObjects;


use Target\Domain\DeliveryContext\ValueObjects\Interfaces\EntityStatusInterface;

class PublicationStatus implements EntityStatusInterface
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