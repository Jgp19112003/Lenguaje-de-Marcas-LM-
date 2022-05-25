<?php
    include 'datos_conexion.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="DELETE FROM productos WHERE id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:php_base_datos.php');
        }
    }
?>