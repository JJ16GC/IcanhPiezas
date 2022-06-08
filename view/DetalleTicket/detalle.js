function init() {}

// JS del formulario para editar los tramites
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
});

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

init();
