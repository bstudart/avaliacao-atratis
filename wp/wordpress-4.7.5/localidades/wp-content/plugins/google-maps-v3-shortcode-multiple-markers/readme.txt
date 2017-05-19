=== Plugin Name ===
Contributors: soundwaves-productions,yohman
Tags: google maps, google maps, shortcode, shortcodes, google maps v3, v3, map, multiple marker, marker, mapping, maps, latitude, longitude, api, traffic
Requires at least: 2.8
Tested up to: 4.3.1
Stable tag: trunk

This plugin supports multiple markers per map! Kudos to yohman for his plugin:
http://wordpress.org/extend/plugins/google-maps-v3-shortcode/


== Description ==

This plugin allows you to add one or more maps (via the Google Maps v3 API) to your page/post using shortcodes.
This plugin supports multiple markers per map !

Features:

* multiple maps on the same post
* multiple markers per map
* set map size
* set zoom level
* set map type
* set location by latitude/longitude
* set location by address
* add custom image as map icon

== Installation ==
1. Upload the `google-maps-v3-shortcode-multiple-markers` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the `Plugins` menu in WordPress
1. Add shortcodes in your posts, e.g.
[MultipleMarkerMap id="MultipleMarkerMapDemo" z="12" lat="48.220162" lon="16.287525" marker="48.193054,16.261282,Bar,http://google-maps-icons.googlecode.com/files/cocktail.png|48.220162,16.287525,point-of-view,http://google-maps-icons.googlecode.com/files/beautiful.png" w="690" h="442"]

== Screenshots ==

1. Plugin in action

== Frequently Asked Questions ==
= How do I add a map to my post? =

Use shortcode:

e.g.:
[MultipleMarkerMap id="MultipleMarkerMapDemo" z="12" lat="48.220162" lon="16.287525" marker="48.193054,16.261282,Bar,http://google-maps-icons.googlecode.com/files/cocktail.png|48.220162,16.287525,point-of-view,http://google-maps-icons.googlecode.com/files/beautiful.png" w="690" h="442"]

= Can I add multiple maps to the same post? =

Yes!  But make sure you use the "id" parameter to create unique id's for each map.

e.g.:
[MultipleMarkerMap id="MultipleMarkerMapDemo" z="12" lat="48.220162" lon="16.287525" marker="48.193054,16.261282,Bar,http://google-maps-icons.googlecode.com/files/cocktail.png|48.220162,16.287525,point-of-view,http://google-maps-icons.googlecode.com/files/beautiful.png" w="690" h="442"]

[MultipleMarkerMap id="MultipleMarkerMapDemo2" z="12" lat="48.220162" lon="16.287525" marker="48.203054,16.261282,Bar,http://google-maps-icons.googlecode.com/files/cocktail.png|48.230162,16.287525,point-of-view,http://google-maps-icons.googlecode.com/files/beautiful.png" w="690" h="442"]

= Can I add multiple markers on the same map? =

Yes ! Just add following shortcode to your page or post (markers are separated with "|" )

[MultipleMarkerMap id="MultipleMarkerMapDemo" z="12" lat="48.220162" lon="16.287525" marker="48.193054,16.261282,Bar,http://google-maps-icons.googlecode.com/files/cocktail.png|48.220162,16.287525,point-of-view,http://google-maps-icons.googlecode.com/files/beautiful.png" w="690" h="442"]


= Can I change the size of the map? =
Yes!  Just add your own width and height parameters (the default is 400x300).

Ex:
[MultipleMarkerMap w="200" h="100"]

== Changelog ==

= 1.0 =
* First release
