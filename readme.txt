=== Portfolium ===
Contributors: portfolium, ramiy
Tags: Portfolium, oEmbed, embed, shortcode, projects, skills, experiences, entries, students, portfolio
Requires at least: 3.5
Tested up to: 4.9
Stable tag: 1.4
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed projects, skills and experiences from Portfolium.com into your WordPress site.

== Description ==

Create your own portfolio on portfolium and embed it to your WordPress site.

= About Portfolium =

[Portfolium](https://www.portfolium.com) is an e-portfolio site for students and young professionals to showcase their work and projects. Portfolium uniquely provides a deeper, more all-encompassing view of a student's passions, abilities and potential.

= Portfolium WordPress Plugin =

Using this plugin you can embed entries from [portfolium](https://portfolium.com/entries) into your WordPress site using the entry URL or entry ID.

Choose any entry from Portfolium, or create your own! Copy the entry URL and paste it to the post text editor. Then simply click over to the visual editor to confirm that it loads properly.

Alternatively, you can embed an entry to your content using the `[portfolium id=""]` shortcode and the entry ID.

= More Information =

For any questions or more information, please [contact us](https://portfolium.com/contact).

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Portfolium".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended Requirements =
* The latest WordPress version.
* PHP version 7.0 or greater.
* MySQL version 5.6 or greater.

== Frequently Asked Questions ==

= How do I embed entries from Portfolium? =

With this plugin you can use the URL to embed entries. Just paste the entry URL into your post editor:
`https://portfolium.com/entry/space-shuttle-main-engine`

= How do I set custom dimensions to my entries? =

For advanced customization, the plugin supports shortcodes with `id` and `width` parameters:
`[portfolium id="1955" width="500"]`

Since WordPress 4.2, you can double click the embedded item to set max width and max height. It will add the WordPress `[embed]` shortcode:
`[embed width="500" height="500"]https://portfolium.com/entry/space-shuttle-main-engine[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works with all the themes.

== Screenshots ==
1. Pasting the URL to the text-editor.
2. Pasting the URL to the visual-editor.
3. Using the shortcode with entry "id" and embed "width" parameters.

== Changelog ==

= 1.4 (2016-04-04) =
* Move plugin files to 'includes' directory.

= 1.3 (2015-12-01) =
* Remove the extract() function from the shortcode.
* Remove po/mo files from the plugin.
* Use [translate.wordpress.org](https://translate.wordpress.org/) to translate the plugin.

= 1.2 (2015-03-28) =
* Prevent direct access to php file.
* Prevent direct access to directories.

= 1.1 (2015-03-19) =
* Add portfolium shortcode.
* Add screenshots.
* Add i18n support.
* Add Hebrew (he_IL) translation.

= 1.0 (2015-03-18) =
* Initial release.
* Register oEmbed provider.
