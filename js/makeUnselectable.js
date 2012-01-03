/* For IE and Opera use makeUnselectable(document.getElementById("foo"));

function makeUnselectable(node) {
    if (node.nodeType == 1) {
        node.unselectable = true;
    }
    var child = node.firstChild;
    while (child) {
        makeUnselectable(child);
        child = child.nextSibling;
    }
}
*/

$(".unselectable").each(function(){
    if (this.nodeType == 1) {
        this.unselectable = true;
    }
    var child = this.firstChild;
    while (child) {
        makeUnselectable(child);
        child = child.nextSibling;
    }
});