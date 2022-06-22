// JS del formulario para crear un tramite de analisis

$(document).ready(function () {
  var current = 1,
    current_step,
    next_step,
    steps;
  steps = $("fieldset").length;
  $(".next").click(function () {
    current_step = $(this).parent();
    var inputs = current_step.find("input");
    var countFails = 0;

    /**aqui busca si hay informacion el validationMesagge, el cual solo esta lleno cuando el campo esta mal diligenciado*/

    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].validationMessage != "") {
        countFails++;
      }
    }
    /*solo vamos a pasar al siguiente cuando ningun input tenga error*/
    if (countFails == 0) {
      current_step = $(this).parent();
      next_step = $(this).parent().next();
      next_step.show();
      current_step.hide();
    }

    if (countFails > 0) {
      window.alert("Faltan datos por llenar");
    }
  });
  $(".previous").click(function () {
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
  });
  // Funcion para aceptar el tratamiento de datos F
  $(function () {
    $(".checkbox").click(function () {
      $(".delete").prop("disabled", $("input.checkbox:checked").length == 0);
    });
  });
});
