=== Skin Tags ===
Contributors: billifer
Tags: tags, formatting, sidebar, tag cloud
Requires at least: 2.3
Tested up to: 2.4-bleeding
Stable tag: 0.8

Want to right-justify the tag cloud in del.icio.us style but the non-breaking spaces get in the way? Skin those tags!

== Description ==

I wanted to make my tag cloud (new with WP 2.3) look more like the one generated by del.icio.us, with a flush margin on both the left and the right. But when I tried to do it, it sucked because the internal spaces in the tags had been replaced by non-breaking space characters. Argh! This plugin, simple as it is, allows a tag to break across the column.

More importantly, it serves as a "Hello, Taggy!"-type example for how to build a filter for the `wp_tag_cloud` hook for your own future exploration.

== Installation ==

Unzip in the `wp-contents/plugins` directory and activate in your Admin plugins panel. You're ready to go. There are no options. The code is so simple, you can merely play with the code to change the output.