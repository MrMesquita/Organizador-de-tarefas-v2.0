<?php
	if(isset($_POST['id_tarefa'])){
	include('Mysql.php');
	$sql = $pdo->prepare("DELETE FROM `tarefas` WHERE id = ?");
	$sql->execute(array($_POST['id_tarefa']));
	}
?>