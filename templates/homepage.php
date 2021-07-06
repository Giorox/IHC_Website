<?php include "templates/include/header.php";?>
  
    <div class="slide-one-item home-slider owl-carousel">
      <!-- Default Layer -->
      <div class="site-blocks-cover-homepage" style="background-image: url(images/news/fullsize/cachoeira.jpg);" data-aos="fade" data-stellar-background-ratio="0.9"; data-pause="hover">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-11 text-center" data-aos="fade">
              <h1><small>“A Fé no Pai Maior traz a luz para o caminho daquele que persevera!”.</small></h1>
				 <p>Caboclo Tupinambá</p>
			  
            </div>
          </div>
        </div>
      </div>  
	  <!-- End Default Layer -->
	  <!-- Layer 1 -->
	  <?php foreach ( $results3['news'] as $news ) { ?>
		<div class="site-blocks-cover-homepage" style="background-image: url(<?php echo ($news->getImagePath( IMG_TYPE_FULLSIZE )) ?>);" alt="" data-interval="3000" data-aos="fade" data-stellar-background-ratio="0.9" data-pause="hover">		
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-10 text-center" data-aos="fade">
						<h1><small><?php echo $news->title ?><?php echo $news->subtitle ?></small></h1>
						<p><?php echo $news->content ?></p>
						
					</div>
				</div>
			</div>				
		</div>					
	  <?php } ?>
	  <!-- End Layer 1 -->
    </div>
	<!-- End Carousel News -->
	
	<!-- Ponto Cantado -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Ponto Cantado da Semana</h2>
            <p>Os pontos cantados da Jurema nos remete aos mistérios que envolvem os povos indígenas que cultuavam as árvores da Jurema. Os caboclos são manifestações de um povo forte e destemido.</p>
          </div>
        </div>
      
		<div class="row">
          <div class="col-12 text-center mb-3">
            <h3 class="h5"><span class="text-uppercase">&ldquo;Jurema, Olha pro seu juremá&rdquo;</span> &mdash; <span class="small"><em>Por</em> Ogã Negão</span></h3>
          </div>
          <div class="col-12">
            <div class="player">
                <audio id="player2" preload="none" controls style="max-width: 100%">
                    <source src="pontos/caboclos_jurema.mp3" type="audio/mp3">
                </audio>
            </div>
          </div>
        </div>
     </div>
	</div>
	<!-- End Ponto Cantado -->
	

	<!-- Palavras do Tupinambá -->
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 mb-8 mb-md-0">
            
              <div class="img-border">
                <a>
                  <img src="images/tupinamba1.jpg" alt="" class="img-fluid"/>
                </a>
              </div>
            
          </div>
          <div class="col-md-8 ml-auto">
            <h2 class="h2 mb-3">Palavras do Caboclo Tupinambá</h2>
            <p class="h5 mb-3">Nós somos um Terreiro Escola. Aqui ensinamos, orientamos e auxiliamos no desenvolvimento de cada médium.</p>
            <p class="mb-4 text-justify">A casa tem por objetivo multiplicar a doutrina Umbandista e auxiliar na construção espiritual de novos terreiros. Esse apoio permite a criação 
							de novas casas, que são casas irmãs do nosso terreiro. Hoje, as pessoas que procuram um terreiro vão em busca de auxílio e de respostas para as
							sensações ligadas à mediunidade. O irmão de fé preza pelo conhecimento e entendimento, além das habilidades de incorporação e do trabalho de 
							energização	espiritual.</p>
							<p> Estamos juntos na fé ao Pai, na caridade, no amor, na compreenção e na melhora de cada um. Juntos, numa só direção, somos mais fortes! 
            
          </div>
        </div>
		<!-- End Palavras do Tupinambá -->
		<!-- Palavras da Vó Catarina -->
		<div class="row align-items-center">
          <div class="col-md-8 mb-8 mb-md-0">
            
           <h2 class="h2 mb-3">Palavras da Vó Catarina</h2>
            <p class="h5 mb-3">Fia! A busca pelo conhecimento não é nada sem a busca pelo entendimento, pois um é o complemento do outro.</p>
            <p class="mb-4 text-justify">A busca apenas pelo conhecimento contempla encher as mentes dos incultos de um saber sem experiências.
										A busca pelo entendimento e o aprendizado vem através das ações. Quando você busca entender através das suas ações e trabalhos,
										o aprendizado é maior e mais valoroso. A empatia e a compreensão daquilo que você passa fica marcado mais forte em seu espírito. 
										Busque o conhecimento em livros e nas experiências do outro, mas também busque o entendimento através de suas ações e de seu trabalho.</p>
										<p> Fia! Um completa o ensinamento do outro! Conhecimento e Entendimento. Fé e perseverança no seu trabalho.</p>
              
			  
			  
			  
			  
			  
            
          </div>
          <div class="col-md-4 ml-auto">
            <div class="img-border">
                <a>
                  <img src="images/vo.jpg" alt="" class="img-fluid"/>
                </a>
              </div>
			
          </div>
        </div>
		<!-- End Palavras da Vó Catarina -->
      </div>
    </div>

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Nossa Missão</h2>
            <p>Acolher, Orientar, Desenvolver, Socorrer, Difundir os Valores, Amparar Espiritualmente, Emocionalmente e Materialmente.</p>
            <p><a href="Homepage_MISSAO.php">Leia mais <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Caridade acima de Tudo</h2>
            <p>A caridade não é feita somente da doação de algo material, mas é expressa também pelo tempo que você dedica para auxiliar 
				aquele que mais precisa.</p>
            <p><a href="Homepage_CARIDADE.php">Leia Mais <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-speaker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Escute os Pontos Cantados</h2>
            <p>Os Pontos Cantados são orações ou cantos de louvor aos Orixás e às Entidades das linhas de trabalho (Pretos Velhos, Boiadeiros, 
				Marinheiros, entre outros). O Ponto Cantado é um dos fundamentos mais importantes para a harmonização e eficácia dos trabalhos 
				dentro de uma Tenda Umbandista.</p>
            <p><a href="Homepage_PONTOCANTADO.php">Leia Mais <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-avatar display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Conheça Nossa Doutrina</h2>
            <p>A Umbanda é uma doutrina não conversionista que prega a liberdade de religião, mas sempre focada no auxílio ao próximo, seja 
				ele encarnado ou desencarnado.</p>
            <p><a href="Homepage_DOUTRINA.php">Leia Mais <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    

<!-- Start Articles -->
    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Artigos Recentes</h2>
          </div>
        </div>
        
	<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<?php $numRows = 0;
				  $numCards = 0;
			?>
			<?php foreach ( $results['articles'] as $recent ) { ?>
				<?php if ($numRows == 0 && $numCards%3 == 0) { ?>
					<div class="carousel-item active row">
						<div class="row">
				<?php } elseif ($numCards%3 == 0) { ?>
					<div class="carousel-item row">
						<div class="row">
				<?php } $numRows++; ?>
				<!-- WRITE PHP to put data and to incremet numCards -->
					<div class="col-6 col-md-4">
						<div class="card" style="border: none">
							<a href=".?action=viewArticle&amp;articleId=<?php echo $recent->id?>">
								<div class="card-body">
									<?php if ( $imagePath = $recent->getImagePath( IMG_TYPE_THUMB ) ) { ?>
										<img class="mb-3" src="<?php echo $imagePath?>" alt="Article image" height="200px" width="100%" alt="Article image" class="img-fluid"/>
									<?php }else { ?>
										<img class="mb-3" src="http://placehold.it/200x200" width="100%" alt="Article image" class="img-fluid"/>
									<?php } ?>
									<h5><?php echo $recent->title?></h5>
									<small><i class="icon-calendar"></i> <?php echo strftime('%d/%m/%G', $recent->publicationDate)?></small>
									<div class="card-text">
										<?php echo $recent->summary?>
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php $numCards++; ?>
				<?php if ($numCards%3 == 0) { ?>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
		
		
		
	  </div>
	</div>
</div>
<?php include "templates/include/footer.php"?>