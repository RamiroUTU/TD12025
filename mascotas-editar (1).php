<?php
if_(!&GET){
header(location:index,php);
exit("no hay datos");
}

$masid=$_GET[" masid "]; //2
if(!is_numeric($masid) and $masid<0){
header("location:index.php")
exit("datos incorrectos");
}