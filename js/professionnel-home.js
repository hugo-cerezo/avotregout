$(document).ready(function () {
    
    $('#proart1').click(function () {

        $.ajax({
            url: "professionnel-article1.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#proart2').click(function () {

        $.ajax({
            url: "professionnel-article2.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#proart3').click(function () {

        $.ajax({
            url: "professionnel-article3.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });


});