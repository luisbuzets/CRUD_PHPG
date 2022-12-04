<?php
class Connection
{
   public $host = 'localhost';
   public $dbname = 'StoreGames';
   public $port = '5432';
   public $username = 'postgres';
   public $password = 'password';
   public $driver = 'pgsql';
   public $connect;

   public static function getConnection()
   {
    try{
            $connection = new Connection();
            $connection->connect = new PDO("{$connection->driver}:host={$connection->host};port={$connection->port}; 
            dbname={$connection->dbname}", $connection->username, $connection->password);
            $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connection->connect;
        echo "connection success";
    }
    catch(PDOException $e){
        echo "ERROR:" . $e->getMessage();
    
    }
    return$connection ->connect;
   }
}
 //Connection::getConnection();

 
?>