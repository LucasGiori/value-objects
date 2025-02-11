<?php

namespace RenanDelmonico\Vo;

use RenanDelmonico\Vo\ValueObjectContract;

trait ValueObjectBehaviors
{
    use Immutability;

    /**
     * @param ValueObjectContract $value
     * @return boolean
     */
    public function eq(ValueObjectContract $value): bool
    {
        return $this->getValue() === $value->getValue();
    }
}
