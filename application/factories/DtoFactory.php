<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 14:56
 */

namespace Target\Factories;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsRequestDtoInterface;
use Target\Dto\PickTargetsRequestDto;
use Target\Factories\Interfaces\DtoFactoryInterface;

class DtoFactory implements DtoFactoryInterface
{
    public function getPickTargetsRequestDto(array $pickTargetsRequestData): PickTargetsRequestDtoInterface
    {
        return new PickTargetsRequestDto($pickTargetsRequestData);
    }
}