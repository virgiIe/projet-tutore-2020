"use strict";

var niveau = "", type = "", domaine = "", forme = "";
// console.log(niveau);

$(document).ready(function() {

    // Question sur le niveau

    $("#bac3").on("click", function () {
        niveau = "bac3";
        // console.log(niveau);
    });
    
    $("#bac5").on("click", function () {
        niveau = "bac5";
        //console.log(niveau)
    });

    // Question sur le type
        // on stocke l'action dans le cache car la page refesh
        // au moment du choix de la spécialité

    $("#initiale").on("click", function () {
        sessionStorage.setItem('type', 'initiale');
        // type = sessionStorage.getItem('type');
        // console.log(type);
    });
    
    $("#alternance").on("click", function () {
        sessionStorage.setItem('type', 'alternance');
        // type = sessionStorage.getItem('type');
        // console.log(type);
    });

    // Question sur la spécialité

    $("#sciences").on("click", function () {
        domaine = "sciences";
        diplomeRedirection();
    });

    $("#commarketing").on("click", function () {
        domaine = "commarketing";
        diplomeRedirection();
    });

    $("#informatique").on("click", function () {
        domaine = "informatique";
        diplomeRedirection();
    });

    $("#esthetique").on("click", function () {
        domaine = "esthetique";
        diplomeRedirection();
    });

    $("#videoson").on("click", function () {
        domaine = "videoson";
        diplomeRedirection();
    });








    // Animation du background

    $(window).scroll(function(evt) {
        if ($(window).scrollTop() >= ($("#accueil").offset().top - ($(window).height() / 2))) {
            $("body").css("background-color", "var(--eau-accueil)");
        }
        if ($(window).scrollTop() >= ($("#niveau-bac").offset().top - ($(window).height() / 2))) {
            $("body").css("background-color", "var(--eau-niveau-bac)");
        }
        if ($(window).scrollTop() >= ($("#type").offset().top - ($(window).height() / 2))) {
            $("body").css("background-color", "var(--eau-type)");
        }
        if ($(window).scrollTop() >= ($("#specialite").offset().top - ($(window).height() / 2))) {
            $("body").css("background-color", "var(--eau-specialite)");
        }

        if ($(window).scrollTop() >= ($("#diplome").offset().top - ($(window).height() / 2))) {
            if ( $("#diplome").attr("class").includes("sciences") == true ) {
            $("body").css("background-color", "var(--eau-sciences)");
            }; 
            if ( $("#diplome").attr("class").includes("com") == true ) {
                $("body").css("background-color", "var(--eau-commarketing)");
            };
            if ( $("#diplome").attr("class").includes("info") == true ) {
                $("body").css("background-color", "var(--eau-informatique)");
            };
            if ( $("#diplome").attr("class").includes("esthetique") == true ) {
                $("body").css("background-color", "var(--eau-esthetique)");
            };
            if ( $("#diplome").attr("class").includes("video") == true ) {
                $("body").css("background-color", "var(--eau-video)");
            };
        }

    });




    









    // Redirection vers la page Spécialité + Niveau

    function diplomeRedirection () {
        window.location.replace("?"+domaine+niveau+"#diplome");
    }



    // Ajout le background à .diplome quand la page est rechargé avec diplomeRedirection

    if ( $("#diplome").attr("class").includes("sciences") == true ) {
        $("body").css("background-color", "var(--eau-sciences)");
    }; 
    if ( $("#diplome").attr("class").includes("com") == true ) {
        $("body").css("background-color", "var(--eau-commarketing)");
    };
    if ( $("#diplome").attr("class").includes("info") == true ) {
        $("body").css("background-color", "var(--eau-informatique)");
    };
    if ( $("#diplome").attr("class").includes("esthetique") == true ) {
        $("body").css("background-color", "var(--eau-esthetique)");
    };
    if ( $("#diplome").attr("class").includes("video") == true ) {
        $("body").css("background-color", "var(--eau-video)");
    };







    // Listes de diplomes en fonction des choix de l'internaute

    $("#bachelor").on("click", function () {
        forme = "pt_FormeDeFormation.id=4";
        listeFormation();
    });







    // EN COURS
    function listeFormation() {
        type = sessionStorage.getItem('type');
        console.log(type);
        console.log(forme);
        window.location.replace("./liste/"+"?"+domaine+"&"+type+"&"+forme);
    }

})

