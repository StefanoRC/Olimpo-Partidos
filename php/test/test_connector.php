<?php ini_set("display_errors", "1"); ?>
<?php
include_once '../connectors/connector.php';

//http://localhost/objetos/Trabajo_N5_Php/php/test/test_connector.php

echo '-- Inicio de Test Connector --<br>';
$connector = new Connector();
$sql = "select version()";
try {
    $registros = $connector->getConnection()->query($sql);
    echo 'Conexión exitosa!<br>';
    foreach ($registros as $row) {
        echo 'Se conecto a ' . $row[0] . '<br>';
    }
} catch (Exception $e) {
    echo 'Error de conexión2!<br>';
    echo $e . '<br>';
}
echo '-- Fin de Test Connector --<br>';



// echo '<br>-- Inicio Test .insert() --<br>';
// $connector->insert(
//     "peliculas",
//     "titulo,genero,duracion",
//     "'Bad Boys','Accion','1:20:00'"
// );
// echo '<br>-- Fin Test .insert() --<br>';



// echo '<br>-- Inicio Test .delete() y .update()--<br>';
// $connector->delete("boletos", "id_cliente=1");
// $connector->update("clientes", "apellido='Meza'", "id_cliente=1");
// echo '<br>-- Fin test Test .delete() y update() --<br>';



// echo '<br>-- Inicio Test .get() --<br>';
// $registros = $connector->get(
//     "peliculas",
//     "genero like '%n'"
// );
// foreach ($registros as $row) {
//     echo " ID: " . $row['id_pelicula'] . " // Titulo: " . $row['titulo'] . " // Genero: " . $row['genero'] . " // Duracion:" .
//         $row['duracion'] . "<br>";
// }
// echo '<br>-- Fin Test .get() --<br>';



// echo '<br>-- Inicio Test .getAll() --<br><br>';
// $registros = $connector->getAll("jugadores");
// foreach ($registros as $row) {
//     echo " nombre: " . $row['nombre']  .  "<br>"  ." Goles: " . $row['goles'] ."<br><br>";
// }
// echo '<br>-- Fin Test .getAll() --<br>';
// ?>