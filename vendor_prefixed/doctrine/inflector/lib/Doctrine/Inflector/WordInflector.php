<?php /* This file has been prefixed by <PHP-Prefixer> for "Hello Prefixed World for Joomla" */

declare(strict_types=1);

namespace PPP\Doctrine\Inflector;

interface WordInflector
{
    public function inflect(string $word) : string;
}
