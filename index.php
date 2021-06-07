<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'viewArticle':
    viewArticle();
    break;
  case 'portifolio':
	portifolio_articles();
	break;
  default:
    homepage();
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["articleId"] );
  $results['pageTitle'] = $results['article']->title . " | TUCTVC";
  
  $recentpost_data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $recentpost['results'] = $recentpost_data['results'];
  
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function homepage() {
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "TUCTVC";
  
  $results3 = array();
  $data3 = News::getList( 10 );
  $results3['news'] = $data3['results'];
  $results3['totalRows'] = $data3['totalRows'];

  require( TEMPLATE_PATH . "/homepage.php" );

}

function portifolio_articles() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "TUCTVC";
  
  $results3 = array();
  $data3 = News::getList( 10 );
  $results3['news'] = $data3['results'];
  $results3['totalRows'] = $data3['totalRows'];
  require( "portifolio_articles.php" );
}

?>
