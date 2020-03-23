$.ajax({
    url: "header.php",
    method: "post",
    success: function (res) {
        
        $('#body').append(res);
        console.log(res);
    }
});
        $.ajax({
            url: "acceuil.php",
            method: "post",
            success: function (res) {
                
                $('#body').append(res);
                console.log(res);
            }
        });
    