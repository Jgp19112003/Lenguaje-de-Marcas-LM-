<?php
    include 'datos_conexion.php';

    if(isset($_POST['enviar'])){
        $Supermercado = $_POST['Supermercado'];
        $Producto = $_POST['Producto'];
        $Precio = $_POST['Precio'];

        $sql = "INSERT INTO productos (Supermercado,Producto,Precio) values('$Supermercado','$Producto','$Precio')";
        $result=mysqli_query($con,$sql);
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

            

            <div class="col-md-3">
                <h2>Agregar Producto</h2>
                <hr/>
                <form action="" method="POST" autocomplete="off">
                    <label for="Supermercado" class="form-label">Supermercado</label>
                    <input type="text" name="Supermercado" id="Supermercado" placeholder="Nombre" class="form-control mb-3">
                    <label for="Producto" class="form-label">Producto</label>
                    <input type="text" name="Producto" id="Producto" placeholder="Nombre" class="form-control mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" name="Precio" id="Precio" placeholder="Precio" class="form-control mb-3">
                    <input type="submit" name="enviar" class="btn btn-primary">
                </form>
            </div>

            

            <div class="col-md-8">
                <h2>Productos</h2>
                <hr/>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Supermercado</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        

                        <?php
                            $sql="SELECT * FROM productos";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $id=$row['id'];
                                    $Supermercado=$row['Supermercado'];
                                    $Producto=$row['Producto'];
                                    $Precio=$row['Precio'];

                                    echo ' 
                                        <tr>
                                            <th scope="row">'.$id.'</th>
                                            <td>'.$Supermercado.'</td>
                                            <td>'.$Producto.'</td>
                                            <td>'.$Precio.'</td>
                                            <td>
                                                <button class="btn btn-info"><a href="modificar.php?updateid='.$id.'" class="text-light" style="text-decoration: none">Modifcar</a></button>
                                                <button class="btn btn-danger"><a href="borrar.php?deleteid='.$id.'" class="text-light" style="text-decoration: none">Eliminar</a></button>
                                            </td>
                                        </tr>
                                    ';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>