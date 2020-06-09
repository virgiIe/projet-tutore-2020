"use strict";

$(document).ready(function() {

    // Bienvenue en cercle
    $('.bienvenue').arctext({radius: 300});

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
        // vérifie si .diplome existe
        if(document.getElementById("diplome") !== null) {
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
        }   
    });


    // Ajout le background à .diplome s'il existe

    if(document.getElementById("diplome") !== null) {
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

})

