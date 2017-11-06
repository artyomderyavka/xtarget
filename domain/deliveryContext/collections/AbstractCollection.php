<?php
/**
 * Created by PhpStorm.
 * User: Artem Deryavka
 * Date: 26.10.2017
 * Time: 14:59
 */

namespace Target\Domain\DeliveryContext\Collections;


class AbstractCollection implements \Iterator, \Countable
{
    protected $items = [];

    public function rewind() {
        return reset($this->items);
    }

    public function current() {
        return current($this->items);
    }

    public function key() {
        return key($this->items);
    }

    public function next() {
       return next($this->items);
    }

    public function valid() {
        return null !== key($this->items);
    }

    public function count() {
        return count($this->items);
    }
}