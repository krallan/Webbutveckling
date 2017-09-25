$(document).ready(function (event) {

    $('#ScreenWidth').text($(window).width());
    $('#ScreenHeight').text($(window).height());

    $('#test').text('Tjo bre');
    $('input[type="checkbox"]').prop("checked", true);
    setTimeout(function () {
        $('#test3').remove();
    }, 3000);
    alert($('#test').text());
    $('#button').click(function (event) {
        event.preventDefault();
        $(this).toggleClass('pressed');
    });
    $(window).resize(function (event) {
        $('#ScreenWidth').text($(window).width());
        $('#ScreenHeight').text($(window).height());
    })
    $('#name').submit(function (event) {
        event.preventDefault();
        alert($('[name="inputName"]').val());

    })
    $('#duplicateText').keyup(function (event){
        $('#duplicate').text($(this).val())
    })
    $('#button').hover(function (event) {
        $(this).addClass("hover");
    }, function (event){
        $(this).removeClass("hover");
    })
    $(window).on("mousemove",function (event){
        $('#ScreenX').text(event.pageX);
        $('#ScreenY').text(event.pageY);
    })
    $('#mouseMoveOff').click(function(){
        $(window).off("mousemove");
    })
})