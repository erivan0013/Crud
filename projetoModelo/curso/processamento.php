<?php 

include_once 'Curso.php';

$curso = new Curso();

switch($_GET['acao']){
	case 'salvar':
		
		if(empty($_POST['id_curso'])){
			$resultado = $curso->inserir($_POST);
		} else {
			$resultado = $curso->alterar($_POST);
		}
		
		break;
	case 'excluir':
		$resultado = $curso->excluir($_GET['id_curso']);
		break;
}

if($resultado){
	$mensagem = 'Sucesso';
} else {
	$mensagem = 'Ocorreu um erro!';
}

?>

<script>
	alert('<?php echo $mensagem; ?>');
	window.location.href = 'index.php';
</script>
