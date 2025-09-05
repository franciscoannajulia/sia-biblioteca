$(document).ready(function() {
miDataTable();
} );




function  miDataTable(){
    $('#miTabla').DataTable({

      "language": {
      "emptyTable":			"<i>Não há dados na tabela</i>",
      "info":		   		"De _START_ à _END_ de _TOTAL_ ",
      "infoEmpty":			"Mostrando 0 registros de um total de 0.",
      "infoFiltered":			"(filtrados de un total de _MAX_ registros)",
      "infoPostFix":			"(atualizados)",
      "lengthMenu":			"Mostrar _MENU_ registros",
      "loadingRecords":		"Carregando...",
      "processing":			"Processando...",
      "search":			"<span style='font-size:15px;'>Buscar:</span>",
      "searchPlaceholder":		"Pesquisar",
      "zeroRecords":			"Nenhum dado encontrado.",
      "paginate": {
        "first":			"Primeira",
        "last":				"Última",
        "next":				"Próxima",
        "previous":			"Anterior"
      },
      "aria": {
        "sortAscending":	"Ordenação Ascendente",
        "sortDescending":	"Ordenação descendente"
      }
    },






    });
}
