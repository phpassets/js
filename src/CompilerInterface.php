<?php

namespace PhpAssets\Js;

interface CompilerInterface
{
    /**
     * Compile raw javascript string.
     *
     * @param string $raw
     * @return string
     */
    public function compile($raw);
}
