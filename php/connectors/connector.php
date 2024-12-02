<?php ini_set("display_errors", "1"); ?>
<?php
class Connector
{
    public function getConnection()
    {
        // mariaDB localhost
        $driver = 'mysql';
        $hostname = '127.0.0.1';
        $username = 'root';
        $password = '150419';
        $base = 'olimpo';
        return new PDO(
            "$driver:host=$hostname;dbname=$base",
            $username,
            $password
        );
    }

    public function getData()
    {
        return "Sqlite 3";
    }

    public function insert($tabla, $campos, $values)
    {
        $sql = "insert into $tabla ($campos) values ($values)";
        return $this->getConnection()->exec($sql);
    }

    public function delete($tabla, $filtro)
    {
        $sql = "delete from $tabla where $filtro";
        return $this->getConnection()->exec($sql);
    }

    public function update($tabla, $set, $filtro)
    {
        $sql = "update $tabla set $set where $filtro";
        return $this->getConnection()->exec($sql);
    }

    public function get($tabla, $filtro)
    {
        $sql = "select * from $tabla where $filtro";
        return $this->getConnection()->query($sql);
    }

    public function getAll($tabla)
    {
        return $this->get($tabla, "1=1");
    }
}

?>