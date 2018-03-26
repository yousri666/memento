function toggleSynElt(selector, filter) {
    //console.log($(selector));
    var $elt = $(selector).parentsUntil('div.w3-card-4.synapse').prev().find(filter);
    if ($elt.hasClass('w3-hide')) {
        $elt.hide().removeClass('w3-hide').show(200);
        initCodeGround($elt);
    } else {
        $elt.hide(200, function () {
            $elt.addClass("w3-hide");
        });
    }
}

function openSynLB(selector) {
    $('#lb-edit-syn').show(100).css("display","flex");
}