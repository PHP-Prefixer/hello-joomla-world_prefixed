<?php /* This file has been prefixed by <PHP-Prefixer> for "Hello Prefixed World for Joomla" */

declare(strict_types=1);

namespace PPP\Doctrine\Inflector\Rules\French;

use PPP\Doctrine\Inflector\GenericLanguageInflectorFactory;
use PPP\Doctrine\Inflector\Rules\Ruleset;

final class InflectorFactory extends GenericLanguageInflectorFactory
{
    protected function getSingularRuleset() : Ruleset
    {
        return Rules::getSingularRuleset();
    }

    protected function getPluralRuleset() : Ruleset
    {
        return Rules::getPluralRuleset();
    }
}
