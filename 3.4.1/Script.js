$(document).ready(function(){
    let isTextVisable = true;
    let isTextVisable2 = true;
    $('#showHide').click(function (event){
        if(isTextVisable){
            $('#showHideText').hide();
            isTextVisable = false;
        }else{
            $('#showHideText').show();
            isTextVisable = true;
        }
    })
    $('#toggle').click(function(event){
        $('#showHideText2').toggle();
    })
    $('#fadeIn').click(function (event){
        if(isTextVisable2){
            $('#showHideText3').fadeOut();
            isTextVisable2 = false;
        }else{
            $('#showHideText3').fadeIn();
            isTextVisable2 = true;
        }
    })
    $('#fadeToggle').click(function(event){
        $('#showHideText4').fadeToggle();
    })
    $('#fadeTo').click(function(event){
        $('#showHideText5').fadeTo("slow", 0.5, "linear", function () {
            $('#showHideText5').fadeTo("slow", 1);
        })
    })
    $('#animate').click(function(event){
        $('#showHideText6').animate({
            fontSize: "18px",
        }, 3000, "linear", function () {
            $('#showHideText6').animate({
                fontSize: "14px",
            }, 3000, "linear")

        })
    })
});