What does it do?
=============
This is going to be some sort of boilerplate, considered to ease your webdeveloper's life with the following features:

+   *css/styles.css* is a __solid css reset__ (I cherry-picked the best from the 
    [YUI reset](developer.yahoo.com/yui/reset/ "Yahoo reset"), 
    [Eric Meyer's CSS Reset](http://meyerweb.com/eric/thoughts/2007/05/01/reset-reloaded/ "Eric Meyer's CSS Reset"), 
    the one from the [HTML5 Boilerplate](http://html5boilerplate.com/ "HTML5 Boilerplate") 
    and of course my own experiences), furthermore it provides you with print-styles, helper classes 
    (.unselectable, .hidden, a semantic .clearfix and many more coming soon), 
    styles for HTML5 elements for browsers that are not familiar with them and predefined 
    [media queries](http://css-tricks.com/css-media-queries/) for mobile web design.

+   *css/ie7.css* __fixes some bugs__ for IE7

+   *js/libs/* __provides__ you with some libraries (such as __[jQuery](http://jquery.com/)__, 
    __[jQuery Animate Enhanced](http://github.com/benbarnett/jQuery-Animate-Enhanced)__ 
    (extends jQuery's ```animate()``` function so that it makes use of CSS3 animations if possible), 
    __[jQuery History](https://github.com/balupton/jquery-history)__ (used for cross-browser 
    pushState functionality and hash-fallback for IE) and __[Modernizr](http://www.modernizr.com/docs/)__ 
    (teaches older browsers how to display HTML5 elements and provides functionality to load shivs if needed))

+   *js/pushState.js* __"ajaxifies" your site__, prevents the default action when clicking an internal link 
    and instead requests the page's content via AJAX and changes the URI to the requested page's one

+   *js/makeUnselectable.js* is __teaches IE and Opera__ how __not__ to select something 
    (recursively on all .unselectable elements)

+   there also is a *.htaccess* file, rewriting yourdomain/dir-where-it-is-placed/xyz to 
    yourdomain/dir-where-it-is-placed/index.php/xyz (thus __creating a virtual path__, 
    which is "parsed" by index.php)

+   *appcache.php* is like xyz.appcache (it is .php with a "text/cache-manifest"-header because some servers 
    aren't capable of the [.appcache](http://www.html5rocks.com/en/tutorials/appcache/beginner/ "Tutorial") 
    format and serve it with a false MIME type) - set it up correctly and you will be able to __display 
    your page even if you are offline!__

+   *index.php* basically does all the work (__parses virtual path__, created by .htaccess, into an array, 
    sets a __BASEPATH__ (if this file is accessed by yourdomain.com/path/to/index.php, 
    BASEPATH will be "/path/to" -> useful for internal linking))

ToDo:
----------------

+   make a nice [HTML5 sample page](http://coding.smashingmagazine.com/2009/08/04/designing-a-html-5-layout-from-scratch/)

+   add more css helper classes ([css tabs](http://css-tricks.com/functional-css-tabs-revisited/), 
    something like the [island object](http://csswizardry.com/2011/10/the-island-object/), 
    [responsive data tables](http://css-tricks.com/responsive-data-tables/), 
    [fluid images](http://www.alistapart.com/articles/fluid-images/), :after for external links/... and more 
    [semantic stuff](http://www.alistapart.com/articles/responsive-web-design/))

+   working appache.php ([dynamic one](http://www.richardleggett.co.uk/blog/index.php/dynamic-application-cache-manifest-for-php)?
    (requires some additional logic for the virtual paths (as every combination 
    (yourdomain.com/index.php/xyz where xyz could be EVERYTHING) is possible))

+   <abbr title="Model View Controller">MVC</abbr> (maybe even a leightweight <abbr title="Content Managing System">CMS</abbr>)

+   add a [sitemap](http://www.sitemaps.org/) (maybe even generator, would do pretty much the same as the dynamic appcache.php)

+   include some [HTML5 cross browser polyfills](http://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills), 
    which are ready to be used in with [Modernizr](http://www.modernizr.com/docs/)

+   icons ([apple touch icon](http://allinthehead.com/retro/319/how-to-set-an-apple-touch-icon-for-any-site), favicon)

+   more leighweight version (without MVC/CMS and helper classes) or a builder (only select the components you wish)