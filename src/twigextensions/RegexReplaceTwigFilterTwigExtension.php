<?php
/**
 * Regex Replace Twig Filter plugin for Craft CMS 3.x
 *
 * Adds PHP's preg_replace function as a Twig filter.
 *
 * @link      https://emandiev.com/
 * @copyright Copyright (c) 2020 Danail Emandiev
 */

namespace emandiev\regexreplacetwigfilter\twigextensions;

use emandiev\regexreplacetwigfilter\RegexReplaceTwigFilter;

use Craft;

/**
 * @author    Danail Emandiev
 * @package   RegexReplaceTwigFilter
 * @since     1.0.0
 */
class RegexReplaceTwigFilterTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'RegexReplaceTwigFilter';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('preg_replace', [$this, 'replace'], ['is_safe' => ['all']]),
        ];
    }

    public function replace($subject, $pattern, $replacement)
    {
        return preg_replace($pattern, $replacement, $subject);
    }
}
