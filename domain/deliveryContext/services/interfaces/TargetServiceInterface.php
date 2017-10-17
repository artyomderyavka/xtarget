<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 14:12
 */

namespace Target\Domain\DeliveryContext\Services\Interfaces;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsRequestDtoInterface;
use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsResponseDtoInterface;

interface TargetServiceInterface
{
    public function pickTargets(PickTargetsRequestDtoInterface $pickTargetsRequestDto): PickTargetsResponseDtoInterface;
}