$(function() {
    var funcionLista = {};
        (function(app){
            app.init = function(){
                $.noConflict();
                app.dataTable();
                app.bindings();
            }

            app.dataTable = function() {
                
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
            }

                //OYENTES

            app.bindings = function (){

                //OYENTE QUE AGREGA LISTA

                $("#agregarNuevaLista").on("click",function(event){
                    app.agregarLista();
                });

                $("#contacto_id").select2({
                    placeholder:'Seleccione un Contacto de su lista',
                });

            }


            //FUNCIONES QUE EJECUTAN LOS OEYENTES


            app.agregarLista = function ()
            {
                
                var url = "/Listas";
                var datos = $('#formNuevaLista').serialize();
               
                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'json',
                    data: datos,
                    success: function (datosRecibidos){
                     $("#nuevaListaModal").hide();
                     location.reload();
                    },
                    error: function (datosRecibidos){
                        alert("Hubo un error en guardar los datos");
                     
                    }
                    
                
                });
            }

            app.init();

        })(funcionLista);

});