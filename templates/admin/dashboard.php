<?php include "templates/include/header.php" ?>

    <div class="site-blocks-cover inner-page" style="background-image: url(images/edicao_bk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1><strong>Dashboard do Administrador</strong></h1>
            </div>
          </div>
        </div>
    </div> 


 <div class="container">
      <div class="container">
        <div class="row">
         <div class="col-9">
		  <article class="blog-post">
            <div class="post-meta">
				<?php if ( isset( $results['errorMessage'] ) ) { ?>		
					<div class="alert alert-danger" role="alert">
						<?php echo $results['errorMessage'] ?>
			
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ?>


				<?php if ( isset( $results['statusMessage'] ) ) { ?>		
					<div class="alert alert-warning" role="alert">
						<?php echo $results['statusMessage'] ?>
							
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ?>
				<br>
				<h4><strong>Mensagens</strong></h4>
				<ul class="list-group"  style="height: 300px;overflow-y: scroll;">
					<?php foreach ( $results2['messages'] as $messages ) { ?>
						<li class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="col-12"><?php echo $messages["subject"]?></h5>
								<small><?php echo $messages["messageid"]?></small>
							</div>
							<p><?php echo $messages["message"]?></p>
							<small class="mb-1"><?php echo $messages["name"]?> - <?php echo $messages["email"]?></small>
						</li>
					<?php } ?>
				</ul>

				<h4><strong>Notícias</strong></h4>
				<ul class="list-group"  style="height: 300px;overflow-y: scroll;">
					<?php foreach ( $results3['news'] as $news ) { ?>
						<li>
						<a style="cursor:pointer" onclick="location='admin.php?action=editNews&amp;newsID=<?php echo $news->newsID?>'" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<?php if($news->title == "") { ?>
									<h5 class="mb-1">Sem título</h5>
								<?php }else { ?>
									<h5 class="col-12"><?php echo $news->title?></h5>
								<?php } ?>
								<small><?php echo $news->newsID?></small>
							</div>	
							<?php if($news->content == "") { ?>
								<small class="mb-1">Sem texto</small>
							<?php }else { ?>
								<small class="mb-1"><?php echo $news->content?></small>
							<?php } ?>
						</a>
						</li>
					<?php } ?>
				</ul>
				
				<h4><strong>Artigos</strong></h4>
				<ul class="list-group" style="height: 300px;overflow-y: scroll;">
					<?php foreach ( $results['articles'] as $article ) { ?>
						<li>
						<a style="cursor:pointer" onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100">
								<h5 class="mb-1"><?php echo $article->title?></h5>
							</div>
						</a>
						</li>
					<?php } ?>
				</ul>
				<br>
            </div>
			</article>
          </div>
			<br>
          <div class="col-3">
		  <aside>
		  <br>
            <div class="widget">
              <h5>Você esta logado como <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>.</h5>
			  <br>
				<a href="admin.php?action=newArticle" class="btn btn-primary">Publicar Novo Artigo</a>
				<p></p>
				<a href="admin.php?action=newNews" class="btn btn-primary">Publicar Nova Notícia</a>
				<p></p>
				<a href="admin.php?action=logout" class="btn btn-primary">Sair</a>
            </div>
            <br>
            <div id="adminHeader" class="widget">
              <h3 class="h5 text-black mb-3">Estatísticas do Site</h3>
			  <p><?php echo $results['totalRows']?> artigo<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> no total.</p>
			  <p><?php echo $results3['totalRows']?> notícia<?php echo ( $results3['totalRows'] != 1 ) ? 's' : '' ?> no total.</p>
            </div>
			</aside>
          </div>
        </div>
      </div>		
</div>
<?php include "templates/include/footer.php" ?>