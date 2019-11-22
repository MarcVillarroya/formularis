 <?php
 $db = mysqli_connect('localhost', 'root') or 
    die ('No se pudo conectar. revisa tus parametros.');
    
//asegurarse de que la base de datos Discos sea la activa
mysqli_select_db($db,'carsite') or die(mysqli_error($db));




 
   echo  "fecha: ". $_POST['date']."</br>";
   echo "Comentario: " .$_POST['comment']."</br>";
   echo "Rating: " . $_POST['rating']."</br>";
   echo " selector: " . $_POST['selector']."</br>";
   echo "coche: " . $_POST['coche'];


 ?>