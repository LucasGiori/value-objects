<?php

namespace RenanDelmonico\Vo;

interface Immutable
{
    /**
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function __set(string $name, mixed $value): void;

    /**
     * @param string $name
     * @return void
     */
    public function __unset(string $name): void;
}