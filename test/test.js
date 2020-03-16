$(document).ready(function () {

    $('#but').click(function () {

        $.ajax({
            url: "testinsert.php",
            method: "post",
            success: function (res) {
                $("#main").empty();
                $("#main").append(res);
            }
        });
    });

});