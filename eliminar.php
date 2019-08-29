<?php

include_once 'conexion.php';

$id=$_GET['id'];

$sql_eliminar= 'DELETE FROM colores WHERE id=?';
$sentecia_eliminar= $pdo->prepare($sql_eliminar);
$sentecia_eliminar->execute(array($id));

header ('location:index.php');