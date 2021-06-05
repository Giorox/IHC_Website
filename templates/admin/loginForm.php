<?php include "templates/include/header.php" ?>

    <div class="site-blocks-cover inner-page" style="background-image: url(images/admin_bk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7" data-aos="fade">
              <h1><strong>Login do Administrador</strong></h1>
            </div>
          </div>
        </div>
      </div> 
  <br> 
  
<section id="maincontent">
	<div class="container">
		<body class="text-center">
			<?php if ( isset( $results['errorMessage'] ) ) { ?>
						<div class="alert alert-danger" role="alert">
							<?php echo $results['errorMessage'] ?>
							
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
			<?php } ?>
			<form class="form-signin" action="admin.php?action=login" method="post">
				<input type="hidden" name="login" value="true" />

				<img class="mb-4" src="images/favicon.jpg" alt="" width="144" height="144">
				
				<label for="username" class="sr-only">Usuário</label>
				<input type="text" id="username" name="username" class="form-control" placeholder="Nome de Usuário" required autofocus>
				<br>
				<label for="password" class="sr-only">Senha</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
				<br>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Send">Sign in</button>
			</form>
		</body>
		
	</div>
</section>
<br>

<?php include "templates/include/footer.php" ?>