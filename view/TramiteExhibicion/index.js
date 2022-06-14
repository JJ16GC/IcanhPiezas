// JS del formulario para crear un tramite de analisis

$(document).ready(function () {
  var current = 1,
    current_step,
    next_step,
    steps;
  steps = $("fieldset").length;
  $(".next").click(function () {
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
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
