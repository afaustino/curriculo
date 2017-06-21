<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $titulo; ?></title>
		<link rel="stylesheet" href="">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4">
					<h2><?php echo $h2; ?></h2>
					
					<div class="form-group">
					<?php 

						$atributos = array('class' => 'form-control');

						if ($msg = get_msg()) {

							echo "<div class='bg-danger'>" . $msg . "</div>";

						}
						
						echo form_open();
						echo form_label('Nome para login', 'login');
						echo form_input('login', set_value("login"), array('autofocus' => 'autofocus', 'class' => 'form-control'));
						echo form_label('Email do aministrador do site', 'email');
						echo form_input('email', set_value("email"), $atributos);
						echo form_label('Senha', 'senha');
						echo form_password('senha', set_value('senha'), $atributos);
						echo form_label('Repita a senha', 'senha2');
						echo form_password('senha2', set_value('senha2'), $atributos);

					?>
					</div>
					<div class="form-group">
						<?php 
							echo form_submit('enviar', 'Salvar dados', array('class' => 'btn btn-primary'));
							echo form_close();
						?>
					</div>
				</div>
				<div class="col-md-4">&nbsp;</div>	
			</div>
		</div>
	</body>
</html>