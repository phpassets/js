<?php

namespace PhpAssets\Js;

interface MinifierInterface
{
    /**
     * Minify javascript string.
     *
     * @param string $script
     * @return string
     */
    public function minify($script);
}
