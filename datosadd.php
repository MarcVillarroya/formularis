<?php

//conexion con la base de datos MySQL (servidor)
$db = mysqli_connect('localhost', 'root') or 
    die ('No se pudo conectar. revisa tus parametros.');
    
//asegurarse de que la base de datos Discos sea la activa
mysqli_select_db($db,'carsite') or die(mysqli_error($db));


$date=$_POST['date'];

$comment=$_POST['comment'];
$rating=$_POST['rating'];
/*echo $reviewer;
echo $date;
echo $comment;
echo $rating;*/
$html = <<<ENDHTML
<form action="procesamiento.php" method="post">
   <table>
   <tr>
    </tr>
    <tr>
ENDHTML;
 
 
     
     $html.= '<td><input type="hidden" name="date" value ="'.$date.'" /></td>';
     $html.= '<td><input type="hidden" name="comment" value ="'.$comment.'" /></td>';
     $html.= '<td><input type="hidden" name="rating" value ="'.$rating.'" /></td>';
     
   
  $html.= <<<ENDHTML
  
    </tr>
    <tr>
        <td>Inroduce tu dinocoche</td>
        <td><input type="text" name="coche" /></td>
    </tr>
    <tr>
    <tr>
     <td>
     <select name="selector">
ENDHTML;

       $html.= ' <option value="'.reviewer.'">'.reviewer.'</option>';
         $html.= ' <option value="'.date.'">'.date.'</option>';
          $html.= ' <option value="'.comment.'">'.comment.'</option>';
           $html.= ' <option value="'.rating.'">'.rating.'</option>';
$html.= <<<ENDHTML
      </select>
      </td>
    </tr>
    <tr>
     <td colspan="2" style="text-align: center;">
      <input type="submit" name="submit" value="Add" />
     </td>
    </tr>
   </table>
  </form>
ENDHTML;
echo $html;

       
$query=<<<insert
    INSERT INTO rating
    (date, reviewer, comment, rating)
    VALUES 
    ("$date", "$reviewer", "$comment", "$rating");

insert;



mysqli_query($db, $query) or die(mysqli_error($db));

$HTML=<<<cabecera
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>datos introducidos</title>
        <style>
        </style>
    </head>
    <body>
        <h1>Tu comentario de ha añadido correctamente</h1>
    </body>
</html>
cabecera;

echo "hola";

echo $HTML;

?>
