$(document).ready(function (event) {
    $('#name').focus()
    $('[name="car"]').change(function (event) {
        let target = $(event.target)
        if (target.val() == "Bmw") {
            $('#bmw').show()
            $('#volvo').hide()
        } else {
            $('#volvo').show()
            $('#bmw').hide()
        }
    })

    $('form').submit(function (event) {
        event.preventDefault()

        if ($('#name').val().length > 0 &&
            $('#nickname').val().length > 0 &&
            $('[name="gender"]').is(":checked") &&
            $('[name="car"]').is(":checked") &&
            $('[name="carModel[]"]').is(":checked")
        ) {
            // Validated true

            let message = `
            Name: ${$('#name').val()}
            Nickname: ${$('#nickname').val()}
            Gender: ${$('[name="gender"]').val()}
            Car make: ${$('[name="car"]').val()}
            Favorite cars: `;

            $('[name="carModel[]"]:checked').each(function (i, e) {
                message += `${$(e).val()}, `;
            });

            alert(message)

        } else {
            // Validated false
            alert("You missed something!")
        }


    })
})
