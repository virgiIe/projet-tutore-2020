"use strict";

var deptChoix = "";

$(document).ready(function() {

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





})