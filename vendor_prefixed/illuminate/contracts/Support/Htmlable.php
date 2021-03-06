<?php /* This file has been prefixed by <PHP-Prefixer> for "Hello Prefixed World for Joomla" */

namespace PPP\Illuminate\Contracts\Support;

interface Htmlable
{
    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function toHtml();
}
