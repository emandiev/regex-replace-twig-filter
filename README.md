# Regex Replace Twig Filter plugin for Craft CMS 3.x/4.x

Adds PHP's preg_replace function as a Twig filter.

## Requirements

This plugin requires Craft CMS 3.x or 4.x

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

```
cd /path/to/project
```

2. Then tell Composer to load the plugin:

```
composer require emandiev/regex-replace-twig-filter
```

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Regex Replace Twig Filter.

## Usage

```
{{ entry.heading|preg_replace('~pattern~', 'replacement') }}
```

Any backslashes in the regular expression **must** to be double-escaped ```\\``` to work properly.

## How is this different from Craft's [replace filter](https://docs.craftcms.com/v3/dev/filters.html#replace)?

In short, the **preg_replace** filter offers a more direct call to PHP's ```preg_replace``` function.

Craft's filter allows for both normal string and regex replacements but slightly limits the regex replacement functionality.

### Example 1

**preg_replace** allows you to use any delimiter, while **replace** works only with forward slashes ```/```.

```
{{ entry.heading|preg_replace('~pattern~', 'replacement') }}
```

### Example 2

The **replace** filter performs ```str_replace``` when an array is passed and always ignores the ```$limit``` parameter.

**preg_replace** binds all it's parameters to [PHP's function](https://www.php.net/manual/en/function.preg-replace.php).

This allows you to pass arrays for the ```$pattern``` and ```$replacement``` parameters, and an integer for the ```$limit``` parameter.

```
{{ entry.heading|preg_replace(['~pattern1~', '~pattern2~'], ['replacement1', 'replacement2'], 3) }}
```

## Credits

Brought to you by [Danail Emandiev](https://emandiev.com/)