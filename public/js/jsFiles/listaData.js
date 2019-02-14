$(function() {
    $.noConflict(); 
    $('#tableListas').DataTable({
        responsive: true,
        language: {
            url: 'js/DataTables/Spanish.json', 
            searchPlaceholder: 'Buscar Lista..'
        },
        processing: true,
        serverSide: true,
        aaSorting: [],
        ajax: {
            url: $('#tableListas').data('route'),
        },
        columns: [
            {data: 'nombreLista', name: 'nombreLista'},
        ]
    })
});