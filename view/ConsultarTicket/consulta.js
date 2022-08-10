function init() {}

// Funcion llamado de plugin DataTable

$(document).ready(function () {
  $("#ticket_data").DataTable({
    bDestroy: true,
    rowReorder: {
      selector: "td:nth-child(2)",
    },
    responsive: true,
    autoWidth: false,
    dom:
      "<'row'<'col-sm-4 'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    buttons: [
      {
        //Botón para Excel
        extend: "excel",
        footer: true,
        title: "Archivo",
        filename: "Export_File_excel",
        //Aquí es donde generas el botón personalizado
        text: '<button class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>',
      },
      //Botón para PDF
      {
        extend: "pdf",
        footer: true,
        title: "Archivo PDF",
        filename: "Export_File_pdf",
        text: '<button  class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>',
      },
      {
        extend: "print",
        footer: true,
        text: '<button  class="btn btn-gray"><i class="fa fa-print" aria-hidden="true"></i></i></button>',
      },
    ],
    language: {
      url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-MX.json",
    },
  });
});

init();
