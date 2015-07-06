/**
 * Created by yegoshin on 09.04.15.
 */
jQuery(document).ready(function () {
    $('ul.tabs').on('click', 'li:not(.current)', function () {
        $(this).addClass('current').siblings().removeClass('current')
            .parents('div.section').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
    });
});
