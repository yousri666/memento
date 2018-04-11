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
    var $elt = $(selector).parentsUntil('div.w3-card-4.synapse').next();
    var title = $elt.prev().find('h3').text();
    var main = $elt.find('.syn-main-sentence').text();
    var details = $elt.find('.syn-more-container').text();
    var tags = $elt.find('.syn-tags-container');
    var code = getCodeGroundContent($elt.find('.syn-example-container'));
    
    $('#lb-title').val(title);
    $('#lb-main').val(main);
    $('#lb-details').val(details);
    $('#lb-code').val(code);
    
    $('#lb-edit-syn').show(100).css("display","flex");
}