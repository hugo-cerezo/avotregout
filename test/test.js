$(document).ready(function () {

    $('#but').click(function () {
        
        $.ajax({
            url: "api.php",
            method: "post",
            data: { login: "Canard" },
            success: function (res) {
                console.log("[" + res + "]");
                $("#show").html(res);
            }
        });
    });

});