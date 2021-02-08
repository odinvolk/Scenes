# Changelog

This is not a complete list of changes and it only starts with version 1.14.
Note that some versions listed here may be unreleased, I use version number incremements for testing purposes so released version numbers may not be contiguous.

## Version 1.50
* Added function to download YouTube videos (when using Mopidy-Youtube) and save the audio locally for future streaming. See [here](/RompR/Rompr-And-Mopidy) as there are specific requirements for this to work.

## Version 1.48
* Seem to have missed a few
* Player selection via the URL, based on initial work by Manvendra Bhangui
* Remove some outdated terminology. You will need to restart romonitor if you are using it, but first you must refresh a browser window once.


## Version 1.42
* Added a quick-and-dirty plugin to import Ratings from Cantata into RompR. Development of Cantata has stopped, so there's very little point in putting any more work into interoperability with it.
* A few minor bugfixes.


## Version 1.41
* Added 'folder' as a valid filename for local album art
* Added Genres to the database. This permits the Collection to be sorted by Genre, along with a few other new features.
* Fix bug in Last.FM Playcount sync where it only worked the first time you used it
* Fix bug in Last.FM Playcount sync that wouldn't mark podcast episodes as listsened when using MySQL
* Added Custom Personal Radio Station creator

### NOTES:
* This version will update your Music Collection the first time you run it, in order to add the Genre information to the database.
* Spotify does not return Genre information, even though the API says it does, so Genres will only work for Local Music and the data will only be as good as the state of the tags in your music files.


## Version 1.40

Thought I'd bump the version number up a bit since this seems like quite a big release that contains a lot of work.

### FEATURES:
* The first time you load this version it will update your Music Collection automatically. Sorry for having to force that on you but it's essential.
* [romonitor](/RompR/Rompr-And-Mobiles) can now do Last.FM scrobbling, which will help make scrobbles match exactly what's in the Rompr collection - which will help for those people using Last.FM to sync their playcounts across devices and helps especially with podcasts, where the metadata used by eg mpdscribble often differs enormously from the more detailed info available to Rompr.
* Make Mopidy-Youtube handling work better. This version of Rompr works best wuth the fork of Mopidy-Youtube [here](https://github.com/natumbri/mopidy-youtube)
* Completely redesigned the Community Radio Browser to simplify the interface and make it more consistent with TuneIn
* Albums can now be moved manually to the Spoken Word section, and back to the Music Collection
* New pop-up menus for all tracks allowing you to tag, rate, and add to playlists right from the Music Collection or Search Results
* The Playlist Manager has been removed, since all of its functionality is now incorporated into the main playlist chooser panel
* The Tags and Ratings manager has been removed since a) I hated it and b) almost everything it did can now be done via the main Collection panel
* The 'back' button on the phone skin is now always visible so you don't have to scroll back to the top to go back
* Done quite a lot of work on the Skypotato skin to make it neater, more efficient, and smoother and give it all the same functionality as the Desktop skin
* Almost all the UI code has been updayted and tidied up for a faster, smoother UI.
* I wrote a script to automate a lot of the work in making icon themes, so now there are LOADS of them :-D
* 'Display Search Results as Directory Tree' is now incoporated into a new menu giving you the option to display your search results in a different format to the Muisc Collection
* A lot of images are now lazy-loaded so they're only loaded when they're visible on screen, which reducs memory usage a lot. This requires a modern browser and will fall back to loading everything at once if your browser doesn't support it. Recent versions of all major browsers should work, except for Safari where it's still listed as an 'Experimental' feature.

### FIXES:
* Translations have been cleaned up - unused translation keys have been removed. For translators, any key missing from the translations has been added to the end of the translation file, commented out, ready to be updated. This will make it much easier for you to follow my crazy and undocumented updates.
* Fix Panel hiding not working in Fruit skin
* Make the Snapcast controls look neater
* Fix some bugs relating to loading playlists
* On first run this version will upgrade MySQL installations to use 4-Byte UTF-8 encoding. Put simply, this upgrades the MySQL database to use the same character set as used by default in absolutely everything except MySQL which for some reason defauls to a 3-Byte version which makes it incompatible with basically the entire internet. As I've said before, SQLite is just better but if you insist on using MySQL/MariaDB this will help. If you have a large database this upgrade will take a very very very very very very very very very very very very long time and may well time out. If that happens make a post on the Discussion forum and I'll put up instructions on how to fix it.
* Fix ImageMagick handling of radio stations that only have a .ico file for their staion image, as many of the ones in Community Radio do. PHP-GD does not support .ico files so ImageMagick is required for these stations.
* Fixed a serious bug in the PHP URL downloading code, it's a miracle it ever worked at all.
* Fixed the play control buttons in Modern-Dark looking blurred in Safari due to Safari not rendering SVG blur correctly
* The Personalised Radio code has been re-written from scratch to make it perform better. In particular the Spotify and Last.FM stations now populate much more quickly.
* Made some changes so that Rompr is aware when a mobile device sleeps and wakes up. This reduces battery usage a little (but still can't make the alarm clock work)
* As always, hundreds of little tweaks and tinkerings here and there

### KNOWN ISSUES:
* In some circumstances, using the sort mode 'Albums (by Artist)' can cause your browser to run very slowly for around a minute after the page loads. This is not a new issue in this release but has recently been identified. I don't yet know that cause and it doesn't happen every time. Disabling your ad-blocker might help. (Rompr does not serve any ads)


## Version 1.32

* Fix last.FM Playcount importer
* Fix a small bug in Imagemagick image handling of SVG images

## Version 1.31

* Fix a bug where the collection couldn't be updated on clean installations.

## Version 1.30

* Major re-write of a lot of the backend code to streamline it and make it faster
* The default SQLite database now uses a single collection file called collection.sq3. In older releases, it would be called collection_mopidy.sq3 or collection_mpd.sq3 depending on your player type. This meant that if you had multiple players of different types you were not sharing the same collection between them all. The first time you open RompR 1.30, your collection will be upgraded to the new name. If you previously had two collections, the one that is selected will be the one that was most recently updated. Backups of the old files will be kept in prefs/oldcollections.
* [Snapcast](/RopmR/Snapcast) support
* Album Art download from Last.FM was broken, has now been fixed
* Last.FM Info panel will display artist images again, but not for 'Similar Artists', and only in certain circumstances. Last.FM have removed all artist image functionality.
* Done quite a lot of work on the Discogs Info panel to include images and a search that actually works and is quite accurate. This also makes the Videos panel work a lot better and get more accurate matches.
* Multitudinous new icon themes
* Some changes to the layout of the Phone and Tablet skins. Large tablets will now display the Now Playing, Play Queue, and Media Chooser panels simultaneously when in Landscape orientation.
* Alarm Clock and Sleep Timer now supported on the Tablet skin. Note that they still won't work if your tablet sleeps, but the tablet skin is quite good for small laptop screens so that's what this is intended for.
* Quite a lot of work has gone into preventing browsers from timing out on long collection updates. Did you know that browsers automatically retry if something takes more than 2 minutes? I didn't, but I do now. Crikey, it's annoying. So I've made some changes that will hopefully prevent this from being a problem. If you see your Collection Update just keep looping round and round, close your browser, restart your web server, then try again and send me a debug log at level 8.
* Dirble Radio Browser has been removed, since Dirble seems to be no longer working, and it was always unreliable. Now we have TuneIn and Community Radio it's not really needed.
* Various minor bugfixes
