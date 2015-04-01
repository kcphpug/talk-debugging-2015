// Custom JS code can go here

// You can customize Reveal options:
Reveal.configure({"center": false});


// (an outdated version of) http://headjs.com/ is also loaded
head.ready("lodash.min.js", function () {
  // LoDash can be used from here
});
head.js("https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js");


/**
 * @param obj iFrame object
 * @param topSize  height of space above - I know height seems easier, but I wanted it to aim for the bottom'
 */
function resizeIframe(obj,topSize) {
    if(typeof topSize == 'undefined') topSize = 200;
    obj.style.height = obj.parentNode.parentNode.scrollHeight - topSize + 'px';
}
