PHP Flickr Photoset Gallery
===========================

Quick way to display photosets from Flickr through PHP. It uses [Bootstrap 3.0](http:://getbootstrap.com) along with [blueimp Gallery](https://github.com/blueimp/Gallery).

Requirements
------------

- PHP 5.3 >=
- [Flickr API key](http://www.flickr.com/services/apps/create/apply)

Installation
------------

- Download the [project zip](https://github.com/jveldboom/flickr-gallery/archive/master.zip)
- From the page you want to display the gallery add the class and enter your configuration options. (see below for a description of the config options)
- If you're using the cache, be sure to change the permissions on the gallery/cache directory to 777 (`chmod 777`)

Configuration
-------------

```php
<?php
require('gallery/class.flickr_gallery.php');
$settings = array(
	'api_key'       => 'YOUR API KEY',
	'user_id'       => 'USER ID',
	'gallery_title' => 'Gallery',
	'gallery_url'   => '/',
	'assets_url'    => '/gallery',
	'cache'         => array('path'=>__DIR__.'/gallery/cache','time'=>30),
	'per_page'      => 20,
	'indicator'     => false,
	'jquery'        => true,
	'bootstrap'     => true,
);

$gallery = new flickr_gallery($settings);
//echo $gallery->getUserId('jpn'); // use to get your flickr user id
echo $gallery->display();
```

| Name | Type | Description |
|:-----|:--------|:------------|
| api_key | string | Your flickr api key - [apply here](http://www.flickr.com/services/apps/create/apply)
| user_id | string | Your flickr user id. If you're not sure what your user id is, run `echo $gallery->getUserId('your username');` Do not run this everytime though as it will be an unnessiary API call.
| gallery_title | string | Text displayed in the bread crumbs
| gallery_url | string | Base URL for gallery (usually '/gallery/')
| assets_url | string |  Location of gallery javascript and css files
| cache | array | 'path' is the directory to store the cache files. 'time' is the number of minutes to store cache.
| per_page | int | Number of photosets per page
| indicator | boolean | Display thumbnail images within the blueimp lightbox
| jquery | boolean | Include jquery - use 'false' if jQuery is already included on the page. Note: it must be included before the gallery.
| bootstrap | boolean | Include the Bootstrap css file - use false if you're already including the Bootstrap CSS file. Just be sure it includes the needed styles for the galery. (Like for .thumbnails)


Bugs / Issues / Suggestions
---------------------------

Please let us know if you see any bugs or issues. And by all means, if you can help make any improvements, please fork the project and help!