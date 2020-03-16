$(document).ready(function () {
    
    $('#partiart1').click(function () {

        $.ajax({
            url: "particulier-article1.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#partiart2').click(function () {

        $.ajax({
            url: "particulier-article2.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#partiart3').click(function () {

        $.ajax({
            url: "particulier-article3.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });
    $('#partiart4').click(function () {

        $.ajax({
            url: "particulier-article4.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });

});