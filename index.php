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
<!--<html manifest="appcache.php"> - not working correctly at the moment -->
<!-- the "no-js" class will be replaced by Modernizr with a "js" class (if JS is enabled) - why not use the <noscript> tag? - because it's depraced -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <title>test</title>
	<meta name="description" content="A simple test page" />
	<meta name="author" content="Peter Mühlbacher" />

	<meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" href="<?=BASEPATH?>/css/styles.css" />
        <link rel="stylesheet" href="<?=BASEPATH?>/css/plugins/css-tree/css-tree.css" />
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="<?=BASEPATH?>/css/ie7.css" />
        <![endif]-->
        
	<script src="<?=BASEPATH?>/js/libs/modernizr-2.0.6.min.js"></script> <!-- some examples on how to use Modernizr: http://www.alistapart.com/articles/taking-advantage-of-html5-and-css3-with-modernizr/ -->
    </head>
    <body>
        <div id="header-container">
            <header class="body clearfix">
                <h1 id="title">h1#title</h1>
                <nav>
                    <ul>
                        <li><a href="<?=BASEPATH?>/">home</a></li>
                        <li><a href="<?=BASEPATH?>/test">test</a></li>
                        <li><a href="<?=BASEPATH?>/css/plugins/css-tree/">css-tree sample</a></li>
                    </ul>
                </nav>
            </header>
        </div> <!-- #header-container -->
            <div id="main" class="body clearfix">
                <article>
                    <header>
                        <h1>article header h1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    </header>
                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>
                    <section>
                        <h2>article section h2</h2>
                        <p>testpage with an <a href="<?=BASEPATH?>/test/">internal link</a> and an <a href="http://www.google.com">external link</a></p>
                        <p>nodes: <?php
                            print_r($nodes);
                        ?></p>
                    </section>
                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>

                <aside>
                    <h3>aside</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>
            </div> <!-- #main -->

        <div id="footer-container">
            <footer class="body">
                <h3>footer</h3>
                <p><a href="<?=BASEPATH?>/">home</a></p>
            </footer>
        </div><!-- #footer-container-->
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> <!--jQuery should be loaded after the closing body tag-->
    <script type="text/javascript">window.jQuery || document.write('<script src="<?=BASEPATH?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
    <script src="<?=BASEPATH?>/js/libs/jquery.history.js"></script>
    <script src="<?=BASEPATH?>/js/libs/jquery.animate-enhanced.min.js"></script>
    <script src="<?=BASEPATH?>/js/pushState.js"></script>
    <script src="<?=BASEPATH?>/js/makeUnselectable.js"></script>
</html>