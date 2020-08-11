$(document).ready(function()
  {
    $('.btn').click(function(){
      var c= $(this).parent().children('.menu_vertical');
      var droite = c.parent().children().children('#contenu_droite');
      if (c.css('left') == '-350px'){
        $(this).css('left','370px');
        (c.css('left','0px'));
      }
      else{
        $(this).css('left','20px');
        $(this).css('transition','0.4s');
        c.css('left','-350px');

      }
    });

    $('#titreMod_sidebar').click(function(){
      var changer = $(this).parent().children('.box');
      if (changer.css('visibility') == 'visible'){
        changer.css('visibility','hidden');
      }
      else{
        changer.css('visibility','visible');
      }
    });

    var btn = $('.btn');
    var contenuGauche = $('.menu_vertical');
    var haut = $('.haut');
    $(window).scroll(function(){

      if ($(window).scrollTop() > 400) {
        haut.css('display','block');
      }
      else {
        haut.css('display','none');
      }
    })

    //Revenir en haut de page
    $('.haut').click(function() {
      $("html, body").animate({scrollTop : 0}, 300);
    });

    // Onglet ProgrammerAvecScratch
    $('#onglets-menu li').mousedown(function()
      {
        $('.menu-actif').removeClass('menu-actif');
        $(this).addClass('menu-actif');

        $('.sous-menu-actif').removeClass('sous-menu-actif');
        var num=$('#onglets-menu>li').index(this);
        $('#onglets-sous-menu>div').eq(num).addClass('sous-menu-actif');

        $('.contenu-actif').removeClass('contenu-actif');
        var num1=$('#onglets-menu>li').index(this);
        $('#onglets-contenu>div').eq(num1).addClass('contenu-actif');
      });

      //popup videoTuto
    $('.cellvideo a').click(function() {
      var videoTuto = $(".videoTuto");
      var video = $(".videoTuto video");
      var fermer = $(".videoTuto i");
      videoTuto.addClass("active");
      /*fermer la fenêtre video*/
      fermer.click(function() {
        videoTuto.removeClass("active");
        $('video').trigger('play');
        $('video').trigger('pause');
      });
    });

});

$(function(){
	$(document).on('scroll',function(){ // Détection du scroll
		// Calcul de la hauteur "utile"
		let hauteur = $(document).height()-$(window).height();

		// Récupération de la position verticale
		let position = $(document).scrollTop();

		// Récupération de la largeur de la fenêtre
		let largeur = $(window).width();

		// Calcul de la largeur de la barre
		let barre = position / hauteur * largeur;

		// Modification du CSS pour élargir ou réduire la barre
		$("#progress").css("width",barre);
	});
});

function imprimer(page) {
// Définition de la zone à imprimer
var zone = document.getElementById(page);

// Ouverture du popup
var fenetreAImprimer = window.open("", "", "height=650, width=900, left=300, top=80");

// Ajout des données a imprimer
fenetreAImprimer.document.write(zone.innerHTML);
fenetreAImprimer.document.title = 'Pause Cocoon';
// Impression du popup
fenetreAImprimer.print();

//Fermeture du popup
fenetreAImprimer.close();
}
