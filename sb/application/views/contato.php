<?php
$this->load->view('header');
$this->load->view('menu');
 ?>
<div class="w-section page-header contact">
  <div class="page-header-overlay contact">
    <div class="w-container page-header-container always-centered">
      <h2 class="page-header-title" data-ix="page-title">Entre em contato!</h2>
      <h2 class="page-header-title subtitle" data-ix="page-title-2">E vamos conversar mais sobre seu projeto! Estamos ansiosos pelo seu contato!</h2>
    </div>
    <div class="w-container page-header-content-container">
      <div class="w-form contact-form">
				<?php
					$atributos = array("id" => "wf-form-Contact-Form", "name" => "wf-form-Contact-Form", "data-name" => "Contact Form");
					echo form_open("pagina/obrigado", $atributos);
					if ($formerror) {
						echo "<pre>" . $formerror . "</pre>";
					}

					$data_name = array(
						"class" => "w-input field",
						"id" => "nome",
						"type" => "text",
						"placeholder" => "Entre com o seu nome",
						"name" => "nome",
						"data-name" => "nome",
						"data-ix" => "fade-in-on-load",
						"required" => "required"
					);
					echo form_input($data_name, set_value("nome"));
					$data_email = array(
						"class" => "w-input field",
						"id" => "email",
						"type" => "text",
						"placeholder" => "Entre com o seu endereço de email",
						"name" => "email",
						"data-name" => "email",
						"data-ix" => "fade-in-on-load",
						"required" => "required"
					);
					echo form_input($data_email, set_value("email"));
					$data_telefone = array(
						"class" => "w-input field",
						"id" => "telefone",
						"type" => "text",
						"placeholder" => "Qual o seu telefone?",
						"name" => "telefone",
						"data-name" => "telefone",
						"data-ix" => "fade-in-on-load",
						"required" => "required"
					);
					echo form_input($data_telefone, set_value("telefone"));
					$data_mensagem = array(
						"class" => "w-input field area",
						"id" => "mensagem",
						"type" => "text",
						"placeholder" => "Qual a sua mensagem?",
						"name" => "mensagem",
						"data-name" => "mensagem",
						"data-ix" => "fade-in-on-load",
						"required" => "required"
					);
					echo form_textarea($data_mensagem, set_value("mensagem"));
					$data_submit = array(
						"class" => "w-button button submit-button",
						"type" => "submit",
						"value" => "Enviar",
						"data-wait" => "Por favor aguarde",
						"data-ix" => "fade-in-on-load",
					);
					echo form_submit($data_submit);
					echo form_close();
				?>
        <!-- <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST" action="index.php/Pagina/enviarEmail"> -->
          <!-- <input class="w-input field" id="nome" type="text" placeholder="Entre com o seu nome" name="nome" data-name="nome" data-ix="fade-in-on-load" required="required"> -->
          <!-- <input class="w-input field" id="email" type="email" placeholder="Entre com o seu endereço de e-mail" name="email" data-name="Email" required="required" data-ix="fade-in-on-load-2"> -->
          <!-- <input class="w-input field" id="telefone" type="text" placeholder="Entre com o seu telefone" name="telefone" data-name="telefone" data-ix="fade-in-on-load-3" required="required"> -->
          <!-- <textarea class="w-input field area" id="mensagem" placeholder="Mensagem..." name="mensagem" data-name="mensagem" data-ix="fade-in-on-load-4"></textarea> -->
          <!-- <input class="w-button button submit-button" type="submit" value="Enviar" data-wait="Por favor aguarde..." data-ix="fade-in-on-load-5"> -->
        <!-- </form> -->
        <div class="w-form-done success-bg">
          <p>Seu contato foi enviado com sucesso. Obrigado.</p>
        </div>
        <div class="w-form-fail error-bg">
          <p>Ocorreu um erro ao tentar enviar!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="w-section section" id="contato-footer">
  <div class="w-container container centered">
    <div class="w-row footer-bottom-row">
   <!--  -->
      <div class="w-col w-col-6 intro-column"><img class="intro-icon" src="http://uploads.webflow.com/555af8aa290a9b4224db2cb8/555aff12a16e43b7685e6f33_Icon-contact.png">
        <h2 class="intro-column-title">Suporte</h2>
        <h2 class="intro-column-title subtitle">Entre em contato</h2>
        <p>Telefone: +55 11 3530 4458</p>
        <p></p>
        <a class="link below-paragraph" href="tel:1135304458">Entre em contato</a>
      </div>
      <div class="w-col w-col-6 intro-column last"><img class="intro-icon" src="http://uploads.webflow.com/555af8aa290a9b4224db2cb8/555aff4334a9cb43245c09a3_Icon-questions.png">
        <h2 class="intro-column-title">Outras Questões</h2>
        <h2 class="intro-column-title subtitle">Entre em contato</h2>
        <p>contato@searchdgital.com.br</p>
        <a class="link below-paragraph" href="mailto:contato@searchdigital.com.br">Entre em contato</a>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('footer');
 ?>
