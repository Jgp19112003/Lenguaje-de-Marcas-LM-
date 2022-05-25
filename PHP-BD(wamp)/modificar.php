<?php
    include 'datos_conexion.php';
    $id=$_GET['updateid'];
    $sql="SELECT * FROM productos WHERE id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $Supermercado=$row['Supermercado'];
    $Producto =$row['Producto'];
    $Precio =$row['Precio'];

    if(isset($_POST['enviar'])){
        $Supermercado = $_POST['Supermercado'];
        $Producto = $_POST['Producto'];
        $Precio = $_POST['Precio'];

        $sql = "UPDATE productos SET id='$id', Supermercado='$Supermercado', Producto='$Producto', Precio='$Precio' WHERE id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:php_base_datos.php');
        }
    }
?>

<!doctype html>
<html lang="es">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>

    <div class="container mt-5">
        <div class="row">


            <div class="col-md-3 mx-auto">
                <h2>Modificar Producto</h2>
                <hr/>
                <form action="" method="POST">
                    <label for="Supermercado" class="form-label">Supermercado</label>
                    <input type="text" name="Supermercado" id="Supermercado" placeholder="Nombre" class="form-control mb-3" value=<?php echo $Supermercado ?>>
                    <label for="Producto" class="form-label">Producto</label>
                    <input type="text" name="Producto" id="Producto" placeholder="Nombre" class="form-control mb-3" value=<?php echo $Producto ?>>
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" name="Precio" id="Precio" placeholder="Precio" class="form-control mb-3" value=<?php echo $Precio ?>>
                    <input type="submit" name="enviar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>