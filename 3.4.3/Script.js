let regExp = new RegExp(location.host);

$(document).ready(function (event) {
    $('a').each(function () {
        if (regExp.test($(this).attr('href')) == false) {
            $(this).attr("target", "_blank")
        }
    })
    $('#nav > ul > li').hover(function () {

        let subMenu = $(this).find(".submenu");
        subMenu.fadeIn()


    }, function () {
        let subMenu = $(this).find(".submenu");
        subMenu.fadeOut()
    })

});