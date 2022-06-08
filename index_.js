function init() {}

$(document).ready(function () {});

// Metodo para ver o esconder las contraseñas
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

// Metodo para cambiar entre usuarios o administradores
$(document).on("click", "#btnsoporte", function () {
  if ($("#rol_id").val() == 1) {
    $("#lbltitulo").html("Acceso Soporte");
    $("#btnsoporte").html("Acceso Usuario");
    $("#google").hide();
    $("#reset").hide();
    $("#rol_id").val(2);
  } else {
    $("#lbltitulo").html("Acceso Usuario");
    $("#btnsoporte").html("Acceso Soporte");
    $("#google").show();
    $("#reset").show();
    $("#rol_id").val(1);
  }
});


init();
