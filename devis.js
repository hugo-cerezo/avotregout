var desc = {}
var product = ""
var devis = []
var add = 0;
var infodevis = []
$(document).ready(function () {
    $('.dropdown-item').click(function() {
        test = $(this).attr('id')
        test2 = $(this).attr('value')
/*         console.log(test) */
        test3 = test2.split(',')
        console.log(test3)
        test3.forEach(element => {
            devis.push(',' + element +':'+1)
        });   
        ajaxFunction()
    })
    $('.navLink').click(function () {
        var desc = $(this).attr("id")
        console.log(desc)
        if (document.getElementById('text' + desc).style.display == 'none') {
            document.getElementById('text' + desc).style.display = "block";
        } else {
            document.getElementById('text' + desc).style.display = "none";
        }
    })
    $('.addProductBtn').click(function () {
        var product = $(this).attr("id")
        console.log(product)
        qtt = document.getElementById('qtt' + product).value
        document.getElementById('qtt' + product).value = "1"
        console.log(qtt)
        devis.push(product + ':' + qtt)
        console.log(devis)
        
        ajaxFunction()
        console.log(devis);

    })

    function ajaxFunction() {
        $.ajax({
            url: "cookiesDevis.php",
            method: "post",
            data: "cookie=" + devis,
            success: function (res) {

                console.log(res)    
                $('#devisActuel').empty();
                $('#devisActuel').append(res);
                console.log(devis)
                $('.close').click(function () {
                    console.log(devis)
                    var delta = ($(this).parent().attr("id"))
                    console.log(delta)
                    devis.splice(delta,1)
                    $(this).parent().remove()
                })
                $('#validationDevis').click(function () {
                    document.getElementById('containerDevisFinal').style.display = "block";
                    document.getElementById('containerDevisActuel').style.display = "none";
                    $.ajax({
                        url: "validationDevis.php",
                        method: "post",
                        data: "cookie=" + devis,
                        success: function (res) {
                            $('#devisFinal').empty();
                            $('#devisFinal').append(res);
                            $('#devisFinal').append("<input class='test'  type='button' id='bddDevis' value='valider mon devis'>")
                            $('#bddDevis').click(function () {
                                var promo = document.getElementById('codePromo').value
                                var addresse = document.getElementById('adresseLivraison').value
                                var convive = document.getElementById('nbpersonne').value
                                var dateLivraison = document.getElementById('dateLivraison').value
                                let infodevis = []
                                infodevis.push( promo)
                                infodevis.push( addresse)
                                infodevis.push( convive)
                                infodevis.push( dateLivraison)
                                console.log(infodevis)
                                let devisfinal = []
                                devisfinal.push(devis,infodevis)
                                $.ajax({
                                    url: "bddDevis.php",
                                    method: "post",
                                    data: {data : devisfinal}  ,
                                    success: function (res) {
                                        console.log(res)
                                        $('#main').empty();//faire le retours a la page profil pour que l'utilisateurs puisse voir la commande en cours
                                    }
                                })
                            })
                        }
                    });
                })
            }
        });
    }
})