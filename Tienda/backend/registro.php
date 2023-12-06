<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    //$id = $_POST["id"];
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Manejar el formulario si se ha
    //$precio = $_POST["precio"];
    //$descuento = $_POST["descuento"];

    $id = $_POST["id"];
    $id2 = $_POST["id2"];
    $id3 = $_POST["id3"];
    $id4 = $_POST["id4"];
    $id5 = $_POST["id5"];
    
    //if ($conn->query($sql) === TRUE) {

        $sql = "SELECT id FROM productos WHERE id = $id";
        $sql2 = "SELECT id FROM productos WHERE id = $id2";
        $sql3 = "SELECT id FROM productos WHERE id = $id3";
        $sql4 = "SELECT id FROM productos WHERE id = $id4";
        $sql5 = "SELECT id FROM productos WHERE id = $id5";

        $id_producto = $id;
        $id_producto2 = $id2; // Obtener el ID del producto recién insertado
        $id_producto3 = $id3;
        $id_producto4 = $id4;
        $id_producto5 = $id5;

        // Actualizar existencias
        $sql_update = "UPDATE productos SET existencias = existencias - 1 WHERE id = $id_producto";
        $sql_update2 = "UPDATE productos SET existencias = existencias - 1 WHERE id = $id_producto2";
        $sql_update3 = "UPDATE productos SET existencias = existencias - 1 WHERE id = $id_producto3";
        $sql_update4 = "UPDATE productos SET existencias = existencias - 1 WHERE id = $id_producto4";
        $sql_update5 = "UPDATE productos SET existencias = existencias - 1 WHERE id = $id_producto5";

        


        if (mysqli_query($conn, $sql_update)){
            echo "Registro exitoso. El producto $id ha sido añadido a la base de datos y las existencias han sido actualizadas.";
        }elseif (mysqli_query($conn, $sql_update2)){
            echo "Registro exitoso. El producto $id_producto2 ha sido añadido a la base de datos y las existencias han sido actualizadas.";
        }elseif (mysqli_query($conn, $sql_update3)){
            echo "Registro exitoso. El producto $sql_update3 ha sido añadido a la base de datos y las existencias han sido actualizadas.";
        }elseif (mysqli_query($conn, $sql_update4)){
            echo "Registro exitoso. El producto $sql_update4 ha sido añadido a la base de datos y las existencias han sido actualizadas.";
        }elseif (mysqli_query($conn, $sql_update5)){
            echo "Registro exitoso. El producto $sql_update5 ha sido añadido a la base de datos y las existencias han sido actualizadas.";
        }

         else {
            echo "Error al actualizar existencias: " . $sql_update . "<br>" . $conn->error;
        }
    //} else {
        //echo "Error al registrar el producto: " . $sql . "<br>" . $conn->error;
    //}
}

// Cerrar la conexión
$conn->close();
?>
