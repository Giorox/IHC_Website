<?php

require( "config.php" );
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $action != "login" && $action != "logout" && !$username ) {
  login();
  exit;
}

switch ( $action ) {
  case 'login':
    login();
    break;
  case 'logout':
    logout();
    break;
  case 'newArticle':
    newArticle();
    break;
  case 'editArticle':
    editArticle();
    break;
  case 'deleteArticle':
    deleteArticle();
    break;
  case 'newNews':
	newNews();
	break;
  case 'deleteNews':
	deleteNews();
	break;
  case 'editNews':
	editNews();
	break;
  default:
    listArticles();
}


function login() {

  $results = array();
  $results['pageTitle'] = "Admin Login | TUCTVC";

  if ( isset( $_POST['login'] ) ) {

    // User has posted the login form: attempt to log the user in

    if ( $_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD ) {

      // Login successful: Create a session and redirect to the admin homepage
      $_SESSION['username'] = ADMIN_USERNAME;
      header( "Location: admin.php" );

    } else {

      // Login failed: display an error message to the user
      $results['errorMessage'] = "Senha ou usuário incorreto. Tente novamente.";
      require( TEMPLATE_PATH . "/admin/loginForm.php" );
    }

  } else {

    // User has not posted the login form yet: display the form
    require( TEMPLATE_PATH . "/admin/loginForm.php" );
  }

}


function logout() {
  unset( $_SESSION['username'] );
  header( "Location: admin.php" );
}


function newArticle() {

  $results = array();
  $results['pageTitle'] = "Novo Artigo | TUCTVC";
  $results['formAction'] = "newArticle";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the article edit form: save the new article
    $article = new Article;
    $article->storeFormValues( $_POST );
    $article->insert();
	if ( isset( $_FILES['image'] ) ) $article->storeUploadedImage( $_FILES['image'] );
    header( "Location: admin.php?status=changesSaved" );

  } elseif ( isset( $_POST['cancel'] ) ) {

    // User has cancelled their edits: return to the article list
    header( "Location: admin.php" );
  } else {

    // User has not posted the article edit form yet: display the form
    $results['article'] = new Article;
    require( TEMPLATE_PATH . "/admin/editArticle.php" );
  }

}


function editArticle() {

  $results = array();
  $results['pageTitle'] = "Editar Artigo | TUCTVC";
  $results['formAction'] = "editArticle";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the article edit form: save the article changes

    if ( !$article = Article::getById( (int)$_POST['articleId'] ) ) {
      header( "Location: admin.php?error=articleNotFound" );
      return;
    }

    $article->storeFormValues( $_POST );
	if ( isset($_POST['deleteImage']) && $_POST['deleteImage'] == "yes" ) $article->deleteImages();
    $article->update();
	if ( isset( $_FILES['image'] ) ) $article->storeUploadedImage( $_FILES['image'] );
    header( "Location: admin.php?status=changesSaved" );

  } elseif ( isset( $_POST['cancel'] ) ) {

    // User has cancelled their edits: return to the article list
    header( "Location: admin.php" );
  } else {

    // User has not posted the article edit form yet: display the form
    $results['article'] = Article::getById( (int)$_GET['articleId'] );
    require( TEMPLATE_PATH . "/admin/editArticle.php" );
  }

}

function deleteArticle() {

  if ( !$article = Article::getById( (int)$_GET['articleId'] ) ) {
    header( "Location: admin.php?error=articleNotFound" );
    return;
  }

  $article->deleteImages();
  $article->delete();
  $reset_serial_query = "ALTER SEQUENCE articles_id_seq RESTART WITH 1;";
  $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
  
  $st = $conn->prepare ($reset_serial_query);
  $st->execute();
  
  header( "Location: admin.php?status=articleDeleted" );
}

function newNews() {

  $results3 = array();
  $results['pageTitle'] = "Nova Notícia | TUCTVC";
  $results3['formAction'] = "newNews";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the news edit form: save the new news
    $news = new News;
    $news->storeFormValues( $_POST );
    $news->insert();
	if ( isset( $_FILES['image'] ) ) $news->storeUploadedImage( $_FILES['image'] );
    header( "Location: admin.php?status=changesSaved" );

  } elseif ( isset( $_POST['cancel'] ) ) {

    // User has cancelled their edits: return to the news list
    header( "Location: admin.php" );
  } else {

    // User has not posted the news edit form yet: display the form
    $results3['news'] = new News;
    require( TEMPLATE_PATH . "/admin/editNews.php" );
  }

}


function editNews() {

  $results3 = array();
  $results['pageTitle'] = "Editar Notícia | TUCTVC";
  $results3['formAction'] = "editNews";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the news edit form: save the news changes

    if ( !$news = News::getById( (int)$_POST['newsID'] ) ) {
      header( "Location: admin.php?error=newsNotFound" );
      return;
    }

    $news->storeFormValues( $_POST );
	if ( isset($_POST['deleteImage']) && $_POST['deleteImage'] == "yes" ) $news->deleteImages();
    $news->update();
	if ( isset( $_FILES['image'] ) ) $news->storeUploadedImage( $_FILES['image'] );
    header( "Location: admin.php?status=changesSaved" );

  } elseif ( isset( $_POST['cancel'] ) ) {

    // User has cancelled their edits: return to the news list
    header( "Location: admin.php" );
  } else {

    // User has not posted the news edit form yet: display the form
    $results3['news'] = News::getById( (int)$_GET['newsID'] );
    require( TEMPLATE_PATH . "/admin/editNews.php" );
  }

}

function deleteNews() {

  if ( !$news = News::getById( (int)$_GET['newsID'] ) ) {
    header( "Location: admin.php?error=newsNotFound" );
    return;
  }

  $news->deleteImages();
  $news->delete();
  header( "Location: admin.php?status=newsDeleted" );
}

function listArticles() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Dashboard | TUCTVC";
  
  $results3 = array();
  $data3 = News::getList();
  $results3['news'] = $data3['results'];
  $results3['totalRows'] = $data3['totalRows'];
  
  trigger_error(var_dump($results3['news']), E_USER_ERROR);
  
  if ( isset( $_GET['error'] ) ) {
    if ( $_GET['error'] == "articleNotFound" ) $results['errorMessage'] = "Erro: Artigo não encontrado.";
	if ( $_GET['error'] == "newsNotFound" ) $results['errorMessage'] = "Erro: Notícia não encontrada.";
  }

  if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "changesSaved" ) $results['statusMessage'] = "Suas mudanças foram salvas.";
    if ( $_GET['status'] == "articleDeleted" ) $results['statusMessage'] = "Artigo excluido.";
	if ( $_GET['status'] == "newsDeleted" ) $results['statusMessage'] = "Notícia excluida.";
  }

  require( TEMPLATE_PATH . "/admin/dashboard.php" );
}

?>
