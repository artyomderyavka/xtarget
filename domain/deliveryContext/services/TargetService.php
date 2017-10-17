<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 17.10.2017
 * Time: 14:14
 */

namespace Target\Domain\DeliveryContext\Services;


use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsRequestDtoInterface;
use Target\Domain\DeliveryContext\Dto\Interfaces\PickTargetsResponseDtoInterface;
use Target\Domain\DeliveryContext\Factories\Interfaces\DtoFactoryInterface;
use Target\Domain\DeliveryContext\Services\Interfaces\TargetServiceInterface;

class TargetService implements TargetServiceInterface
{
    const RESPONSE_TARGETS_AMOUNT = 5;

    protected $dtoFactory;

    public function __construct(DtoFactoryInterface $dtoFactory)
    {
        $this->dtoFactory = $dtoFactory;
    }

    public function pickTargets(PickTargetsRequestDtoInterface $pickTargetsRequestDto): PickTargetsResponseDtoInterface
    {
        $targetsCollection = $this->pickBestTargets($pickTargetsRequestDto, self::RESPONSE_TARGETS_AMOUNT);
        var_dump($this->dtoFactory);
        die;
    }

    protected function pickBestTargets(PickTargetsRequestDtoInterface $pickTargetsRequestDto, int $limit = 0)
    {

    }
}