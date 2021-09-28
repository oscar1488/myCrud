<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MI APP Crud</title>
    <!-- boostrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar nabar-dark bg-dark">
        <div class="container">
            <a href="index.php class="navbar-brand">My Crud</a>
            <h5 style="color: white;">por Andres Tovar</h5>


        </div>

    </nav>
    <main class="container p-4">
        <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <?= $_SESSION['message'] ?>
             </div>
             <!--mensaje de alterta en bootstrap -->

             <?php session_unset();
            } ?>
             <!--cierra el mensaje de alerta al refrescar la página-->
               
             <div class="card card-body">
             <form action="save.php" method="POST">
             <div class="form-group">
             <p>
                         <input type="text name="nombre" class="forms-control" placeholder="Nombre" autofocus>
                     </p>
                     <p>
                        <input type="text name="categoria" class="forms-control" placeholder="categoria del producto" autofocus>
                    </p>
                    <p>
                        <input type="text name="costoProduccion" class="forms-control" placeholder="costo de produccion del producto" autofocus>
                    </p>
                    <p>
                        <input type="text name="precioVenta" class="forms-control" placeholder="precio de venta del producto" autofocus>
                    </p>
                     


             </div>
             <div class="form-group">
                 <textarea name="descripcion" rows="3" class="form-control placeholder=Descripcion del producto"></textarea>


             </div>

              <input type="submit" class="btn btn-succes btn block" name='save' value="Enviar">







             </form>
             </div>

             </div>

            <div class="col-md-8">
                <table class="table table-border">
            <thead>
            <tr>
               <th>Nombre</th>
               <th>categoria</th>
               <th>costo</th>
               <th>venta</th>
               <th>Descripcion</th>
               <th>Acción</th>


            </tr>




            </thead>

            </div>

        </div>
</body>
        <?php
        $query = "SELECT * FROM producto";
        $result_usuario = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result_usuario)) {?>
         <!--recorro mi tabla usuario-->

         <tr>
             <td>
              <?php echo $row['nombre']; ?>
            
             </td>
             <td>
              <?php echo $row['categoria']; ?>
            
             </td>
             <td>
              <?php echo $row['costoProduccion']; ?>
            
             </td>
             <td>
              <?php echo $row['precioVenta']; ?>
            
             </td>
             <td>
              <?php echo $row['descripcion']; ?>
            
             </td> 
             <td><a href="edit.php?id=<?php echo $row['id']?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']?>">Eliminar</a>

             </td>

            
          
            </tr>

            <?php } ?>
        </tbody>
        </table>
        </div>
        </div>
        </main>
        
        <!-- scripts -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rLQihCFPSNPkwLNBTbVZHUAnYc5iRYaWz9em+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        
        
        
        
        
        
        }


     
</html>