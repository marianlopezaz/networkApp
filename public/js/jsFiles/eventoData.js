$(function() {
    var funcionEvento = {};
        (function(app){
            app.init = function(){
                $.noConflict();
                app.dataTable();
                app.bindings();
                
            }

            app.dataTable = function() {
                
               var table= $('#tableEventos').DataTable({
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
                        {data: 'Acciones', 
                                "orderable":false,
                                "searchable": false,
                                "render": function (data,type,row,meta)
                                {
                                    var a = 
                                  
                                    "<button type='button' class='btn btn-primary'"+ 
                                    "id='EditarEvento' data-toggle='modal' data-target='#editarEventoModal'>Editar</button>"+
                                    
                                    "<form action='/EliminarEvento/"+row.idEvento +"' method='POST' onsubmit='return confirm(`Seguro que desea eliminar el evento?`);'> "+
                                    "<button type='submit' id='deleteButton' class='btn btn-primary'>Eliminar</button>"+
                                    "</from>";
                                    return a;
                                }
                        }
                    ]
                });

                $('#tableEventos tbody').on("click","#EditarEvento",function(event){
               
                    var data = table.row( $(this).parents('tr') ).data();
                    var nombreEvento = data['nombreEvento'];
                    var fechaEvento = data['fechaEvento'];
                    var horaEvento = data['horaEvento'];
                    var detalleEvento = data['detalleEvento'];
                    var contacto_id = data['contacto_id'];
                    app.modalEditar(data);
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

            app.modalEditar = function (data)
            {
              
      
            }

    
           app.init(); 
                 
        })(funcionEvento);
    });