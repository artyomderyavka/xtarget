<?php


namespace Target\Domain\DeliveryContext\Dto\Interfaces;


interface PickTargetsRequestDtoInterface
{
    public function getAllowedToRewriteSiteIds(): array;
    public function getAlreadyRegisteredOnSiteIds(): array;
    public function getBlacklistStatus(): bool;
    public function getCountry(): string;
    public function getGender(): string;
    public function getOrientation(): string;
    public function getPaymentStatus(): string;
    public function getPlatform(): string;
    public function getSafeParam(): string;
    public function getScammerStatus(): bool;
    public function getSourceSiteDomain(): string;
    public function getTrafficChannel(): string;
}