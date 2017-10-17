<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 15:16
 */

namespace Target\Domain\DeliveryContext\Factories;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsRequestDtoInterface;
use Target\Domain\DeliveryContext\Dto\PickTargetsResponseDto;
use Target\Domain\DeliveryContext\Factories\Interfaces\DtoFactoryInterface;

class DtoFactory implements DtoFactoryInterface
{
    public function getPickTargetResponseDto(array $pickTargetResponseData): PickTargetsRequestDtoInterface
    {
        return new PickTargetsResponseDto($pickTargetResponseData);
    }
}