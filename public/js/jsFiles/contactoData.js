$(function() {
    $.noConflict(); 
    $('#tableContactos').DataTable({
        responsive: true,
        language: {
            url: 'js/DataTables/Spanish.json', 
            searchPlaceholder: 'Buscar Evento..'
        },
        processing: true,
        serverSide: true,
        aaSorting: [],
        ajax: {
            url: $('#tableContactos').data('route'),
        },
        columns: [
            {data: 'nameCont', name: 'nameCont'},
            {data: 'lastNameCont', name: 'lastNameCont'},
        ]
    })
});