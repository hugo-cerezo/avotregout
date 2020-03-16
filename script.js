$(document).ready(function()
{
    //quand la page a finis de chargée on execute cette fonction
    $('#button').click(function() {
        //fonction quand on appui sur le bouton
        console.log('CLICK')
        //affiche dans la console: CLICK
        $('#input').val()//recupere la valeurs dans l'input type text
        var resinput = $('#input').val() // attribu a la variable les valeurs de l'input
        var info = {con:1,login:resinput}
        console.log(resinput)
        $.ajax({
            url: "api.php",//ou je vais le chercher
            method: "post",//comment
            data: info,//json
            success: function(resultat){//quax  nd j'ai reusit je fait quoi ? resultat retourne la valeulrs du success
                console.log('['+resultat+']');//affiche dans la console le contenu de success stoker dans var resultat
                $('#show').html(resultat);//afiche vardump venant de php
            }
        });
    });
}); 