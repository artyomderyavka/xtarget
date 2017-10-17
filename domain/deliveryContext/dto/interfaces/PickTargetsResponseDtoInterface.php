<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 13:56
 */

namespace Target\Domain\DeliveryContext\Dto\Interfaces;


interface PickTargetsResponseDtoInterface
{
    public function getTargetsDataList(): array ;
}