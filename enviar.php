<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>formulario de contacto - mensaje enviado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/estilos.css'>
    </head>
<body>
        <center>
        <?php 
$myemail = 'ingeniosvirtuales8@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

          <h1>contacto</h1>
           <form method="POST" action="enviar.php">
              <input type="text" name="Nombre" placeholder="NOMBRE">
              <input type="email" name="email" placeholder="CORREO">
              <br>
              <textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
              <br>
              <input type="submit" value="ENVIAR">
           </form>
       </center>
</body>
</html>