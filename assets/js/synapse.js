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
    var $title = $elt.prev().find('h3');
    var $main = $elt.find('.syn-main-sentence h4');
    var $details = $elt.find('.syn-more-container h5');
    var $tags = $elt.find('.syn-tags-container span');
    var $code = $elt.find('.syn-example-container');
    
    $('#lb-title').val($title.text());
    $('#lb-main').val($main.text());
    $('#lb-details').val($details.text());
    $('#lb-code').val(getCodeGroundContent($code));
    $('#lb-tags').html($tags.clone().each(function(){
       $(this).html($(this).text() + "<i onclick=\"$(this).parent().hide(100)\" class='w3-button'>&times;</i>");
    }));
    $("#lb-edit-syn").data("code",$code);
    $('#lb-edit-syn').show(100).css("display","flex");
}