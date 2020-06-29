<?php

namespace PhpAssets\Css;

/**
 * Reader for javascript or template files.
 */
interface ReaderInterface
{
    /**
     * Get javascript extension langauge name from path.
     *
     * @param string $path
     * @return string
     */
    public function lang($path);

    /**
     * Get raw javascript or extension language from path.
     *
     * @param string $path
     * @return string
     */
    public function raw($path);
}
