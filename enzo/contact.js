$(document).ready(function () {
    $('#valider').click(function () {
        const nom = $("#nom").val();
        const prenom = $("#prenom").val();
        const email = $("#email").val();
        const tel = $("#telephone").val();
        const status = $("#status").val();
        const msg = $("#msg").val();
        $("#valider").remove();

        $("#recap").append("<p>Nom : " + nom + "</p>");
        $("#recap").append("<p>Prénom : " + prenom + "</p>");
        $("#recap").append("<p>Email : " + email + "</p>");
        $("#recap").append("<p>Téléphone : " + tel + "</p>");
        $("#recap").append("<p>Status : " + status + "</p>");
        $("#recap").append("<p>Votre demande :</p>");
        $("#recap").append("<p>" + msg + "</p>");
        $("#recap").append("<button id='send'>Envoyer</button>")
    });
});