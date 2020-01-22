# Regex Replace Twig Filter plugin for Craft CMS 3.x

Adds PHP's preg_replace function as a Twig filter.

## Requirements

This plugin requires Craft CMS 3.0.0 or later.

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

## Credits

Brought to you by [Danail Emandiev](https://emandiev.com/)