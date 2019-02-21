$(function() {
    var funcionEvento = {};
        (function(app){
            app.init = function(){
                $.noConflict();
                app.dataTable();
                app.bindings();
            }

            app.dataTable = function() {
                
                $('#tableEventos').DataTable({
                    drawCallback: function() {
                        $('.select2').select2({
                            placeholder: 'Seleccionar Contacto',
                            allowClear: true,
                            theme:'classic'
                        });     
                     },
                    responsive: true,
                    bPaginate:true,
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
                });

            }

                //OYENTES

            app.bindings = function (){

                //OYENTE QUE AGREGA EVENTO

                $('#agregarNuevoEvento').on("click",function(event){
                    app.agregarEvento();
                });



            }



            //FUNCIONES QUE EJECUTAN LOS OYENTES

            app.agregarEvento = function (){
                var url = "/Eventos";
                var datos = $('#formNuevoEvento').serialize();
                
                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'json',
                    data: datos,
                    success: function (datosRecibidos){
                     $("#nuevoEventoModal").hide();
                     location.reload();
            

                    },
                    error: function (datosRecibidos){
                        alert("Hubo un error en guardar los datos");
                     
                    }
                    
                
            });
            }

    
           app.init(); 
                 
        })(funcionEvento);
    });