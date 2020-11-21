<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_pedido, fecha_inicio, fecha_final, info_pedido, total FROM pedidos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Pedidos - Admin</title>

		<meta property="og:url"                content="..." />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="..." />
		<meta property="og:description"        content="..." />
		<meta property="og:image"              content="..." />
      
    <?php echo $favicon; ?>
    <?php echo $normalize_css; ?>
    <?php echo $boostrap_v4_css; ?>

        <!-- Font awesome -->
    <?php echo $font_awesome_css; ?>
        <!-- CSS own files -->
    <?php echo $own_file_css; ?>  
      
    <?php echo $datatables_css; ?>
    <?php echo $datatables_boostrap_v4_css; ?>
    <!--datables CSS básico-->

  </head>
    
  <body>

    <?php require("views/administrador/menu.view.php"); ?>

   
        
    <h2 class="title morado pt" style="margin-top:8%; text-align:center;" id="titulo">Pedidos</h2>
        
      
   
    <br>  
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaAccesorios" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Final</th>
                                <th>Pedido</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id_pedido'] ?></td>
                                <td><?php echo $dat['fecha_inicio'] ?></td> 
                                <td><?php echo $dat['fecha_final'] ?></td>  
                                <td><?php echo $dat['info_pedido'] ?></td> 
                                <td><?php echo $dat['total'] ?></td> 
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>
        
      
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
        <?php echo $jquery_js; ?>
        <?php echo $tether_js; ?>


        <!-- Javascripts own files  -->     
        <?php echo $own_file_js; ?>


        <?php echo $bootstrap_v4_js; ?>

        <?php echo $font_awesome_js; ?>

        <?php echo $datatables_js; ?>


<script type="text/javascript">
$(document).ready(function(){
    tablaAccesorios = $("#tablaAccesorios").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = $(this).closest("tr").find('td:eq(0)').text();
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el pedido: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {id:id, opciones:opcion},
            success: function(){
                tablaAccesorios.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
    
});
</script>    
     
    
    
  </body>
</html>
