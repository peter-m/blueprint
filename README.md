What does it do?
=============
This is going to be some sort of boilerplate, considered to ease your webdeveloper's life with the following features:

+   *css/styles.css* is a __solid css reset__ (I cherry-picked the best from the 
    [YUI reset](developer.yahoo.com/yui/reset/ "Yahoo reset"), 
    [Eric Meyer's CSS Reset](http://meyerweb.com/eric/thoughts/2007/05/01/reset-reloaded/ "Eric Meyer's CSS Reset"), 
    the one from the [HTML5 Boilerplate](http://html5boilerplate.com/ "HTML5 Boilerplate") 
    and of course my own experiences) and fixes [IE's em resizing bug](http://www.alistapart.com/articles/elastic/), 
    furthermore it provides you with print-styles, helper classes 
    (.unselectable, .hidden, .center, [.fluid](http://www.alistapart.com/articles/fluid-images/)
    (for images and objects), a semantic .clearfix and many more coming soon), 
    styles for HTML5 elements for browsers that are not familiar with them and predefined 
    [media queries](http://css-tricks.com/css-media-queries/) for mobile web design.

+   *css/plugins/...* provides you with some useful ressources, e.g. a [pure css tree menu](http://www.thecssninja.com/css/css-tree-menu)
    (credits go to [thecssninja.com](http://www.thecssninja.com/))

+   *css/ie7.css* __fixes some bugs__ for IE7

+   *js/libs/* __provides__ you with some libraries (such as __[jQuery](http://jquery.com/)__, 
    __[jQuery Animate Enhanced](http://github.com/benbarnett/jQuery-Animate-Enhanced)__ 
    (extends jQuery's ```animate()``` function so that it makes use of CSS3 animations if possible), 
    __[jQuery History](https://github.com/balupton/jquery-history)__ (used for cross-browser 
    pushState functionality and hash-fallback for IE) and __[Modernizr](http://www.modernizr.com/docs/)__ 
    (teaches older browsers how to display HTML5 elements and [provides functionality to load shivs if needed](http://www.alistapart.com/articles/taking-advantage-of-html5-and-css3-with-modernizr/)))

+   *js/pushState.js* __"ajaxifies" your site__, prevents the default action when clicking an internal link 
    and instead requests the page's content via AJAX and changes the URI to the requested page's one

+   *js/makeUnselectable.js* is __teaches IE and Opera__ how __not__ to select something 
    (recursively on all .unselectable elements)

+   there also is a *.htaccess* file, rewriting yourdomain/dir-where-it-is-placed/xyz to 
    yourdomain/dir-where-it-is-placed/index.php/xyz (thus __creating a virtual path__, 
    which is "parsed" by index.php) and fixing the 
    "[document-compatibility-leading-to-validation-error-problem](http://www.456bereastreet.com/archive/201103/x-ua-compatible_and_html5/)"

+   *appcache.php* is like xyz.appcache (it is .php with a "text/cache-manifest"-header because some servers 
    aren't capable of the [.appcache](http://www.html5rocks.com/en/tutorials/appcache/beginner/ "Tutorial") 
    format and serve it with a false MIME type) - set it up correctly and you will be able to __display 
    your page even if you are offline!__

+   *index.php* basically does all the work (__parses virtual path__, created by .htaccess, into an array, 
    sets a __BASEPATH__ (if this file is accessed by yourdomain.com/path/to/index.php, 
    BASEPATH will be "/path/to" -> useful for internal linking))<br/>
    Furthermore it is a nice template to start with, showing off some of the project's features
    (sidenode: the more curious ones may have noticed the use of insemantic container tags for the ```<header>```
    and the ```<footer>``` tag to enable full browser width bars - of course this effect could also have been 
    achieved by using the more semantic ```:before``` and ```:after``` CSS pseudo classes, as shown by 
    [css-tricks.com](http://css-tricks.com/full-browser-width-bars/), but there are several drawbacks that go
    hand in hand with this technique, such as the need of declaring the ```overflow-x: hidden``` which has some
    additional drawbacks (when selecting text the content may disappear!))

ToDo:
----------------

+   add another css file for more advanced css helper classes ([css tabs](http://css-tricks.com/functional-css-tabs-revisited/), 
    [responsive data tables](http://css-tricks.com/responsive-data-tables/), :after for external links/..., a 
    [CSS3 tooltip](http://t3n.de/news/css3-individuelle-tooltips-ohne-356353/) and more)

+   merge ie7.css and styles.css (make use of Modernizr's dynamic .ie7 class)

+   organize styles.css and document it for readability's sake!

+   working appache.php ([dynamic one](http://www.richardleggett.co.uk/blog/index.php/dynamic-application-cache-manifest-for-php)?
    (requires some additional logic for the virtual paths (as every combination 
    (yourdomain.com/index.php/xyz where xyz could be EVERYTHING) is possible))

+   MVC (maybe even a leightweight CMS)

+   add a [sitemap](http://www.sitemaps.org/) (maybe even generator, would do pretty much the same as the dynamic appcache.php)

+   include some [HTML5 cross browser polyfills](http://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills), 
    which are ready to be used in with [Modernizr](http://www.modernizr.com/docs/)

+   icons ([apple touch icon](http://allinthehead.com/retro/319/how-to-set-an-apple-touch-icon-for-any-site), favicon)

+   more leighweight version (without MVC/CMS and helper classes) or a builder (only select the components you wish)

+   add [cross browser HTML5 progress bars](http://www.useragentman.com/blog/2012/01/03/cross-browser-html5-progress-bars-in-depth/)
    (update CSS reset and add helper class + polyfill)

+   add [cross browser HTML5 forms](http://www.useragentman.com/blog/2010/07/27/cross-browser-html5-forms-using-modernizr-webforms2-and-html5widgets/)

+   create a __slick__ WYSIWYG editor (with the contenteditable attribute, crossbrowser support (IE))

+   improve .htaccess and add some more features (see the one from [initializr](http://www.initializr.com/builder?print&mode=custom&h5bp-htaccess))

+   create a collection of tips for [common mistakes](http://www.456bereastreet.com/archive/201112/the_difference_between_widthauto_and_width100/) and more