$(function() {
    $.noConflict(); 
    $('#tableEventos').DataTable({
        responsive: true,
        language: {
            url: 'js/DataTables/Spanish.json', 
            searchPlaceholder: 'Buscar Evento..'
        },
        processing: true,
        serverSide: true,
        aaSorting: [],
        ajax: {
            url: $('#tableEventos').data('route'),
        },
        columns: [
            {data: 'nombreEvento', name: 'nombreEvento'},
            {data: 'fechaEvento', name: 'fechaEvento'},
            {data: 'horaEvento', name: 'horaEvento'},
            {data: 'detalleEvento', name: 'detalleEvento'},
        ]
    })
});