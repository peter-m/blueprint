What does it do?
=============
This is going to be some sort of boilerplate, considered to ease your webdeveloper's life with the following features:
+   css/styles.css is a solid css reset (I cherry-picked the best out of the 
    [YUI reset](developer.yahoo.com/yui/reset/ "Yahoo reset"), 
    [Eric Meyer's CSS Reset](http://meyerweb.com/eric/thoughts/2007/05/01/reset-reloaded/ "Eric Meyer's CSS Reset"), 
    the one from the [HTML5 Boilerplate](http://html5boilerplate.com/ "HTML5 Boilerplate") 
    and of course my own experiences), furthermore it provides you with print-styles, helper classes, 
    styles for HTML5 elements for browsers that are not familiar with them and predefined media queries 
    for mobile web design.

+   css/ie7.css fixes some bugs for IE7

+   js/libs/ provides you with some libraries (such as jQuery, 
    [jQuery Animate Enhanced](http://github.com/benbarnett/jQuery-Animate-Enhanced) 
    (extends jQuery's ```animate()``` function so that it makes use of CSS3 animations if possible), 
    [jQuery History](https://github.com/balupton/jquery-history) (used for cross-browser 
    pushState functionality and hash-fallback for IE) and [Modernizr](http://www.modernizr.com/docs/) 
    (teaches older browsers how to display HTML5 elements and provides functionality to load shims if needed))

+   js/pushState.js "ajaxifies" your site, prevents the default action when clicking an internal link 
    and instead requests the page's content via AJAX and changes the URI to the requested page's one

+   there also is a .htaccess file, rewriting yourdomain/dir-where-it-is-placed/xyz to 
    yourdomain/dir-where-it-is-placed/index.php/xyz (thus creating a virtual path, 
    which is "parsed" by index.php)

+   appcache.php is like xyz.appcache (it is .php with a "text/cache-manifest"-header because some servers 
    aren't capable of the .appcache format and serve it with a false MIME type)

+   index.php basically does all the work (parses virtual path, created by .htaccess, into an array, 
    sets a BASEPATH (if this file is accessed by yourdomain.com/path/to/index.php, 
    BASEPATH will be "/path/to" -> useful for internal linking))