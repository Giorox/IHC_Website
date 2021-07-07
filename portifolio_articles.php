<?php 

$NUM_ARTICLES = 6;
$current_page = 1;
  if ( isset( $_GET['pageNumber'] ) ) {
	$current_page = $_GET['pageNumber'];
    $data = Article::getList( ($current_page)*$NUM_ARTICLES, "id DESC" );
  }
	$secondary_info = Article::getList();
	$num_pages = (int)$secondary_info['totalRows']/$NUM_ARTICLES;
	if($secondary_info['totalRows']%$NUM_ARTICLES != 0)
	{
		$num_pages++;
	}
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  
  $recentpost_data = Article::getList( 5, "id DESC" );
  $recentpost['results'] = $recentpost_data['results'];
include "templates/include/header.php";?>
  
      <div class="site-blocks-cover inner-page" style="background-image: url(images/listarticles_bk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content">
            <div class="col-md-7" data-aos="fade">
              <h1><strong>Artigos</strong></h1>
            </div>
          </div>
        </div>
      </div> 
      
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
		
      	  <?php foreach ( $results['articles'] as $article ) { ?>
			<?php if(($article->id <= $results['totalRows']-($NUM_ARTICLES*($current_page-1))) && ($article->id > ($results['totalRows']-($NUM_ARTICLES*($current_page-1)))-$NUM_ARTICLES)){?>
			  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
				<div class="media-with-text">
					<div class="img-border-sm mb-4">
						<a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
								<img src="http://placehold.it/200x200" alt="Article image" class="img-fluid"/>
						</a>
					</div>
					<a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
					<h2 class="heading mb-0" class="title"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo $article->title?></a></h2></a>
					<p><?php echo $article->summary?></p>
				</div>
			  </div>
				<?php } ?>
			<?php } ?>
		
	              
       </div>
      </div>
		<div class="row">
          <div class="col-md-12 text-center">
		  <br>
		  <br>
			<div class="site-block-27">
            <ul>
			  <?php if ($current_page != 1) { ?>
				<li><a href="./?action=portifolio&pageNumber=<?php echo $current_page-1;?>">&lt;</a></li>
			  <?php } ?>
			  
			  <?php for($i = 1; $i <= $num_pages; $i++){?>
				<?php if ( $_GET['pageNumber'] == $i ) { ?>
					<li class="active"><a><?php echo $i ?></a></li>
				<?php }else { ?>
					<li><a href="./?action=portifolio&pageNumber=<?php echo $i;?>"><?php echo $i ?></a></li>
				<?php } ?>
			  <?php } ?>
			  
			  <?php if ($current_page != floor($num_pages)) {?>
				<li><a href="./?action=portifolio&pageNumber=<?php echo $current_page+1;?>">&gt;</a></li>
			  <?php } ?>
            </ul>
          </div>
        </div>	  
	 
    </div>
 </div>
    
    
<?php include "templates/include/footer.php" ?>