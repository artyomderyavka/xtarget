<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 14:03
 */

namespace Target\Domain\DeliveryContext\Dto;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsResponseDtoInterface;

class PickTargetsResponseDto implements PickTargetsResponseDtoInterface
{
    protected $targetsDataList;

    public function __construct(array $targetsDataList)
    {
        $this->targetsDataList = $targetsDataList;
    }

    public function getTargetsDataList(): array
    {
        return $this->targetsDataList;
    }
}