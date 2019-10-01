// AJOUTER UN SITE A L'IMPUT TYPE NAME
$(function() {
    $('#colorselector').change(function(){
        document.getElementById('name').setAttribute("value",$(this).val());
    });
});
// END AJOUTER UN SITE A L'IMPUT TYPE NAME

// SHOW PASSWORD
$(".toggle-password").click(function() {

    // Change icon
    $(this).children('i').toggleClass("fa-eye fa-eye-slash");
   
    // Change input type
    var input = $($(this).siblings('input'));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
// END SHOW PASSWORD

// script pour copier le mot de passe
function copyToClipboard(element) {

  var $temp = $("<input>");
  
  $("body").append($temp);
  $temp.val($(element).attr('value')).select();
  document.execCommand("copy");
  $.notify("Mot de passe copié", {
      type: "info",
      icon: "info"
  });
  $temp.remove();
}
// END script pour copier le mot de passe

// OVERLAY
// var $hauteurWindow2 = $('#content_body').innerHeight();
// var $hauteurWindow1 = $('#content_body').height();
// var $hauteurWindow = $('#content_body').prop('scrollHeight');
// // var $hauteurWindow = $('body').prop('scrollHeight');

// console.log($hauteurWindow2);
// console.log($hauteurWindow1);
// console.log($hauteurWindow);

// $('#popupAdd').css('height',$hauteurWindow+'px');
// END OVERLAY