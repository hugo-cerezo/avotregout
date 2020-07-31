function render() {
    $.ajax({
        url: 'pageView.php',
        type: 'GET',
        data: 'cat=' + cat,
        success: (data) => {
            $('#main').empty();
            $('#main').append(data);
            // Modification d'article
            $('.editLink').click(function () {
                $(this).siblings().each(function () {
                    let text = $(this).text();
                    $(this).empty();
                    $(this).append('<div style="border: 1px solid black" class="contentEditable" name="" id="" contentEditable><p>' + text + '</p></div>');
                });
                $(this).parent().append('<div id="editBox"><button class="col-1 articleup btn btn-light">Up</button><button class="col-1 articledown btn btn-light">Down</button><button id="' + $(this).parent().attr('id') + '" class="editField col-1 btn btn-light">Valider</button><button class="editDelete btn btn-light">Supprimer</button><button class="editCancel col-1 btn btn-light">Annuler</button></div>');
                // Supression de l'option up & down en fonction de leurs position dans la list
                if ($(this).parents('section').attr('value') == 1) {
                    $('.articleup').remove();
                } else if ($(this).parents('section').next().attr('value') == undefined) {
                    $('.articledown').remove();
                }
                // Déplacement de la section
                // Objet a déplacer
                $('.articleup').click(function () {
                    let arr = [];
                    let id = $(this).parents('section').attr('id');
                    let order = $(this).parents('section').attr('value');
                    let id2 = $(this).parent().parent().prev().attr('id')
                    let order2 = $(this).parent().parent().prev().attr('value');
                    arr.push([id, order, cat], [id2, order2, cat]);
                    // ajax
                    $.ajax({
                        url: 'updateView.php',
                        type: 'POST',
                        data: { orderUp: arr },
                        success: () => {
                            render();
                        }
                    })
                });
                // Objet a déplacer
                $('.articledown').click(function () {
                    let arr = [];
                    let id = $(this).parents('section').attr('id');
                    let order = $(this).parents('section').attr('value');
                    let id2 = $(this).parent().parent().next().attr('id')
                    let order2 = $(this).parent().parent().next().attr('value');
                    arr.push([id, order, cat], [id2, order2, cat]);
                    $.ajax({
                        url: 'updateView.php',
                        type: 'POST',
                        data: { orderUp: arr },
                        success: () => {
                            render();
                        }
                    })
                });
                // Validation du form
                $('.editField').click(function () {
                    let arr = [];
                    let id = $(this).attr('id');
                    let title = $(this).parents('section')[0].childNodes[1].innerText;
                    let text = $(this).parents('section')[0].childNodes[2].innerText;
                    arr.push(id, title, text);
                    $.ajax({
                        url: 'updateView.php',
                        type: 'POST',
                        data: { content: arr },
                        success: () => {
                            render();
                        }
                    })
                });
                // Annulation du form
                $('.editCancel').click(function () {
                    render();
                });
                $('.editLink').attr('hidden', 'hidden');
                // Suppression de l'article
                $('.editDelete').click(function () {
                    let id = $(this).parent().parent().attr('id');
                    $.ajax({
                        url: 'removeArticle.php',
                        type: 'POST',
                        data: { 'id': id },
                        success: () => {
                            render();
                        }
                    })
                })
            });
            $("#addArticle").click(function () {
                $('#addArticle').remove();
                $('#main').append('<div id="newArticle"><h5>Titre</h5><div style="border: 1px solid black" class="contentEditable mb-5" name="newTitle" id="newTitle" contentEditable></div><h5>Texte</h5><div style="border: 1px solid black" class="contentEditable mb-5" name="newText" id="newText" contentEditable></div><button class="addNewArticle btn btn-light">Ajouter</button><button class="editCancel btn btn-light">Annuler</button></div>');
                // Envoie du form
                $('.addNewArticle').click(function () {
                    let arr = [];
                    let title = $('#newTitle')[0].innerText;
                    let text = $('#newText')[0].innerText;
                    arr.push(cat, title, text);
                    $.ajax({
                        url: 'addArticle.php',
                        type: 'POST',
                        data: { content: arr },
                        success: () => {
                            render();
                        }
                    })
                })
                // Annulation du form
                $('.editCancel').click(function () {
                    render();
                })
            });
            // Google Analytics
            gtag('config', 'UA-169617593-2', { 'page_path': '/' + cat + '.html' });
        }
    });
}