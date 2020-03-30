$(document).ready(function () {
    $('#tapas').click(function () {
        $.ajax({
            url: "devis/tapas.php",
            method: "post",
            success: function (res) {
                $("#produits").empty();
                $("#produits").append(res);
            }
        });
    });
    $('#plateaux').click(function () {
        $.ajax({
            url: "devis/plateaux.php",
            method: "post",
            success: function (res) {
                $("#produits").empty();
                $("#produits").append(res);
            }
        });
    });
    $('#desert').click(function () {
        $.ajax({
            url: "devis/desert.php",
            method: "post",
            success: function (res) {
                $("#produits").empty();
                $("#produits").append(res);
            }
        });
    });
    $('#surdemande').click(function () {
        $.ajax({
            url: "devis/surdemande.php",
            method: "post",
            success: function (res) {
                $("#produits").empty();
                $("#produits").append(res);
            }
        });
    });
    $('#pannier').click(function () {
        $.ajax({
            url: "devis/pannier.php",
            method: "post",
            success: function (res) {
                $("#produits").empty();
                $("#produits").append(res);
            }
        });
    });

});
