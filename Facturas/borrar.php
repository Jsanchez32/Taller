<?php
    require_once("configFactura.php");

    $record = new Factura;

    if(isset($_GET['facturaId']) && isset($_GET['req'])){
        if($_GET['req']== "delete"){
            $record -> setFacturaId($_GET['facturaId']);
            $record -> delete();
            echo "<script>alert('Datos borrados exitosamente'); document.location='factura.php'</script>";
        }
    }


?>