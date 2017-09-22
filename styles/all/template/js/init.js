$(function() {
    hljs.configure({
        useBR: true,
        tabReplace: '    ' // 4 spaces
    });
    $('code[data-bind="phpbbch-code"]').each(function (i, block) {
        hljs.highlightBlock(block);
    });
});
