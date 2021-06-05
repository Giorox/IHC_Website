<?php include "templates/include/header.php" ?>
<section id="subintro">
    
	  <div class="site-blocks-cover" style="background-image: url(images/editnews_bk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10" data-aos="fade">
              <h1><strong><?php echo $results['pageTitle']?></strong></h1>
            </div>
          </div>
        </div>
      </div> 
<br>
<section id="maincontent">
	<div class="container">
		<div class="row">  
			<div class="col-8">
				<div class="blog-post">
					<form action="admin.php?action=<?php echo $results3['formAction']?>" method="post" enctype="multipart/form-data" class="comment-form">
					<input type="hidden" name="newsID" value="<?php echo $results3['news']->newsID ?>"/>
						<form>
							<div class="form-group">
								<h5><strong><label for="titulo">Título</label></strong></h5>
								<input type="text" class="form-control" name="title" id="title" placeholder="Título da notícia" autofocus maxlength="255" value="<?php echo htmlspecialchars( $results3['news']->title )?>"/>
							</div>
							<div class="form-group">
								<h5><strong><label for="subtitulo">Subtítulo</label></strong></h5>
								<input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Subtítulo da notícia" autofocus maxlength="255" value="<?php echo htmlspecialchars( $results3['news']->subtitle )?>"/>
							</div>
							<div class="form-group">
								<h5><strong><label for="conteudo">Conteúdo</label></strong><h5>
								<input type="text" class="form-control" name="content" id="content" placeholder="Conteúdo da notícia" autofocus maxlength="1000" value="<?php echo htmlspecialchars( $results3['news']->content )?>"/>
								
							</div>
		
							<?php if ( $results3['news'] && $imagePath = $results3['news']->getImagePath() ) { ?>
								<div>
									<h5><strong><label>Imagem Atual</label></strong></h5>
									<img id="articleImage" src="<?php echo $imagePath ?>" alt="Article Image" />
								</div>
						
								<div>
									<label></label>
									<h5><input type="checkbox" name="deleteImage" id="deleteImage" value="yes"/ > <strong><label for="deleteImage">Excluir imagem</label></strong></h5>
								</div>
							<?php } ?>
						
							<div>
								<h5><strong><label for="image">Nova Imagem</label></strong>
								<input type="file" name="image" id="image" placeholder="Escolha uma imagem" maxlength="255" /></h5>
							</div>
							<br>
							<br>
							<div class="form-group">
								<input class="btn btn-primary" type="submit" name="saveChanges" value="Salvar alterações" />
								<input class="btn btn-primary" type="submit" formnovalidate name="cancel" value="Cancelar" />
								<?php if ( $results3['news']->newsID ) { ?>
									<a href="admin.php?action=deleteNews&amp;newsID=<?php echo $results3['news']->newsID ?>" onclick="return confirm('Tem certeza que deseja excluir esta notícia?')"><button class="btn btn-danger mx-2" type="button">Excluir esta Notícia</button></a>
								<?php } ?>
							</div>
						</form>
						
						<br/>
					</form>
				</div>
			</div>
			<br>
          <div class="col-4">
		  <aside>
            <div class="widget">
              <h5>Você esta logado como <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>.</h5>
				<a href="admin.php?action=newArticle" class="btn btn-primary" style="margin-bottom: 1.5em">Publicar Novo Artigo</a>
				<a href="admin.php?action=newNews" class="btn btn-primary" style="margin-bottom: 1.5em">Publicar Nova Notícia</a>
				<a href="admin.php?action=newEvent" class="btn btn-primary" style="margin-bottom: 1.5em">Programar Novo Evento</a>
				<a href="#" class="btn btn-primary" style="margin-bottom: 1.5em">Publicar Novo Ponto Cantado</a>
				<p></p>
				<a href="admin.php?action=logout" class="btn btn-primary" style="margin-bottom: 1.5em">Sair</a>
            </div>
			</aside>
          </div>
        </div>
      </div>
    </section>	

<?php include "templates/include/footer.php" ?>