function init() {}

$(document).ready(function () {});

$(document).on("click", "#show_password", function (){
  var cambio = document.getElementById("pass");
  if(cambio.type == "password"){
    cambio.type = "text";
    $('.icon').removeClass('glyphicon glyphicon-eye-close').addClass('glyphicon glyphicon-eye-open');
  }else{
    cambio.type = "password";
    $('.icon').removeClass('glyphicon glyphicon-eye-open').addClass('glyphicon glyphicon-eye-close');
  }
});

init();
