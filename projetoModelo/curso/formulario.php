<?php 
	include_once 'Curso.php';
	
	$curso = new Curso();
	
	if(!empty($_GET['id_curso'])){
		$curso->carregarPorId($_GET['id_curso']);
	}
?>

<?php  include_once '../cabecalho.php'; ?>
	
	<div class="panel panel-primary">
    	<div class="panel-heading">
    		Cursos
    	</div>
    	<div class="panel-body">
	    	<form action="processamento.php?acao=salvar" method="post" name="formulario" class="form-horizontal">
				<input type="hidden" name="id_curso" id="id_curso" value="<?php echo $curso->getIdCurso(); ?>" />
	    	
				<div class="form-group">
                	<label for="nome" class="col-sm-2 control-label">Nome: </label>
                    <div class="col-sm-10">
                    	<input type="text" class="form-control" name="nome" id="nome" value="<?php echo $curso->getNome(); ?>" />
                    </div>
				</div>
				  
					  
					  	    
					
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    	<a href="index.php" class="btn btn-danger">Voltar</a>
                	</div>
				</div>				
				
	    	</form>
    	</div>
   	</div>
<?php include_once '../rodape.php'; ?>