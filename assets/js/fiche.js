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

    $('#telechargement').on("click", function () {
        html2canvas(document.querySelector('.resultat'), {
            onrendered: function(canvas) {
              return Canvas2Image.saveAsPNG(canvas);
            }
        });
    });


})