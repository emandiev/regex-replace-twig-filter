<?php
/**
 * Regex Replace Twig Filter plugin for Craft CMS 3.x
 *
 * Adds PHP's preg_replace function as a Twig filter.
 *
 * @link      https://emandiev.com/
 * @copyright Copyright (c) 2020 Danail Emandiev
 */

namespace emandiev\regexreplacetwigfilter;

use emandiev\regexreplacetwigfilter\twigextensions\RegexReplaceTwigFilterTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class RegexReplaceTwigFilter
 *
 * @author    Danail Emandiev
 * @package   RegexReplaceTwigFilter
 * @since     1.0.0
 *
 */
class RegexReplaceTwigFilter extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var RegexReplaceTwigFilter
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public string $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new RegexReplaceTwigFilterTwigExtension());

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'regex-replace-twig-filter',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
