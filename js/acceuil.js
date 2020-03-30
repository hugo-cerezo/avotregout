$(document).ready(function () {
    //header
    $('#HomePage').click(function () {

        $.ajax({
            url: "index.php",
            method: "post",
            success: function (res) {
                $("#body").empty();
                $("#body").append(res);
                console.log(res);
            }
        });
    });
    $('#homeParticulier').click(function () {

        $.ajax({
            url: "particulier-home.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#HomePro').click(function () {

        $.ajax({
            url: "professionnel-home.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#HomeEvent').click(function () {

        $.ajax({
            url: "createurs-article.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#HomeGalerie').click(function () {

        $.ajax({
            url: "galerie.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    //main
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
            url: "createurs-article.php",
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