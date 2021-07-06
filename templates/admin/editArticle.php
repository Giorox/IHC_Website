<?php include "templates/include/header.php" ?>
<section id="subintro">
    <div class="site-blocks-cover" style="background-image: url(images/editarticles_bk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10" data-aos="fade">
              <h1><strong><?php echo $results['pageTitle']?></strong></h1>
            </div>
          </div>
        </div>
      </div> 
<br>
</section>
  

<section id="maincontent">
	<div class="container">
		<div class="row">  
			<div class="col-8">
				<div class="blog-post">
					<form action="admin.php?action=<?php echo $results['formAction']?>" method="post" enctype="multipart/form-data" class="comment-form">
					<input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
						<form>
							<div class="form-group">
								<h5><strong><label for="titulo">Título</label></strong></h5>
								<input type="text" class="form-control" name="title" id="title" placeholder="Título do blog" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>"/>
							</div>
							<div class="form-group">
								<h5><strong><label for="sumario">Sumário</label></strong></h5>
								<textarea class="form-control" name="summary" id="summary" placeholder="Breve sumário do blog" required maxlength="1000" rows="3"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
								<script type="text/javascript">
										CKEDITOR.replace( 'summary', { toolbar : 'Basic' , extraPlugins: 'imageuploader'} );
								</script>
							</div>
							<div class="form-group">
								<h5><strong><label for="conteudo">Conteúdo</label></strong></h5>
								<textarea class="form-control" name="content" id="content" placeholder="Conteúdo do blog" required maxlength="100000" rows="6"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
									<script type="text/javascript">
										CKEDITOR.replace( 'content', { toolbar : 'Complete' , extraPlugins: 'imageuploader'} );
									</script>
							</div>
							<div class="form-group">
								<h5><strong><label for="conteudo">Tags</label></strong></h5>
								<textarea class="form-control" name="tagString" id="tagString" placeholder="Tags do blog" required maxlength="255" rows="1"><?php echo htmlspecialchars( $results['article']->tagString )?></textarea>
							</div>
							<br>
							<div class="form-group">
								<input class="btn btn-primary" type="submit" name="saveChanges" value="Salvar alterações" />
								<input class="btn btn-primary" type="submit" formnovalidate name="cancel" value="Cancelar" />
							<?php if ( $results['article']->id ) { ?>
								<a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Tem certeza que deseja excluir este artigo?')"><button class="btn btn-danger mx-2" type="button">Excluir este Artigo</button></a>
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
				<a href="admin.php?action=logout" class="btn btn-primary" style="margin-bottom: 1.5em">Sair</a>
            </div>
			</aside>
          </div>
        </div>
      </div>
    </section>	

<?php include "templates/include/footer.php" ?>