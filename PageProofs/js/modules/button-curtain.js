//******************************************************************************
// Кнопка с эффектом шторки
// 		Файл SCSS: sass/partials/modules/_button-curtain.scss
// 		Файл JS: js/modules/button-curtain.js
//******************************************************************************
// Подключение скрипта кнопки с эффектом шторки: //@codekit-prepend "modules/button-curtain.js"
//******************************************************************************

jQuery(window).load(function () {
    $('.button1').each(function () {
        var image = $(this).attr("data-image");
        var width = $(this).attr("data-width");
        var height = $(this).attr("data-height");
        var heightDiv = parseInt(height.replace(/\D+/g, "")) / 4;
        $(this).css({
            'background': '#fee9ca url("' + image + '") no-repeat',
            'background-size': 'cover',
            'width': width,
            'height': height
        }).children('div').css({
            "height": heightDiv + "px",
            "padding-left": heightDiv / 2 + "px",
            "padding-right": heightDiv / 2 + "px"
        });
        $(this).children('div').children('div').css({
            "padding-left": heightDiv / 2 + "px",
            "padding-right": heightDiv / 2 + "px",
            "margin-top": heightDiv + 10 + "px",
            "margin-left": -heightDiv / 4 + "px"
        });
        $(this).wrap('<div class="button-wrapper">');
    });
    $('.button2').each(function () {
        var image = $(this).attr("data-image");
        var width = $(this).attr("data-width");
        var height = $(this).attr("data-height");
        var heightDiv = parseInt(height.replace(/\D+/g, "")) / 4;
        $(this).css({
            'background': '#fee9ca url("' + image + '") no-repeat',
            'background-size': 'cover',
            'width': width,
            'height': height
        }).children('div').css({
            "height": heightDiv + "px",
            "padding-left": heightDiv / 2 + "px",
            "padding-right": heightDiv / 2 + "px"
        });
        $(this).children('div').children('div').css({
            "padding-left": heightDiv / 2 + "px",
            "padding-right": heightDiv / 2 + "px",
            "margin-top": heightDiv + 10 + "px",
            "margin-left": -heightDiv / 4 + "px"
        });
        $(this).wrap('<div class="button-wrapper">');
    });
});

jQuery(document).ready(function () {
    $('.button1').hover(
        function () {
            $(this).children('div').animate({
                margin: '-' + $(this).attr("data-height") + ' 0 0 0',
                height: $(this).attr("data-height")
            }, {
                queue: false,
                duration: 500
            }).css({
                'border-top-left-radius': '15px',
                'border-top-right-radius': '15px'
            });
            $(this).children('div').children('h6').animate({
                top: '20px'
            }, {
                queue: false,
                duration: 500
            });
            $(this).children('div').children('div').show();
        },
        function () {
            $(this).children('div').children('div').hide();
            $(this).children('div').animate({
                margin: '-' + parseInt($(this).attr("data-height").replace(/\D+/g, "")) / 4 + 'px 0 0 0',
                height: parseInt($(this).attr("data-height").replace(/\D+/g, "")) / 4 + 'px'
            }, {
                queue: false,
                duration: 500
            }).css({
                'border-top-left-radius': '0',
                'border-top-right-radius': '0'
            });
            $(this).children('div').children('h6').animate({
                top: '50%'
            }, {
                queue: false,
                duration: 500
            });
        }
    );
    $('.button2').hover(
        function () {
            $(this).children('div').animate({
                margin: '-' + $(this).attr("data-height") + ' 0 0 0',
                height: $(this).attr("data-height")
            }, {
                queue: false,
                duration: 500
            }).css({
                'border-top-left-radius': '15px',
                'border-top-right-radius': '15px'
            });
            $(this).children('div').children('h6').animate({
                top: '20px'
            }, {
                queue: false,
                duration: 500
            });
            $(this).children('div').children('div').show();
        },
        function () {
            $(this).children('div').children('div').hide();
            $(this).children('div').animate({
                margin: '-' + parseInt($(this).attr("data-height").replace(/\D+/g, "")) / 4 + 'px 0 0 0',
                height: parseInt($(this).attr("data-height").replace(/\D+/g, "")) / 4 + 'px'
            }, {
                queue: false,
                duration: 500
            }).css({
                'border-top-left-radius': '0',
                'border-top-right-radius': '0'
            });
            $(this).children('div').children('h6').animate({
                top: '50%'
            }, {
                queue: false,
                duration: 500
            });
        }
    );
});