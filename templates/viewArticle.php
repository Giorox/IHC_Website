<?php include "templates/include/header.php";?>
<!-- Subhead
================================================== -->
      
  <section id="subintro">
    <div class="site-blocks-cover" style="background-image: url(images/artigos_bk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7" data-aos="fade">
              <h1><small><strong>Artigos</strong></small></h1>
            </div>
          </div>
        </div>
      </div> 
<br>
</section>
  
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <!-- start article full post -->
          <article class="blog-post">
            <div class="post-heading">
			<div class="text">
					<div class="section-heading text-left">
						<h2 class="h2 mb-5"><?php echo $results['article']->title?></h2>
					</div>
					</div>
              
				<div class="post-meta first"><i class="icon-calendar"></i><span> <?php echo utf8_encode(strftime('%d de %B de %G', $results['article']->publicationDate))?></span></li>
				</div>
			</div>
            <div class="clearfix">
            </div>
			<br>
			<div class="text-center">
			<?php if ( $imagePath = $results['article']->getImagePath( IMG_TYPE_FULLSIZE ) ) { ?>
				<img class="img-fluid rounded" src="<?php echo $imagePath?>" alt="" />
			<?php }else { ?>
				<img class="rounded float-left" src="http://placehold.it/200x100" alt="">
			<?php } ?>
			</div>
            <br>
            <p><div class="text-justify"><?php echo $results['article']->summary ?></div></p>
            <p><div class="text-justify"><?php echo $results['article']->content ?></div></p>
			
			<div>&nbsp;
				<hr />
				<small><div class="well well-small">Tags: <?php echo $results['article']->tagString?></div></small>
			</div>
			<br>
			<a href="./" class="btn btn-primary">&larr; Retornar à pagina inicial</a>
		  </article>
		  <br>
          <!-- end article full post -->
        </div>
        <div class="col-sm-3">
          <aside>
            <div class="widget">
              <h4>Postagens recentes</h4>
              <ul class="recent-posts">
                <?php foreach ( $recentpost['results'] as $recent ) { ?>
					<li><strong><a href=".?action=viewArticle&amp;articleId=<?php echo $recent->id?>"><?php echo $recent->title?></a></strong>
						<div class="clear"></div>
						<span class="date"><i class="icon-calendar"></i> <?php echo utf8_encode(strftime('%d de %B, %G', $recent->publicationDate))?></span>
					</li>
				<?php } ?>
              </ul>
            </div>
           </aside>
        </div>
      </div>
	  
    </div>

		<!--</form><a href="index.php">Voltar</a>-->
			
<?php include "templates/include/footer.php" ?>