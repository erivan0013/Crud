<?php 
	include_once 'Curso.php';
	
	$curso = new Curso();
	$cursos = $curso->recuperarTodos();
?>
<?php  include_once '../cabecalho.php'; ?>
    
    	<div class="panel panel-primary">
	    	<div class="panel-heading">
	    		Cursos
	    	</div>
	    	<div class="panel-body">
	    	
	    		<a href="formulario.php" class="btn btn-warning">Inserir</a>
	    		
				<table class="table table-bordered table-striped table-hover">
					<tr>
						<td>Ações</td>
						<td>Id</td>
						<td>Nome</td>
						
				 	</tr>
				 	<?php foreach($cursos as $dado) { ?>
			<tr>
				<td>
					<a class="btn btn-danger" title="Excluir" href="processamento.php?acao=excluir&id_curso=<?php echo $dado['id_curso']; ?>">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
					
					<a class="btn btn-success" title="Alterar" href="formulario.php?id_curso=<?php echo $dado['id_curso']; ?>">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</td>
				<td><?php echo $dado['id_curso']; ?></td>
				<td><?php echo $dado['nome']; ?></td>
		
		 	</tr>		 
	 	<?php } ?>	
				</table>		    		
	    	</div>
    	</div>
<?php  include_once '../rodape.php'; ?>