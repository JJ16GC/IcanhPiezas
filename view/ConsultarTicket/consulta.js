function init() {}


$(document).ready(function () {
  $("#ticket_data").DataTable({
    bDestroy: true,
    responsive: true,
    autoWidth: false,
    language: {
      url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-MX.json",
    },
  });
});

init();
