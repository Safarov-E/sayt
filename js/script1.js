 
onload = function() {
a_tags=document.getElementsByTagName("details")
for (i=0;i<a_tags.length;i++) {
a_tags[i].onfocus=blur_links
}}
function blur_links() {
this.blur()
}
 