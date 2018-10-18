$(function () {
    hljs.configure({
        useBR: true,
        tabReplace: '    ' // 4 spaces
    });

    $('code')
        .each(function (i, block) {
            if ($(block).data('bind') !== 'phpbbch-code') {
                var content = $(block).html();

                content = content.replace(/(?:\r\n|\r|\n)/g, '<br>');
                $(block).html(content);
            }

            hljs.highlightBlock(block);
        });
});
