$(function() {
    var funcionContacto = {};
        (function(app){
            app.init = function(){
                $.noConflict();
                app.dataTable();
                app.bindings();
            }

            app.dataTable = function() {
                
                $('#tableContactos').DataTable({
                    responsive: true,
                    bPaginate:true,
                    language: {
                        url: 'js/DataTables/Spanish.json', 
                        searchPlaceholder: 'Buscar Contacto..'
                    },
                    
                    processing: true,
                    serverSide: true,
                    aaSorting: [],
                    ajax: {
                        url: $('#tableContactos').data('route'),
                    },
                    columns: [
                        {data: 'nameCont', name: 'nombreContacto'},
                        {data: 'lastNameCont', name: 'apellidoContacto'},
                        
                    ]
                });

            }

                //OYENTES

            app.bindings = function (){

                //OYENTE QUE AGREGA EVENTO

                $('#agregarNuevoContacto').on("click",function(event){
                    app.agregarContacto();
                });


                $( "#paisContacto" ).change(function(event) {
                    $("#provinciaContacto").attr("disabled", false)
                    $.get(`provincias/${event.target.value}`,function(data,state){
                        $("#provinciaContacto").empty();
                        data.forEach(element => {
                            $("#provinciaContacto").append(`<option value=$(element.idProvincia)> ${element.nombreProvincia}</option>`);
                        });
                    });
                  });


            }



            //FUNCIONES QUE EJECUTAN LOS OYENTES

            app.agregarContacto = function ()
            {
                var url = "/Contactos";
                var datos = $('#formNuevoContacto').serialize();
                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'json',
                    data: datos,
                    success: function (datosRecibidos){
                     $("#nuevoContactoModal").hide();
                     location.reload();
            

                    },
                    error: function (datosRecibidos){
                        alert("Hubo un error en guardar los datos");
                     
                    }
                    
                
                });
            }

        

            app.cargarProvincias = function(idPais)
            {
                alert(idPais);
            }


           app.init(); 
                 
        })(funcionContacto);
    });