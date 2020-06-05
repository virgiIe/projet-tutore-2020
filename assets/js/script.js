"use strict";

// déclaration de variables ici pour éviter de répéter des 'var ...' dans le .ready
var chemin = "";

$(document).ready(function() {

    // Question sur le niveau
        // on stocke les résultats dans le cache
        // pour les conserver comme la page recharge

    $("#bac3").on("click", function () {
        sessionStorage.setItem('niveau', '3');
        // console.log(niveau);
    });
    
    $("#bac5").on("click", function () {
        sessionStorage.setItem('niveau', '5');
        //console.log(niveau)
    });

    // Question sur le type

    $("#initiale").on("click", function () {
        sessionStorage.setItem('id_typeFormation', '3');
    });
    
    $("#alternance").on("click", function () {
        sessionStorage.setItem('id_typeFormation', '2');
    });

    // Question sur la spécialité

    $("#sciences").on("click", function () {
        sessionStorage.setItem('id_specialite', '4');
        diplomeRedirection();
    });

    $("#commarketing").on("click", function () {
        sessionStorage.setItem('id_specialite', '1');
        diplomeRedirection();
    });

    $("#informatique").on("click", function () {
        sessionStorage.setItem('id_specialite', '3');
        diplomeRedirection();
    });

    $("#esthetique").on("click", function () {
        sessionStorage.setItem('id_specialite', '2');
        diplomeRedirection();
    });

    $("#videoson").on("click", function () {
        sessionStorage.setItem('id_specialite', '5');
        diplomeRedirection();
    });



    
    // Redirection de la liste vers #diplome

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
        window.location.replace(chemin+"niveau="+sessionStorage.getItem('niveau')+"&"+"id_specialite="+sessionStorage.getItem('id_specialite')+"#diplome");
    }





    // Ajout dans le href de la préférence du type (initiale/alternance)
    $("a.btn-diplome").each(function() {
        var $this = $(this);       
        var _href = $this.attr("href"); 
        $this.attr("href", _href + '&id_typeFormation='+sessionStorage.getItem('id_typeFormation'));
     });




     
     function listeFormation() {
        window.location.replace(
            "./liste/"+"?"+sessionStorage.getItem('domaine')+"&"+sessionStorage.getItem('type')+"&"+forme
        );
    };







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

