<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');
if(isset($erro)){
	echo "<center><font color='red'>
			$erro
			</font></center>";
}
if(isset($msg)){
	echo "<center><font color='green'>
			$msg
			</font></center>";
}
?>
<table width="100%" border="1">
	<tr>
		<td bgcolor="gray">ID Usu&aacute;rio</td>
		<td bgcolor="gray">Login</td>
		<td bgcolor="gray">Nome</td>
		<td bgcolor="gray">Perfil</td>
		<td bgcolor="gray">Ativo</td>
		<td colspan="2" align="center">
			<a href="?acao=incluir">
			<font color="green">
			+ Novo Usu&aacute;rio
			</font>
			</a>
		</td>
	</tr>
	<?php
	foreach($usuarios as $usuario){
		echo "	<tr>
					<td>{$usuario['idUsuario']}</td>
					<td>{$usuario['loginUsuario']}</td>
					<td>{$usuario['nomeUsuario']}</td>
					<td>{$usuario['tipoPerfil']}</td>
					<td>{$usuario['usuarioAtivo']}</td>
					<td>Editar</td>
					<td>
<a href='?acao=excluir&id={$usuario['idUsuario']}'>
						Excluir
						</a></td>
				</tr>";		
	}
	?>
</table>

<?php
include('../menu/index.footer.tpl.php');
?>