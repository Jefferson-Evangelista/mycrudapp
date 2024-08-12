<?php 
    if ( isset ($_GET["id"])) {
        $id = $_GET["id"];
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mycrudapp";

        // Create connection
        $connection = new mysqli($servername, $username, $password, $database);

        $sql = "DELETE FROM clients WHERE id=$id";
        $connection->query($sql);

    }

    header("location: /mycrudapp/index.php");
    exit;
?>
