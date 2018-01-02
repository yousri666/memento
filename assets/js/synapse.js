function toggleSynElt(selector) {
    var $elt = $(selector);
    if ($elt.hasClass('w3-hide')) {
        $elt.hide().removeClass('w3-hide').show(200);
        
    } else {
        $elt.hide(200, function () {
            $elt.addClass("w3-hide");
        });
    }
}

function toggleSynExample() {

}

function toggleSynTags() {

}