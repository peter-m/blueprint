/* 
 * author  : Peter Mühlbacher
 * website : peter-m.github.com
 * email   : muehlbacher.peter@gmail.com
 * 
 * FAQ:
 * Q: WHAT DOES IT DO?
 * A: it prevents the default action when clicking an internal link, 
 *    instead it requests the page's content via AJAX and changes the URI to the requested page's one
 *    
 * Q: WHY SHOULD I DO THAT?
 * A: 1. because this script makes nice looking transitions instead of the standard "flickering" when requesting a new page
 *    2. because this script is capable of deeplinking (clicking a link like yourdomain.com/xyz will result in exactly this URI*)
 *    * So, what's the catch? - like always, a _certain_ browser (IE) does not support pushState 
 *     (this nice little neat feature which enables us to change the URI without reloading anything) 
 *      -> no deeplinking without .htaccess is possible (in IE)
 *      but be reassured:
 *          1. a pretty nice fallback is offered (thanks to History.js), instead of yourdomain.com/xyz it will look like so yourdomain.com/#xyz
 *          2. a .htaccess file is enclosed
 *          
 * Q: WHY DO I HAVE TO LOAD ALL SCRIPTS AND STYLES IN THE INDEX.xyz? (/why shouldn't I load any scripts in the body tag?)
 * A: because if the script would load the requested page's _entire_ content, scripts would be loaded several times resulting in
 *    several alerts (or whatever the scripts do)
 *    
 * Q: WHAT HAPPENS IF JAVASCRIPT IS DISABLED?
 * A: nothing at all, your website will keep all the functionality it had (before adding this script)
 * 
 * Q: DO I HAVE TO ADJUST MY MARKUP/..?
 * A: no
 * 
 * REQUIREMENTS:
 * jQuery (1.7.1+ recommended)
 * jquery.history.js (due to cross browser (in)consistency (http://github.com/balupton/history.js/wiki/The-State-of-the-HTML5-History-API))
 * jquery.animate-enhanced.js (instead of just using JS for animating it relies on CSS3, only if the browser doesn't support it, it uses JS)
 * 
 * NOTES:
 * only the new site's body and title tag will be loaded -> 
 *   -> be sure...
 *   1. to include all scripts and css files needed in the initial page's head
 *   2. _not_ to load any scripts/... in the body tag, as it would be loaded twice when refreshing/switching back to the page
 * loader image does not make sense as it just flickers most of the time (-> only makes sense if the pages you load are way too huge)
 */

// initiate History.js
var History = window.History;
// Bind to StateChange Event
History.Adapter.bind(window,'statechange',function(){
    var State = History.getState();
    loadNewContent(State.url);
});
enablePushState();

function loadNewContent(uri){
    /*
     * use this if you do not want to use jquery.animate-enhanced.js -> no hardware acceleration, but less requests
     *
     $("body").fadeOut("slow", function(){
        // load new content
        $.get(uri, function(data){
            document.title = getNodeContent(data, "title");
            $("body").empty().html(getNodeContent(data, "body")).fadeIn(1000);
            enablePushState();
        }).error(function(){ // this will only be used if .htaccess is off (otherwise there will never be an error as index.php/xyz always exists)
            document.title = "404";
            $("body").empty().html("404 error - <a href='/boilerplate/'>zur&uuml;ck</a>").fadeIn(1000); // specify what to load as a 404 error page here
            enablePushState();
        });
    });*/
    /*
     * properties supported*: left/right/top/bottom, opacity, width/heigth
     * functions  supported*: .fadeIn(), .fadeOut(), .slideUp(), .slideDown(), slideToggle()
     * *supported means that it is "translated" into CSS3 (if possible) using jquery.animate-enhanced.js
     * for more info see http://playground.benbarnett.net/jquery-animate-enhanced/
     */
    $("body").animate({left: -screen.width, opacity: 0, leaveTransforms:true}, 1000, function(){ // leaveTransforms is true because we want to be able to set the "left" property to 0 again (otherwise left:-screen.width would be saved as left:0, transform(...) and we couldn't fade it back)
        // load new content
        $.get(uri, function(data){
            var content = getNodeContent(data, "body");
            if (content=="") {
                content = data;
            } else {
                document.title = getNodeContent(data, "title");            
            }
            $("body").empty().html(content).animate({left: 0, opacity: 1}, 1000);
            enablePushState();
        }).error(function(){ // this will only be used if .htaccess is off (otherwise there will never be an error as index.php/xyz always exists)
            document.title = "404";
            $("body").empty().html("404 error - <a href='/boilerplate/'>zur&uuml;ck</a>").animate({left: 0, opacity: 1}, 1000); // specify what to load as a 404 error page here
            enablePushState();
        });
    });
}

// apply effect to certain links
function enablePushState(){
    $("a").filter(function(){
        return !this.href.match(/^mailto\:/) && (this.hostname == location.hostname); // only get internal links (but not mailto:...); you should not use javascript:... anyway ;)
    }).on("click", function(e){
        e.preventDefault();
        var uri = e.target.href; // not using $(this).attr('href'); because it doesn't solve relative links
        History.pushState(null, null, uri);
    });
}

// get content between <node> and </node> - only works for unique nodes like body, head, title, etc.
function getNodeContent(data, node){
    var start = data.search("<"+node+">"),
        end   = data.search("</"+node+">");
    if (start == -1) return "";
    data = data.substring(start+node.length+2, end); // +2 because of "<" and ">"
    return data;
}