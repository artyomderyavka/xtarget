<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 15:14
 */

namespace Target\Domain\DeliveryContext\Factories\Interfaces;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsRequestDtoInterface;

interface DtoFactoryInterface
{
    public function createPickTargetResponseDto(array $pickTargetResponseData): PickTargetsRequestDtoInterface;
}