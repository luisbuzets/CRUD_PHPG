<?php

require_once "../config/conection.php";
class Empleado extends Connection
{
    public static function mostrarDatos()
    {
        try {
            $sqlpg = "SELECT 
            t.idempleado,
            p.primer_nombre,
            p.segundo_nombre,
            p.primer_apellido,
            p.segundo_apellido,
            p.identidad,
            p.edad,
            t.fecha_registro
          FROM vg.empleado t INNER JOIN vg.persona p
          ON p.idpersona=t.idpersona 
	";
            $stmt = Connection::getConnection()->prepare($sqlpg);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public static function obtenerDatoId($id)
{
    try {
        $sql = "SELECT 
        t.idempleado,
        p.primer_nombre,
        p.segundo_nombre,
        p.primer_apellido,
        p.segundo_apellido,
        p.identidad,
        p.edad,
        t.fecha_registro
      FROM vg.empleado t INNER JOIN vg.persona p
      ON p.idpersona=t.idpersona 
        WHERE t.idempleado = :id";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

public static function guardarDato($data)
{

    try {
        $sql = "INSERT INTO public.persona(nombres, email, edad)
        VALUES (:nombres,:email,:edad);";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindParam(':primer_nombre', $data['primer_nombre']);
        $stmt->bindParam(':segundo_nombre', $data['segundo_nombre']);
        $stmt->bindParam(':primer_apellido', $data['primer_apellido']);
        $stmt->bindParam(':segundo_apellido', $data['segundo_apellido']);
        $stmt->bindParam(':identidad', $data['identidad']);
        $stmt->bindParam(':direccion', $data['direccion']);
        $stmt->bindParam(':idserviciotaller', $$data['idserviciotaller']);
        $stmt->bindParam(':fecharegistro', $$data['fecharegistro']);
        $stmt->bindParam(':id', $id);
        
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

public static function actualizarDato($data)
{

    try {
        $sql = "UPDATE public.persona
    SET nombres = :nombres, email = :email, edad = :edad
    WHERE id = :id";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindParam(':primer_nombre', $data['primer_nombre']);
        $stmt->bindParam(':segundo_nombre', $data['segundo_nombre']);
        $stmt->bindParam(':primer_apellido', $data['primer_apellido']);
        $stmt->bindParam(':segundo_apellido', $data['segundo_apellido']);
        $stmt->bindParam(':identidad', $data['identidad']);
        $stmt->bindParam(':direccion', $data['direccion']);
        $stmt->bindParam(':idserviciotaller', $$data['idserviciotaller']);
        $stmt->bindParam(':fecharegistro', $$data['fecharegistro']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
public static function eliminarDato($id)
{
    try {
        $sql = "DELETE FROM persona WHERE id = :id";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
  

   
}
