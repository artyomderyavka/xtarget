<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 06.11.2017
 * Time: 11:16
 */

namespace Target\Domain\DeliveryContext\Collections\Interfaces;


use Target\Domain\DeliveryContext\Entities\Interfaces\PublicationInterface;

interface PublicationsCollectionInterface
{
    public function add(PublicationInterface $publication): void;

    public function get(string $publicationId): PublicationInterface;
}