<?php
$a = 1;
$b = 4 ;
if ($a < $b){
    echo"a es menor que b";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='estilo.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action='<?php echo $_SERVER['php_SELF'];?>' method='post'>
        <input type='text' name='numa' id='numa' autofocus placeholder='ingrese numa'>
        &nbsp;
        <input type='text' name='numb' id='numb' placeholder='ingrese numb'>
        <input type='submit' name='send' id='send'>
</body>
</html>
