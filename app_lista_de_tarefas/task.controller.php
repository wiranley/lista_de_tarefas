<?php
    require '../../../app_lista_de_tarefas/task.model.php';
    require '../../../app_lista_de_tarefas/task.service.php';
    require '../../../app_lista_de_tarefas/conecta.php';

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->inserir();

	echo '<pre>';
	print_r($tarefaService);
	echo '</pre>';
?>
