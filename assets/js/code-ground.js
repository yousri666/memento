$(function () {
    initCodeGround();
});

function initCodeGround() {
    var codeGround = ace.edit("code-ground");
    codeGround.setReadOnly(true);
    codeGround.setTheme("ace/theme/twilight");
    codeGround.session.setMode("ace/mode/c_cpp");
}