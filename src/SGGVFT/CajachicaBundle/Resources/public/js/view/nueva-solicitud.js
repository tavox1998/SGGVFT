(function($) {
    $(document).ready(function() {
        $('#my-table').dynatable({
            table: {
                defaultColumnIdStyle: 'trimDash'
            }
            /*,
             dataset: {
                ajax: true,
                ajaxUrl: '/dynatable-ajax.json',
                ajaxOnLoad: true,
                records: []
            }*/
        });


        $('#sel_gastos').on('click', function(event) {
            event.preventDefault();
            $('#myModal').modal({
                keyboard: false
            })

            $('#myModal').on('hidden.bs.modal', function (e) {
                alert('probando');
            })

        });

    });


})(jQuery);

/*código gustavo*/
(function() {
    function guardar_solicitud() {

    }

    function totalizar() {
        var cantidad = document.getElementById("cantidad").value;
        var precio_unit = document.getElementById("Precio_unit").value;
        var resultado;
        resultado = cantidad * precio_unit;
        $("#Total").val(resultado);
    }

    function limpiar_agregar_gastos() {

        $("#Cod_gasto").val("");
        $("#Descrip_gasto").val("");
        $("#cantidad").val("");
        $("#Precio_unit").val("");
        $("#Total").val("");

    }

    function elegir_destino() {
        alert("clickme");
        return;
        $(document).ready(function() {
            $("#contenido_modal").load("../vista/modal_lugar.php", function() {
                $.blockUI({
                    centerY: false,
                    message: $('#contenido_modal'),

                    css: {
                        opacity: 1,
                        cursor: 'default',
                        padding: 0,
                        margin: 'auto',
                        width: '0px',
                        height: '0px',
                        top: '0',
                        left: '0',
                        right: '0',
                        bottom: '0',
                        color: '#000',
                        border: '0px',



                    },
                    overlayCSS: {
                        cursor: 'default'
                    }
                });
            });

        });


    }

    function elegir_gasto() {

        $(document).ready(function() {


            $("#contenido_modal").load("../vista/modal_gastos.php", function() {
                $.blockUI({
                    centerY: false,
                    message: $('#contenido_modal'),

                    css: {
                        opacity: 1,
                        cursor: 'default',
                        padding: 0,
                        margin: 'auto',
                        width: '0px',
                        height: '0px',
                        top: '0',
                        left: '0',
                        right: '0',
                        bottom: '0',
                        color: '#000',
                        border: '0px',



                    },
                    overlayCSS: {
                        cursor: 'default'
                    }
                });
            });

        });


    }

    function agregar_fila_gastos() {



        if ($('#validar_datos_gastos')[0].checkValidity() == false) {
            alert("Debe llenar los campos para completar el tipo de gasto");

        } else if (document.getElementById('Cod_gasto').value == verificar_codigo()) {
            alert("Este tipo de gasto ya en el listado de su solicitud");

        } else {
            producto = document.getElementById('Descrip_gasto').value;
            descriprodu = document.getElementById('cantidad').value;
            counidad = document.getElementById('Precio_unit').value;
            descripuni = document.getElementById('Total').value;
            cantpro = document.getElementById('Cod_gasto').value;

            var tr, td;
            tbody_gastos = document.getElementById('tbody_gastos');

            tr = tbody_gastos.insertRow(tbody_gastos.rows.length); //ultima fila a agregar
            td = tr.insertCell(tr.cells.length); //ultima celda de la fila.

            td.setAttribute("align", "left");
            td.setAttribute("valign", "bottom");



            it = tbody_gastos.rows.length; //item a insertar

            //heading
            td.setAttribute("class", "heading");
            td.innerHTML = it;

            //cantidad de unidades del producto
            td = tr.insertCell(tr.cells.length);
            td.setAttribute("align", "right");
            td.setAttribute("valign", "bottom")
            td.innerHTML = cantpro;
            //S  td.style.backgroundColor="#FFFFFF";



            /////codigo del producto
            td = tr.insertCell(tr.cells.length);
            td.setAttribute("align", "right");
            td.setAttribute("valign", "bottom")
            td.innerHTML = producto;
            // td.style.backgroundColor="#FFFFFF";


            /////descripcion del producto
            td = tr.insertCell(tr.cells.length);
            td.setAttribute("align", "right");
            td.setAttribute("valign", "bottom")
            td.innerHTML = descriprodu;
            // td.style.backgroundColor="#FFFFFF";


            /////codigo de unidad
            td = tr.insertCell(tr.cells.length);
            td.setAttribute("align", "right");
            td.setAttribute("valign", "bottom")
            td.innerHTML = counidad;
            // td.style.backgroundColor="#FFFFFF";


            /////Descripcion de la unidad

            td = tr.insertCell(tr.cells.length);
            td.setAttribute("align", "right");
            td.setAttribute("valign", "bottom")
            td.innerHTML = descripuni;
            //td.style.backgroundColor="#FFFFFF";



            td = tr.insertCell(tr.cells.length);

            td.setAttribute("align", "center");
            td.setAttribute("valign", "bottom");
            td.innerHTML = '<a href="#" onclick="eliminar_detabla(this); return false;"><img src="../vista/imagenes_sistema/window-close.png" width="18" height="18" style="border:none; cursor:pointer" title="Eliminar Fila"></a>';


        }
    }

    function eliminar_detabla(cajita) {

        if (confirm(" Esta seguro de Borrar este Gasto?")) {
            var celda = cajita.parentNode; //celda
            var fila = celda.parentNode; //fila
            var latabla = fila.parentNode; //llego a la tabla
            latabla.removeChild(fila); //Elimino el hijo completo o fila

            // cantifilas_requi();
            iterar_tabla();
        }

    }

    function cantifilas_gastos() {
        var tr, td;
        tfilas2 = document.getElementById('tbody_gastos').rows.length;
        document.getElementById('tfilas').value = tfilas2;
    }

    function iterar_tabla() {

        var tama = document.getElementById('tbody_gastos').rows.length;

        for (var i = 0; i < tama; i++) {
            var td_num, tbody_gastos;

            document.getElementById('tbody_gastos').rows[i].cells[0].childNodes[0].nodeValue = i + 1;


        } //fun Busqueda For en la tabla auxiliar

    }

    function verificar_codigo() {
        var tama = document.getElementById('tbody_gastos').rows.length;

        for (var i = 0; i < tama; i++) {
            var tbody_gastos;
            return document.getElementById('tbody_gastos').rows[i].cells[1].childNodes[0].nodeValue;



        } //fun Busqueda For en la tabla auxiliar
    }

    function cantifilas_requi() {
        var tr, td;
        tfilas2 = document.getElementById('tbody_gastos').rows.length;
        document.getElementById('tfilas').value = tfilas2;
    }

})();