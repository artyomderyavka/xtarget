<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 14:52
 */

namespace Target\Factories\Interfaces;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsRequestDtoInterface;

interface DtoFactoryInterface
{
    public function getPickTargetsRequestDto(array $pickTargetsRequestData): PickTargetsRequestDtoInterface;
}