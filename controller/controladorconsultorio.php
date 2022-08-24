<?php
require_once "../config/conexionpoo.php";
require_once "../model/consultorio.php";
require_once "../view/Fconsultorio.php";

if(isset($_POST['registroconsul'])){
	$idconsultorio=$_POST['txtnumconsul'];
	$nomconsultorio=$_POST['txtnomconsul'];

	$consul=new Consultorio();
	$reg=$consul->registroconsultorio($idconsultorio,$nomconsultorio);

	if($reg){
		print "<script>alert(\"consultorio registrado\");
				window.location='../view/Fconsultorio.php';</script>";
	}else{
		print "<script>alert(\"No se puede registrar consultorio\");
				window.location='../view/Fconsultorio.php';</script>";

	}
}
?>