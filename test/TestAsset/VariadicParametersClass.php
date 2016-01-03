<?php

namespace ZendTest\Code\TestAsset;

class VariadicParametersClass
{
    public function firstVariadicParameter(...$foo)
    {
    }

    public function secondVariadicParameter($foo, ...$bar)
    {
    }

    public function typeHintedVariadicParameter(VariadicParametersClass ...$bar)
    {
    }
}
