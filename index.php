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
        <br/>
        <p>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
        </p>
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> <!--jQuery should be loaded after the closing body tag-->
    <script type="text/javascript">window.jQuery || document.write('<script src="<?=BASEPATH?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
    <script src="<?=BASEPATH?>/js/libs/jquery.history.js"></script>
    <script src="<?=BASEPATH?>/js/libs/jquery.animate-enhanced.min.js"></script>
    <script src="<?=BASEPATH?>/js/pushState.js"></script><!--<?=BASEPATH?>/js/pushState.js-->
</html>