<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 06.11.2017
 * Time: 11:18
 */

namespace Target\Domain\DeliveryContext\Collections;


use Target\Domain\DeliveryContext\Collections\Interfaces\PublicationsCollectionInterface;
use Target\Domain\DeliveryContext\Entities\Interfaces\PublicationInterface;

class PublicationsCollection extends AbstractCollection implements PublicationsCollectionInterface
{
    public function add(PublicationInterface $publication): void
    {
        if (!isset($this->items[$publication->getId()->getValue()])) {
            $this->items[$publication->getId()->getValue()] = $publication;
        }
    }

    public function get(string $publicationId): PublicationInterface
    {
        if (isset($this->items[$publicationId])) {
            return $this->items[$publicationId];
        }
    }
}