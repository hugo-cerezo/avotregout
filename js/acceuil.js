$(document).ready(function () {
    
    $('#acceuil1').click(function () {

        $.ajax({
            url: "particulier-home.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#acceuil2').click(function () {

        $.ajax({
            url: "professionnel-home.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#acceuil3').click(function () {

        $.ajax({
            url: "createurs-home.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#acceuil4').click(function () {

        $.ajax({
            url: "galerie.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });

});