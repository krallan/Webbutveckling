$(document).ready(function (event) {
  let imageIndex = 0;
    $('#swap1').click(function (event) {
        if(imageIndex == 0){
            $(this).attr("src", "images/promo_5.png")
            imageIndex = 1;
        }else{
            $(this).attr("src", "images/random-pictures-74.jpg")
            imageIndex = 0;
        }
    })
    $('#imageRollover').hover(function(){
        $(this).attr("src", "images/promo_5.png")
    }, function () {
        $(this).attr("src", "images/random-pictures-74.jpg")
    })
    artisan.drawRectangle("canvas", 0, 0, 450, 450, "#fff")
    artisan.drawLine("canvas", 10, 10, 50, 50, 10, "#000");
    artisan.drawLine("canvas", 100, 10, 75, 100, 5, "#67ec0c", "bezier")
    artisan.drawCircle("canvas", 200,200, 50, "#f029b4", 6, "#ee8a20", 0.6,
        10, "#000",15,15)
    artisan.drawText("canvas", 0, 250, "Tjenare", "#3fd9a5", "bold", 25,
        "sans-serif")
    artisan.drawImage("canvas", "images/promo_5.png", 270, 0, 75, 75)
    $('#saveImage').click(function (event) {
        let savedImage =document.getElementById("canvas")
            .toDataURL("image/png", 1)

            $(this).attr("href", savedImage)


    })
})