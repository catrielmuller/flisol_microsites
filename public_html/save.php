<?php

include 'config.php';

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_db);

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
}

if(empty($_POST)){
	die();
}

if(!empty($_POST['name'])){
	$name = mysqli_real_escape_string($con, $_POST['name']);
}
else {
	$name = '';
}

if(!empty($_POST['email'])){
	$email = mysqli_real_escape_string($con, $_POST['email']);
}
else {
	$email = '';
}

if(!empty($_POST['tel'])){
	$tel = mysqli_real_escape_string($con, $_POST['tel']);
}
else {
	$tel = '';
}

if(!empty($_POST['instala'])){
	$instala = mysqli_real_escape_string($con, $_POST['instala']);
}
else {
	$instala = 0;
}

if(!empty($_POST['turno'])){
	$turno = mysqli_real_escape_string($con, $_POST['turno']);
}
else {
	$turno = 'm';
}

if(!empty($_POST['pc'])){
	$pc = mysqli_real_escape_string($con, $_POST['pc']);
}
else {
	$pc = '';
}

if(!empty($_POST['huayra'])){
	$huayra = 1;
}
else {
	$huayra = 0;
}

if(!empty($_POST['perfil'])){
	$perfil = mysqli_real_escape_string($con, $_POST['perfil']);
}
else {
	$perfil = 0;
}

if(!empty($_POST['cd'])){
	$cd = mysqli_real_escape_string($con, $_POST['cd']);
}
else {
	$cd = 0;
}

if(!empty($_POST['inst'])){
	$inst = mysqli_real_escape_string($con, $_POST['inst']);
}
else {
	$inst = '';
}

if(!empty($_POST['loc'])){
	$loc = mysqli_real_escape_string($con, $_POST['loc']);
}
else {
	$loc = '';
}

if(!empty($_POST['notebook'])){
	$notebook = mysqli_real_escape_string($con, $_POST['notebook']);
}
else {
	$notebook = '';
}

if(!empty($_POST['page'])){
	$page = mysqli_real_escape_string($con, $_POST['page']);
}
else {
	$page = 'default';
}

if(!empty($_POST['tipopc'])){
	$tipopc = mysqli_real_escape_string($con, $_POST['tipopc']);
}
else {
	$tipopc = 'pc';
}

if(!empty($_POST['dvdlibre'])){
	$dvdlibre = mysqli_real_escape_string($con, $_POST['dvdlibre']);
} else {
	$dvdlibre = 0;
}
if(!empty($_POST['dvdeducacion'])){
	$dvdeducacion = mysqli_real_escape_string($con, $_POST['dvdeducacion']);
} else {
	$dvdeducacion = 0;
}
if(!empty($_POST['dvdjuegos'])){
	$dvdjuegos = mysqli_real_escape_string($con, $_POST['dvdjuegos']);
} else {
	$dvdjuegos = 0;
}
if(!empty($_POST['dvdjuegos2'])){
	$dvdjuegos2 = mysqli_real_escape_string($con, $_POST['dvdjuegos2']);
} else {
	$dvdjuegos2 = 0;
}
if(!empty($_POST['dvdjuegos3'])){
	$dvdjuegos3 = mysqli_real_escape_string($con, $_POST['dvdjuegos3']);
} else {
	$dvdjuegos3 = 0;
}
if(!empty($_POST['dvdofimatica'])){
	$dvdofimatica = mysqli_real_escape_string($con, $_POST['dvdofimatica']);
} else {
	$dvdofimatica = 0;
}
if(!empty($_POST['dvddev'])){
	$dvddev = mysqli_real_escape_string($con, $_POST['dvddev']);
} else {
	$dvddev = 0;
}
if(!empty($_POST['dvdfuentes'])){
	$dvdfuentes = mysqli_real_escape_string($con, $_POST['dvdfuentes']);
} else {
	$dvdfuentes = 0;
}


$q = 'INSERT INTO attendees (name, email, tel, instala, turno, pc, huayra, perfil, inst, loc, notebook, page, tipopc, cd, dvdlibre, dvdeducacion, dvdjuegos, dvdjuegos2, dvdjuegos3, dvdofimatica, dvddev, dvdfuentes) 
VALUES ("'.$name.'","'.$email.'","'.$tel.'",'.$instala.',"'.$turno.'","'.$pc.'",'.$huayra.','.$perfil.',"'.$inst.'","'.$loc.'","'.$notebook.'","'.$page.'","'.$tipopc.'",'.$cd.',' . $dvdlibre . ',' . $dvdeducacion . ',' . $dvdjuegos . ',' . $dvdjuegos2 . ',' . $dvdjuegos3 . ',' . $dvdofimatica . ',' . $dvddev . ',' . $dvdfuentes . ')';
mysqli_query($con, $q);
echo "true";
?>