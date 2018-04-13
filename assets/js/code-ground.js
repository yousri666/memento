$(function () {
    //initCodeGround();
});

function initCodeGround(elt) {
    //console.log(elt);
    var codeGround = ace.edit($(elt).find('.syn-code-ground')[0].id);
    codeGround.setReadOnly(true);
    //codeGround.setOption("wrap", true);
    codeGround.session.setNewLineMode("unix");
    codeGround.setTheme("ace/theme/twilight");
    codeGround.session.setMode("ace/mode/c_cpp");
    //codeGround.resize();//force a redraw
}

function getCodeGroundContent(elt) {
    var codeGround = ace.edit($(elt).find('.syn-code-ground')[0].id);
    //console.log(codeGround.getValue());
    return codeGround.getValue();
}

function setCodeGroundContent(elt, content) {
     var codeGround = ace.edit($(elt).find('.syn-code-ground')[0].id);
     codeGround.session.setValue(content);
     codeGround.resize(true);
}
