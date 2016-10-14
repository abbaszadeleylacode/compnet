 <!DOCTYPE html>
 <html>
 <head>
 	<title>mesajınız</title>
 	<meta charset="utf-8">
 </head>
 <body>

 <?php 
$name = $_POST['name'];
$request = $_POST['request'];

$to = "office@compinter.net";
$subject = "Səhifədən gələn";
$body = "Mövzu: $request";

mail($to, $subject, $body );
echo "Mesajınız müvəffəqiyyətlə göndərildi <a href='mail.php'>Geri qayıt</a>  ";

?>
 </body>
 </html>


 


            