<?php
    include('db.php');

    if(isset($_Get['id'])){
      $id= $_Get['id'];
      $query = "DELETE FROM producto WHERE id = $id";
      $result = mysqli_query($conn, $query);

      $_SESSION['message'] = 'Los datos se eliminaron satisfactoriamnete.';
      header('Location: index.php');
    }

?>
