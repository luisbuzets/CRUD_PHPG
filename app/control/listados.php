<?php

require_once "../models/empleado.model.php";

echo json_encode(Empleado::mostrarDatos());

?>
