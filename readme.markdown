Facebook Social Plugin Widgets 
===

Facebook Social Plugin Widgets adds 3 of the Facebook social plugins to WordPress as widgets: the Like Box, Recommendations, & the Activity Feed.

Description
------------

Facebook Social Plugin Widgets is a lightweight plugin that add three widgets to your WordPress arsenal: a Facebook Like Box, the Facebook Recommendations widget, and the Activity Feed.  This means you won't have to go to the [social plugin](http://developers.facebook.com/docs/plugins/ "social plugin") page anymore.

The plugin loads XFBML versions of each of the social plugins, and includes the facebook `all.js` in the footer of your site.

Installation
---------------

1. Download and unzip the `fb-sp-widgets.zip` file
2. Upload the `fb-sb-widgets` folder to your plugins directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Add the widgets to your sidebar

Frequently Asked Questions
------------------------------

### Where's the options page?

There isn't one.  This plugin only adds widgets to WordPress.

### What about loading these things as iFrames?

There is not currently support for this.  If you'd like this feature to be added in future versions, [get in touch](http://www.christopherguitar.net/contact-christopher/ "get in touch").

### What sorts of things can I put in the "border color" inputs?

Border color can be a color name (like "red" or "blue") or a hex color code (like #CCCCCC).

### Why don't my widgets work in Internet Explorer?

IE does a funny thing.  It requires the `<head>` tag to have a special attribute: `xmlns:fb="http://www.facebook.com/2008/fbml"`. FBSPW adds this via a filter on [language attributes](http://codex.wordpress.org/Function_Reference/language_attributes).  You must have this in your theme's `header.php` file to make this work:

`<html <?php language_attributes(); ?>>`

Screenshots
--------------

1. The Like Box widget options
2. Activity Feed widget options
3. Recommendations widget options

Changelog
----------------

### 1.3

* Bug fixes to get the widgets working again due to Facebook changes
* Switched to an async script

### 1.2

* Support for height on the like box

### 1.1

* Adds an additional filter to lanaguage attributes to render the xmlns:fb="..." <head> attributes (required for IE support)

### 1.0

* The first release!
* Supports the facebook like box, activity feed, and recommendations


Upgrade Notice
-------------------

### 1.3

* This version fixes some major issues that were causing a few JS errors

### 1.2

* Adds control for the height of the like box

### 1.1

* Adds support for IE.
