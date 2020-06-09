"use strict";

var etabChoix = "";

$(document).ready(function() {

    // redirection vers l'URL de la formation
    $('#accessSite').on("click", function () {
        // on associe une variable à la valeur de l'option choisie
        etabChoix = $("#lieu").val();

        // si l'url ne possède pas de http ou https on lui contactene
        if (etabChoix.includes("http") == false ) {
            etabChoix = "http://"+etabChoix;
        }
        
        // on vérifie que l'url_formation n'est pas vide
        if (etabChoix != "http://"){
            window.open(etabChoix, '_blank');
        } else {
            alert("Nous n'avons pas l'URL de formation associé à cet établissement :(");
        };
    });

    // Faire une capture d'écran
    $('#telechargement').on("click", function () {
        html2canvas(document.querySelector('.resultat'), {
            onrendered: function(canvas) {
              return Canvas2Image.saveAsPNG(canvas);
            }
        });
    });

    // message d'alerte si la formation n'est pas disponible dans le type de formation demandée
    if ( $( "select" ).html() == "") {
        // On récupère le type de formation voulue et la redirection
        if (window.location.href.includes("id_typeFormation=2") == true ) {
            var nom_typeFormationChoix = "Alternance";
            var nom_typeFormationRedirection = "Initiale"
        }
        if (window.location.href.includes("id_typeFormation=3") == true ) {
            var nom_typeFormationChoix = "Initiale";
            var nom_typeFormationRedirection = "Alternance"
        }
        // Si l'internaute clique sur OK, il est redirigé
        if ( confirm( "Cette formation n'est pas disponible en "+nom_typeFormationChoix+". Clique sur OK pour la voir en "+nom_typeFormationRedirection) ) {
            if (window.location.href.includes("id_typeFormation=2") == true ) {
                var urlRedirection = window.location.href.replace('id_typeFormation=2', 'id_typeFormation=3');
                window.location.replace(urlRedirection);
            }
            if (window.location.href.includes("id_typeFormation=3") == true ) {
                var urlRedirection = window.location.href.replace('id_typeFormation=3', 'id_typeFormation=2');
                window.location.replace(urlRedirection);
            }
        }
    };
})