<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>

      

      
    <!-- <script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true
        });
    } );  
    
    </script> -->


    <script>
        $(document).ready(function() {
    
    $('#tablaModal').DataTable( {
        responsive: true
    } );

    $('#example').DataTable( {
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
                            {
                                "extend": "copyHtml5",
                                "text": "Copiar",
                                "titleAttr": "Copiar",
                                "className": "btn bg-warning"
                            },
                            {
                                "extend": "excelHtml5",
                                "text": "Excel",
                                "titleAttr": "Exportar a Excel",
                                "className": "btn bg-success"
                            },
                            {
                                "extend": "csvHtml5",
                                "text": "CSV",
                                "titleAttr": "Exportar a CSV",
                                "className": "btn bg-secondary"
                            },
                            {
                                "extend": "print",
                                "text": "Imprimir",
                                "titleAttr": "Imprimir archivo",
                                "className": "btn bg-primary"
                            }
                        ]
    } );

    var tablaDetallesPedido = $('#tablaPedidoDetalles').DataTable( {
        responsive: true,
        dom: "B<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
                            {
                                "extend": "copyHtml5",
                                "text": "Copiar",
                                "titleAttr": "Copiar",
                                "className": "btn bg-warning"
                            },
                            {
                                "extend": "excelHtml5",
                                "text": "Excel",
                                "titleAttr": "Exportar a Excel",
                                "className": "btn bg-success"
                            },
                            {
                                "extend": "csvHtml5",
                                "text": "CSV",
                                "titleAttr": "Exportar a CSV",
                                "className": "btn bg-secondary"
                            },
                            {
                                "extend": "print",
                                "text": "Imprimir",
                                "titleAttr": "Imprimir archivo",
                                "className": "btn bg-primary"
                            }
                        ],
                        "drawCallback":function(settings){
                    //alert("La tabla de esta recargando");
                    var api = this.api();
                    $(api.column(0).footer()).html(
                        'Cantidad Productos: '+api.column(0, {page:'current'}).data().count()
                    ),
                    $(api.column(4).footer()).html(
                        'Total Precio: '+api.column(4, {page:'current'}).data().sum()
                    ),
                    $(api.column(5).footer()).html(
                        'Total Cantidad: '+api.column(5, {page:'current'}).data().sum()
                    ),
                    $(api.column(6).footer()).html(
                        'Costo Pedido: '+api.column(6, {page:'current'}).data().sum()
                    )
                }
                        
    } );

    

    var tablaPedidos = $('#tablaPedidos').DataTable( {
        responsive: true,
        dom: "B<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
                            {
                                "extend": "copyHtml5",
                                "text": "Copiar",
                                "titleAttr": "Copiar",
                                "className": "btn bg-warning"
                            },
                            {
                                "extend": "excelHtml5",
                                "text": "Excel",
                                "titleAttr": "Exportar a Excel",
                                "className": "btn bg-success"
                            },
                            {
                                "extend": "csvHtml5",
                                "text": "CSV",
                                "titleAttr": "Exportar a CSV",
                                "className": "btn bg-secondary"
                            },
                            {
                                "extend": "print",
                                "text": "Imprimir",
                                "titleAttr": "Imprimir archivo",
                                "className": "btn bg-primary"
                            }
                        ],
                        "drawCallback":function(settings){
                    //alert("La tabla de esta recargando");
                    var api = this.api();
                    $(api.column(0).footer()).html(
                        'Total Pedidos: '+api.column(0, {page:'current'}).data().count()
                    ),
                    $(api.column(3).footer()).html(
                        'Total Productos: '+api.column(3, {page:'current'}).data().sum()
                    ),
                    $(api.column(4).footer()).html(
                        'Total: '+api.column(4, {page:'current'}).data().sum()
                    ),
                    $(api.column(5).footer()).html(
                        'Importe Total: '+api.column(5, {page:'current'}).data().sum()
                    )
                }
                        
    } );

    var tot = tablaDetallesPedido.column(6).data().sum();
            $("#totalProd").text(tot);


} );
    </script>


