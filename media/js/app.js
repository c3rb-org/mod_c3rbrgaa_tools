jQuery(document).ready(function($) {
	
	// Fin chargement de la page ...
	
  // *** JS DALTONIEN *** // 
	// Si Cookies contrast on ajoute la class contrast
	if ($.cookie("contrast")) {
		$('body').addClass("contrastrgaa");
    $("#btcontrast01").addClass("active");
	}
 	// Si contrast deja actif
	$("#btcontrast01").click(function() {
	    if ($('body').hasClass("contrastrgaa")) {
	 		// Suppression des elements au clic
      $('body').removeClass( "contrastrgaa" );
      $.removeCookie("contrast");
      $(this).removeClass("active");
      }
      else {
      // Ajout des elements au clic
      $('body').addClass("contrastrgaa");
      $(this).addClass("active");
      $.cookie("contrast", "true");
      }
  });
  
  // *** JS DYSLEXIC *** //
  // Si Cookies dyslexic on ajoute la class dyslexic
  if ($.cookie("dyslexic")) {
    $('body').addClass("dyslexicrgaa");
    $("#btdyslexic01").addClass("active");
  }
  // Si dyslexic deja actif
  $("#btdyslexic01").click(function() {
      if ($('body').hasClass("dyslexicrgaa")) {
      // Suppression des elements au clic
      $('body').removeClass( "dyslexicrgaa" );
      $.removeCookie("dyslexic");
      $(this).removeClass("active");
      }
      else {
      // Ajout des elements au clic
      $('body').addClass("dyslexicrgaa");
      $.cookie("dyslexic", "true");
      $(this).addClass("active");
      }
  });
  
  // *** JS INCREASE/DECREASE *** //
  // Si cookies
  /// Gestion condition si cookies
  if ($.cookie("fs")) {
    $("#btincreazexx").removeClass("active");
    $("#btincreazex").removeClass("active");
    $("#btincreaze").addClass("active");
    $('body').toggleClass("fs");
  }
  if ($.cookie("fsx")) {
    $("#btincreazexx").removeClass("active");
    $("#btincreaze").removeClass("active");
    $("#btincreazex").addClass("active");
    $('body').toggleClass("fsx");
  }
  if ($.cookie("fsxx")) {
    $("#btincreazex").removeClass("active");
    $("#btincreaze").removeClass("active");
    $("#btincreazexx").addClass("active");
    $('body').toggleClass("fsxx");
  }
  
  /// Gestion au clic
  $("#btincreaze").click(function() {
    $('body').removeClass('fsx');
    $('body').removeClass('fsxx');
    $('#btincreazex').removeClass("active");
    $('#btincreazexx').removeClass("active");

    $('body').toggleClass("fs");
    $(this).toggleClass("active");
    $.removeCookie("fsx"),$.removeCookie("fsxx");
    $.cookie("fs", "true");
  });
  $("#btincreazex").click(function() {
    $('body').removeClass('fs');
    $('body').removeClass('fsxx');
    $('#btincreaze').removeClass("active");
    $('#btincreazexx').removeClass("active");

    $('body').toggleClass("fsx");
    $(this).toggleClass("active");
    $.removeCookie("fs"),$.removeCookie("fsxx");
    $.cookie("fsx", "true");
  });
  $("#btincreazexx").click(function() {
    $('body').removeClass('fs');
    $('body').removeClass('fsx');
    $('#btincreaze').removeClass("active");
    $('#btincreazex').removeClass("active");

    $('body').toggleClass("fsxx");
    $(this).toggleClass("active");
    $.removeCookie("fsx"),$.removeCookie("fs");
    $.cookie("fsxx", "true");
  });
});