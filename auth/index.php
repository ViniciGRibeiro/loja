<?php
include('../db/index.php');

if(	isset($_POST['email']) && 
	isset($_POST['senha'])){

	$email = 	str_replace('"','',
				str_replace("'",'',
				str_replace(';','',
				str_replace("\\",'',
				$_POST['email']))));
	$senha =	str_replace('"','',
				str_replace("'",'',
				str_replace(';','',
				str_replace("\\",'',
				$_POST['senha']))));
	
	$query = odbc_exec($db, 
					"SELECT idUsuario, tipoPerfil 
					FROM Usuario
					WHERE 
					loginUsuario = '$email'
					AND
					senhaUsuario = 
					HASHBYTES('SHA1','$senha')");
	$result = odbc_fetch_array($query);
	
	if(	!empty($result['idUsuario']) &&
		!empty($result['tipoPerfil'])){
		
		echo 'ENTROU';
			
	}else{
		$erro = 'Email ou Senha Incorretos';
	}
}

include('index.tpl.php');
?>