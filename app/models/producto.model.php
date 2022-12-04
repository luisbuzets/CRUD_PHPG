<?php

require_once "../config/conection.php";
class Producto extends Connection
{
    public static function mostrarDatos()
    {
        try {
            $sqls = "SELECT 	
            pr.idproducto,
            pr.nombre,
            pr.preciocosto,
            pr.precioVenta,
            cp.descripcion categoria
        FROM vg.producto pr
        INNER JOIN vg.categoriaproducto cp
        ON pr.idcategoria= cp.idcategoria";
            $stmt = Connection::getConnection()->prepare($sqls);
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
        $sqls = "SELECT 	
        pr.idproducto,
        pr.nombre,
        pr.preciocosto,
        pr.precioVenta,
        cp.descripcion categoria
    FROM vg.producto pr
    INNER JOIN vg.categoriaproducto cp
    ON pr.idcategoria= cp.idcategoria    
        WHERE pr.idproducto = :id";
        $stmt = Connection::getConnection()->prepare($sqls);
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
        $sqls = "INSERT INTO public.persona(nombres, email, edad)
        VALUES (:nombres,:email,:edad);";
        $stmt = Connection::getConnection()->prepare($sqls);
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