<?php

require_once "../models/producto.model.php";

echo json_encode(Producto::mostrarDatos());

?>
