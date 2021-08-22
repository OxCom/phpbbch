$(function () {
    hljs.configure({
        useBR: true,
        tabReplace: '    ' // 4 spaces
    });

    var selector =  window.oxcom_phpbbch_config.behavior.format_only_ext ? "code[data-bind=\'phpbbch-code\']" : 'code';

    $(selector)
        .each(function (i, block) {
            if ($(block).data('bind') !== 'phpbbch-code') {
                var content = $(block).html();

                content = content.replace(/(?:\r\n|\r|\n)/g, '<br>');
                $(block).html(content);
            }

            hljs.highlightBlock(block);
        });
});
