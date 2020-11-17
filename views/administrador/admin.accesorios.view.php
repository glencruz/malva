<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_accesorio, descripcion, precio, cantidad, imagen, estado FROM accesorios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Accesorios - Admin</title>

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

   
        
    <h2 class="title morado pt" style="margin-top:8%; text-align:center;" id="titulo">Accesorios</h2>
        
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaAccesorios" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id_accesorio'] ?></td>
                                <td><?php echo $dat['descripcion'] ?></td> 
                                <td><?php echo $dat['precio'] ?></td>  
                                <td><?php echo $dat['cantidad'] ?></td> 
                                <td><?php echo $dat['imagen'] ?></td> 
                                <td><?php 
                                if($dat['estado'] == 1){
                                    echo "<button type='button' class='btn btn-success btn-desactivar'>Disponible</button>";
                                }else {
                                    echo "<button type='button' class='btn btn-danger btn-activar'>No disponible</button>";
                                }
                                ?>
                                </td> 
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
        
      
<!--Modal para editar-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formAccesorios">    
            <div class="modal-body">
                <div class="form-group">
                <label for="descripcion" class="col-form-label">Descripción:</label>
                <input type="text" class="form-control" id="descripcion">
                </div>                
                <div class="form-group">
                <label for="precio" class="col-form-label">Precio:</label>
                <input type="number" class="form-control" id="precio">
                </div>
                <div class="form-group">
                <label for="cantidad" class="col-form-label">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad">
                </div>
                <div class="form-group">
                <label for="imagen" class="col-form-label">Imagen:</label>
                <input type="text" class="form-control" id="imagen">
                </div>                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>

<!--Modal para agregar-->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formAccesoriosA">    
            <div class="modal-body">
                <div class="form-group">
                <label for="idA" class="col-form-label">Código:</label>
                <input type="text" class="form-control" id="idA">
                </div> 
                <div class="form-group">
                <label for="descripcionA" class="col-form-label">Descripción:</label>
                <input type="text" class="form-control" id="descripcionA">
                </div>                
                <div class="form-group">
                <label for="precioA" class="col-form-label">Precio:</label>
                <input type="number" class="form-control" id="precioA">
                </div>
                <div class="form-group">
                <label for="cantidadA" class="col-form-label">Cantidad:</label>
                <input type="number" class="form-control" id="cantidadA">
                </div>
                <div class="form-group">
                <label for="imagenA" class="col-form-label">Imagen:</label>
                <input type="text" class="form-control" id="imagenA">
                </div>
                <form method='post' action='' enctype="multipart/form-data">
                Imagen: <input type='file' name='file' id='file' class='form-control' ><br>
                <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
                </form>                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
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
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
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
    
$("#btnNuevo").click(function(){
    $("#formAccesoriosA").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Accesorio");            
    $("#modalAgregar").modal("show");        
    id=null;
    opcion = 1; //alta
});

$(document).on("click", ".btn-desactivar", function(){ 
    fila = $(this).closest("tr");
    id = fila.find('td:eq(0)').text();
    opcion = 4;
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id_accesorio = data[0].id_accesorio;            
            descripcion = data[0].descripcion;
            precio = data[0].precio;
            cantidad = data[0].cantidad;
            imagen = data[0].imagen;
            estado = data[0].estado;
            if(estado == 1){
                estados = "<button type='button' class='btn btn-success btn-desactivar'>Disponible</button>";
            }
            else {
                estados = "<button type='button' class='btn btn-danger btn-activar'>No disponible</button>";
            }
            tablaAccesorios.row(fila).data([id_accesorio,descripcion,precio,cantidad,imagen,estados]).draw();}            
                
    });
});

$(document).on("click", ".btn-activar", function(){ 
    fila = $(this).closest("tr");
    id = fila.find('td:eq(0)').text();
    opcion = 5;
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id_accesorio = data[0].id_accesorio;            
            descripcion = data[0].descripcion;
            precio = data[0].precio;
            cantidad = data[0].cantidad;
            imagen = data[0].imagen;
            estado = data[0].estado;
            if(estado == 1){
                estados = "<button type='button' class='btn btn-success btn-desactivar'>Disponible</button>";
            }
            else {
                estados = "<button type='button' class='btn btn-danger btn-activar'>No disponible</button>";
            }
            tablaAccesorios.row(fila).data([id_accesorio,descripcion,precio,cantidad,imagen,estados]).draw();}            
                
    });
});
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = fila.find('td:eq(0)').text();
    descripcion = fila.find('td:eq(1)').text();
    precio = parseInt(fila.find('td:eq(2)').text());
    cantidad = parseInt(fila.find('td:eq(3)').text());
    imagen = fila.find('td:eq(4)').text();
    
    
    $("#descripcion").val(descripcion);
    $("#precio").val(precio);
    $("#cantidad").val(cantidad);
    $("#imagen").val(imagen);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Accesorio");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = $(this).closest("tr").find('td:eq(0)').text();
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el accesorio: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaAccesorios.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formAccesorios").submit(function(e){
    e.preventDefault();    
    descripcion = $.trim($("#descripcion").val());
    precio = $.trim($("#precio").val());
    cantidad = $.trim($("#cantidad").val());
    imagen = $.trim($("#imagen").val());    
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {descripcion:descripcion, precio:precio, cantidad:cantidad, imagen:imagen, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id_accesorio = data[0].id_accesorio;            
            descripcion = data[0].descripcion;
            precio = data[0].precio;
            cantidad = data[0].cantidad;
            imagen = data[0].imagen;
            estado = data[0].estado;
            if(estado == 1){
                estados = "<button type='button' class='btn btn-success btn-desactivar'>Disponible</button>";
            }
            else {
                estados = "<button type='button' class='btn btn-danger btn-activar'>No disponible</button>";
            }
            tablaAccesorios.row(fila).data([id_accesorio,descripcion,precio,cantidad,imagen,estados]).draw();            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});

$("#formAccesoriosA").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idA").val());    
    descripcion = $.trim($("#descripcionA").val());
    precio = $.trim($("#precioA").val());
    cantidad = $.trim($("#cantidadA").val());
    imagen = $.trim($("#imagenA").val());    
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {descripcion:descripcion, precio:precio, cantidad:cantidad, imagen:imagen, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id_accesorio = data[0].id_accesorio;            
            descripcion = data[0].descripcion;
            precio = data[0].precio;
            cantidad = data[0].cantidad;
            imagen = data[0].imagen;
            estado = data[0].estado;
            if(estado == 1){
                estados = "<button type='button' class='btn btn-success btn-desactivar'>Disponible</button>";
            }
            else {
                estados = "<button type='button' class='btn btn-danger btn-activar'>No disponible</button>";
            }
            tablaAccesorios.row.add([id_accesorio,descripcion,precio,cantidad,imagen,estados]).draw();            
        }        
    });
    $("#modalAgregar").modal("hide");    
    
});
    
});
</script>    
     
    
    
  </body>
</html>
