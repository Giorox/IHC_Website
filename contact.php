<?php include "templates/include/header.php"; ?>

      <div class="site-blocks-cover" style="object-fit: cover; background-image: url(images/contatos_bk.jpg); height: 300%" data-aos="fade" data-stellar-background-ratio="1">
        <div class="container">
          <div class="row align-items-center justify-content">
            <div class="col-md-7" data-aos="fade">
              <h1><strong>Contate-nos</strong></h1>
            </div>
          </div>
        </div>
      </div> 
  
    
  <div class="site-section bg-light">
      <div class="container">
		<div class="row pb-4">
			<div class="col-md-8 bg-white p-5">
				<div class="text">
					<div class="section-heading text-left">
						<h2 class="h2 mb-5">Conheça Nossas Redes Sociais</h2>
					</div>
				</div>
				<p><a target="_blank" href="https://www.facebook.com/TUCTVC">- Facebook da Tenda de Umbanda Caboclo Tupinambá e Vó Catarina</a></p>
				<p></p>
				<p><a target="_blank" href="https://twitter.com/TUCTVC">- Twitter da Tenda de Umbanda Caboclo Tupinambá e Vó Catarina</a></p>
				<p></p>
				<p><a target="_blank" href="https://www.instagram.com/tuctvc">- Instagram da Tenda de Umbanda Caboclo Tupinambá e Vó Catarina</a></p>
			</div>
			<div class="col-md-4">
					<div class="p-4 bg-white">
					
					  <h3 class="h5 text-black mb-3">Informações de Contato</h3>
					  <p class="mb-0 font-weight-bold">Endereço</p>
					  <p class="mb-4">- São José dos Campos/SP, Brasil</p>

					  <p class="mb-0 font-weight-bold">Telefone</p>
					  <p class="mb-4"><a href="#">+55 12 9XXX-XXXX</a></p>

					  <p class="mb-0 font-weight-bold">Site</p>
					  <p class="mb-0"><a href="www.tuctvc.com">www.tuctvc.com</a></p>
					  
					  <p class="mb-0 font-weight-bold">Email</p>
					  <p class="mb-0"><a href="mailto:contato@tuctvc.com">contato@tuctvc.com</a></p>

					</div>
			</div>
		</div>
		<div class="row pb-4">
			<div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.1478466874414!2d-45.89654428502895!3d-23.201281984862884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4a6e1fa2b953%3A0xa7902184c473f398!2sR.%20Esperan%C3%A7a%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP!5e0!3m2!1sen!2sbr!4v1584925816949!5m2!1sen!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" tabindex="0"></iframe>
			</div>
			<div class="col-md-4">
					<div class="p-4 bg-white">
					  <h3 class="h5 text-black mb-3">Mais Informações</h3>
					  <p style="text-align:justify">Somos uma casa de ora&ccedil;&atilde;o e caridade. Somos Crist&atilde;os, acreditamos na reencarna&ccedil;&atilde;o e em um Deus único. Acreditamos tamb&eacute;m no aux&iacute;lio do encarnado e do desencarnado. N&atilde;o cultuamos o mau e nem fazemos trabalho que prejudiquem as pessoas, pois acreditamos na lei do retorno.</p>
					</div>
				</div>
		</div>
		<div class="row pb-4">
			<div class="col-md-12">
				<div class="p-5 bg-white">
					<div class="text">
						<div class="section-heading text-left">
							<h2 class="h2 mb-5">Formulário de Contato</h2>
						</div>
					</div>
					<div id="messageCard" class="alert alert-dismissible fade hide" role="alert">
						<div id="messageText"></div>
						<button type="button" class="close" id="closeButton" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form id="contactForm" action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
						<div class="form-group row">
							<label for="name" class="col-4 col-form-label">Nome</label> 
							<div class="col-8">
								<input id="name" name="name" placeholder="Seu nome" type="text" required class="form-control">
								<div class="invalid-feedback">
									Favor preencher seu nome.
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Email</label> 
							<div class="col-8">
								<input id="email" name="email" placeholder="Seu email" type="email" required class="form-control">
								<div class="invalid-feedback">
									Favor preencher seu email para que possamos lhe contatar.
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="subject" class="col-4 col-form-label">Assunto</label> 
							<div class="col-8">
								<input id="subject" name="subject" placeholder="Assunto da mensagem" type="text" required class="form-control">
								<div class="invalid-feedback">
									Favor escolher um assunto para a mensagem.
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="message" class="col-4 col-form-label">Message</label> 
							<div class="col-8">
								<textarea id="message" name="message" placeholder="Conteúdo da mensagem" cols="40" rows="5" class="form-control" required></textarea>
								<div class="invalid-feedback">
									Favor escrever sua mensagem.
								</div>
							</div>
						</div> 
						<div class="form-group row">
							<div class="offset-4 col-8">
								<button name="sendContactMessage" type="submit" class="btn btn-primary">Enviar</button>
							</div>
						</div>
					</form>

				</div>
			</div>	
		</div>
		
        </div>
      
	</div>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
		'use strict'
		
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')
		
		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function (form) {
			form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
					event.preventDefault()
					event.stopPropagation()
				}
				else {
					event.preventDefault();
					var name = $("#name").val();
					var email = $("#email").val();
					var subject = $("#subject").val();
					var message = $("#message").val();
					return $.ajax({
						url:"registerUserContact.php", //the page containing php script
						type: "post", //request type,
						data: {
							name: name,
							email: email,
							subject: subject,
							message: message
						},
						success:function(result)
						{
							document.getElementById('messageCard').classList.remove('hide');
							document.getElementById('messageCard').classList.add('show');
							document.getElementById('messageCard').classList.add('alert-success');
							$("#messageText").html("<strong>Obrigado!</strong> Nossa equipe entrará em contato com você assim que possível.");
						},
						error: function(result)
						{
							document.getElementById('messageCard').classList.remove('hide');
							document.getElementById('messageCard').classList.add('show');
							document.getElementById('messageCard').classList.add('alert-danger');
							$("#messageText").html("<strong>Ahhhh! :(</strong> Infelizmente, não foi possível registrar sua mensagem, tente novamente mais tarde.");
						}
					});
				}
		
				form.classList.add('was-validated')
			}, false)
			})
		})();
		
		function validateForm()
		{
			var forms = document.getElementsByClassName('needs-validation')
			var validation = Array.prototype.filter.call(forms, function(form) 
			{
				if (!form.checkValidity())
				{
					event.preventDefault()
					event.stopPropagation()

					// get the "first" invalid field
					var errorElements = document.querySelectorAll('.form-control:invalid')
				}
				form.classList.add('was-validated')
			})
		}
		
		$(document).ready(function () {
			$("#closeButton").on('click', function () {
				document.getElementById('messageCard').classList.add('hide');
				document.getElementById('messageCard').classList.remove('show');
				$("#messageText").html("");
				document.getElementById('messageCard').classList.remove('alert-danger');
				document.getElementById('messageCard').classList.remove('alert-success');
			});
			
			const inputs = document.querySelectorAll("#contactForm input");

			inputs.forEach(e => e.addEventListener("blur", validateForm));
		});
	</script>

    
    
 <?php include "templates/include/footer.php" ?>