<?php
require_once "../config/conexionpoo.php";

class Consultorio extends Conectar
{
	protected $Numconsul;
	protected $Nombreconsul;
	public function __construct()
	{
		parent::__construct();
	}
	public function registroconsultorio($Numconsul,$Nombreconsul){
		$sql1 = "SELECT * FROM consultorios WHERE ConNumero='$Numconsul'";
		$resultado=$this->_bd->query($sql1);
		$fila=mysqli_fetch_assoc($resultado);
		if($fila>0){
			echo "<script>alert('Consultorio ya esta registrado');
			window.location='../view/Fconsultorio.php';
			</script>";
		}else{
			$sql="INSERT INTO consultorios(ConNumero,ConNombre)VALUES('".$Numconsul."','".$Nombreconsul."')";
			$resultado==$this->_bd->query($sql);
			if(!$resultado){
				print "<script>alert(\"fallo al ingresar los datos.\");
				window.location='../view/Fconsultorio.php';</script>";
				echo "error";
			}else{
				print "<script>alert(\"consultorio registrado.\");
				window.location='../view/Fconsultorio.php';</script>";
				$resultado->close();
				$this->_bd->close();
			}
		}
	}
	public function listarconsultorios(){
		$sql1="SELECT * FROM consultorios ORDER BY ConNumero";
		$resul=$this->_bd->query($sql1);
		if($resul->num_rows>0){
			while ($row = $resul->fetch_assoc()) {
				$resultset[]=$row;
			}
		}
		return $resultset;
	}
	public function eliminarconsultorio(){
		$query="DELETE FROM consultorios WHERE ConNumero='$id'";
		$resul=$this->_bd->query($query);
		if(!$resul){
			print "<script>alert(\"Registro Eliminado\");
			window.location='../view/Fconsultorio.php';<script>";
		}else{
			print "<script>alert(\"No se puede eliminar el registro\");
			window.location='../view/Fconsultorio.php';<script>";
		}
	}
}
?>