"use strict";

// déclaration de variables ici pour éviter de répéter des 'var ...' dans le .ready
var forme = "", chemin = "";

$(document).ready(function() {

    // Question sur le niveau
        // on stocke les résultats dans le cache
        // pour les conserver comme la page recharge

    $("#bac3").on("click", function () {
        sessionStorage.setItem('niveau', 'bac3');
        // console.log(niveau);
    });
    
    $("#bac5").on("click", function () {
        sessionStorage.setItem('niveau', 'bac5');
        //console.log(niveau)
    });

    // Question sur le type

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
        sessionStorage.setItem('domaine', 'sciences');
        diplomeRedirection();
    });

    $("#commarketing").on("click", function () {
        sessionStorage.setItem('domaine', 'commarketing');
        diplomeRedirection();
    });

    $("#informatique").on("click", function () {
        sessionStorage.setItem('domaine', 'informatique');
        diplomeRedirection();
    });

    $("#esthetique").on("click", function () {
        sessionStorage.setItem('domaine', 'esthetique');
        diplomeRedirection();
    });

    $("#videoson").on("click", function () {
        sessionStorage.setItem('domaine', 'videoson');
        diplomeRedirection();
    });


    
    
    // Listes de diplomes en fonction des choix de l'internaute
    
    $("#bachelor").on("click", function () {
        forme = "pt_FormeDeFormation.id=4";
        listeFormation();
    });


    
    // Redirection vers la page #specialite

    $("#retourSpecialite").on("click", function () {
        diplomeRedirection();
    });

    
    
    
    
    
    // Redirection vers l'index #diplome
    function diplomeRedirection () {
        // on vérifie si on se trouve dans la racine du projet ou dans /liste
        if (document.location.href.includes("liste") == false ) {
            chemin = "?";
        } else {
            chemin = "../?";
        }
        window.location.replace(chemin+sessionStorage.getItem('domaine')+"&"+sessionStorage.getItem('niveau')+"#diplome");
    }





    // EN COURS --> A voir ce qui est nécessaire pour la requete SQL liste
    function listeFormation() {
        window.location.replace(
            "./liste/"+"?"+sessionStorage.getItem('domaine')+"&"+sessionStorage.getItem('type')+"&"+forme
        );
    }









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

