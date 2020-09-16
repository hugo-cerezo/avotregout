$(document).ready(() => {
    // Gestion des vue
    $('.landing').click(function () {
        tri = $(this).attr("id");
        $.ajax({
            url: 'grid.php',
            type: 'GET',
            data: { 'cat': tri },
            success: (data) => {
                $('#main').empty();
                $('#main').append(data);
                $('.navLink').click(function () {
                    cat = $(this).attr("id");
                    $('#main').empty();
                    render();
                });
                gtag('config', 'UA-169617593-2', { 'page_path': '/grid.html' });
            }
        })
    });
    // Gestion contact
    $('.navLink').click(function () {
        cat = $(this).attr("id");
        $('#main').empty();
        render();
    });
    // Gestion button accueil
    $('#accueil').click(function () {
        location.reload();
    });
});