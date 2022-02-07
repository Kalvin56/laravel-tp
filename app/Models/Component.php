<?php

namespace App\Models;

abstract class Component
{
    /**
     * @var Component
     */
    protected $parent;

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function add($component): void { }

    public function remove($component): void { }

    public function isComposite(): bool
    {
        return false;
    }

    abstract public function operation(): string;
}