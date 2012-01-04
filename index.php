<?php
/*
 * if this file is accessed by yourdomain.com/path/to/index.php, BASEPATH will be "/path/to" -> useful for linking
 */
define("BASEPATH", str_replace("/" . basename($_SERVER["SCRIPT_NAME"]), "", $_SERVER["SCRIPT_NAME"]));
//define("ROOT", realpath($_SERVER["DOCUMENT_ROOT"]) . BASEPATH . "/");

$address = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['PHP_SELF']); // get string after index.php/
$address = substr($address, 1); // delete the first slash
$address = substr($address, strlen($address) - 1, strlen($address)) == "/" ? substr($address, 0, strlen($address) - 1) : $address;

// get nodes out of address
if ($address == "") { // if we are in the home directory...
    $nodes[0] = "index"; // ... levels is not empty, but index
} else {
    $nodes = explode('/', $address); // make array
}
?>
<!DOCTYPE html>
<!--<html manifest="appcache.php">-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>test</title>
	<meta name="description" content="A simple test page" />
	<meta name="author" content="Peter Mühlbacher" />

	<meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" href="<?=BASEPATH?>/css/styles.css" />
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="<?=BASEPATH?>/css/ie7.css" />
        <![endif]-->
        
	<!--<script src="<?=BASEPATH?>/js/libs/modernizr-2.0.6.min.js"></script>-->
    </head>
    <body>
        <header id="banner">
            <h1><a href="/">sample page <strong>HTML5 blueprint</strong></a></h1>
                <nav><ul>
                        <li class="active"><a href="<?=BASEPATH?>/">home</a></li>
                        <li><a href="<?=BASEPATH?>/portfolio/">portfolio</a></li>
                        <li><a href="<?=BASEPATH?>/blog/">blog</a></li>
                        <li><a href="<?=BASEPATH?>/contact/">contact</a></li>
                </ul></nav>
        </header><!-- /#banner -->
        <aside id="featured"><article>
            <figure>
                <img src="img/..." alt="something" />
            </figure>
            <hgroup>
                <h2>Featured Article</h2>
                <h3><a href="#">Gimme some lorem ipsur!</a></h3>
            </hgroup>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
            </p>
        </article></aside><!-- /#featured -->
        <section id="content" class="body">

                <ol id="posts-list" class="hfeed">

                        <li><article class="hentry">
                                <header>
                                        <h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this POST TITLE">This be the title</a></h2>
                                </header>

                                <footer class="post-info">
                                        <abbr class="published" title="2005-10-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
                                                10th October 2005
                                        </abbr>

                                        <address class="vcard author">
                                                By <a class="url fn" href="#">Enrique Ramírez</a>

                                        </address>
                                </footer><!-- /.post-info -->

                                <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.</p>

                                </div><!-- /.entry-content -->
                        </article></li>

                        <li><article class="hentry">
                                ...
                        </article></li>

                        <li><article class="hentry">
                                ...
                        </article></li>
                </ol><!-- /#posts-list -->

        </section><!-- /#content -->
        <section id="extras" class="body">
                <div class="blogroll">
                        <h2>blogroll</h2>
                        <ul>

                                <li><a href="#" rel="external">HTML5 Doctor</a></li>
                                <li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
                                <li><a href="#" rel="external">Smashing Magazine</a></li>

                                <li><a href="#" rel="external">W3C</a></li>
                                <li><a href="#" rel="external">Wordpress</a></li>
                                <li><a href="#" rel="external">Wikipedia</a></li>

                                <li><a href="#" rel="external">HTML5 Doctor</a></li>
                                <li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
                                <li><a href="#" rel="external">Smashing Magazine</a></li>

                                <li><a href="#" rel="external">W3C</a></li>
                                <li><a href="#" rel="external">Wordpress</a></li>
                                <li><a href="#" rel="external">Wikipedia</a></li>

                                <li><a href="#" rel="external">HTML5 Doctor</a></li>
                                <li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
                                <li><a href="#" rel="external">Smashing Magazine</a></li>

                                <li><a href="#" rel="external">W3C</a></li>
                                <li><a href="#" rel="external">Wordpress</a></li>
                                <li><a href="#" rel="external">Wikipedia</a></li>

                        </ul>
                </div><!-- /.blogroll -->

                <div class="social">
                        <h2>social</h2>
                        <ul>

                                <li><a href="http://delicious.com/enrique_ramirez" rel="me">delicious</a></li>
                                <li><a href="http://digg.com/users/enriqueramirez" rel="me">digg</a></li>
                                <li><a href="http://facebook.com/enrique.ramirez.velez" rel="me">facebook</a></li>

                                <li><a href="http://www.lastfm.es/user/enrique-ramirez" rel="me">last.fm</a></li>
                                <li><a href="http://website.com/feed/" rel="alternate">rss</a></li>
                                <li><a href="http://twitter.com/enrique_ramirez" rel="me">twitter</a></li>

                        </ul>
                </div><!-- /.social -->
        </section><!-- /#extras -->
        <footer id="contentinfo" class="body">
                <address id="about" class="vcard body">
                        <span class="primary">
                                <strong><a href="#" class="fn url">Smashing Magazine</a></strong>

                                <span class="role">Amazing Magazine</span>
                        </span><!-- /.primary -->

                        <img src="images/avatar.gif" alt="Smashing Magazine Logo" class="photo" />
                        <span class="bio">Smashing Magazine is a website and blog that offers resources and advice to web developers and web designers. It was founded by Sven Lennartz and Vitaly Friedman.</span>

                </address><!-- /#about -->
                <p>2005-2009 <a href="http://smashingmagazine.com">Smashing Magazine</a>.</p>
        </footer><!-- /#contentinfo -->

        <p>testpage with an <a href="<?=BASEPATH?>/test/">internal link</a> and an <a href="http://www.google.com">external link</a></p>
        <p>nodes: <?php
            print_r($nodes);
        ?></p>
        <p>
            <a href="<?=BASEPATH?>/">home</a>
        </p>
        <br/>
        <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
        </p>
        <p>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
        </p>
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> <!--jQuery should be loaded after the closing body tag-->
    <script type="text/javascript">window.jQuery || document.write('<script src="<?=BASEPATH?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
    <script src="<?=BASEPATH?>/js/libs/jquery.history.js"></script>
    <script src="<?=BASEPATH?>/js/libs/jquery.animate-enhanced.min.js"></script>
    <script src="<?=BASEPATH?>/js/pushState.js"></script>
    <script src="<?=BASEPATH?>/js/makeUnselectable.js"></script>
</html>