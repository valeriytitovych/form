$(document).ready(function () {

    $("#form").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            alert("Дякуємо! Ми зв'яжемось з Вами додатково");
            $("#form").trigger("reset");
        });
        return false;
    });

});