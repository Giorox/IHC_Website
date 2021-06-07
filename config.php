<?php
ini_set( "display_errors", true );
date_default_timezone_set( "America/Sao_Paulo" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=tuctvc_main" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 6 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
define( "ARTICLE_IMAGE_PATH", "images/articles" );
define( "NEW_IMAGE_PATH", "images/news" );
define( "IMG_TYPE_FULLSIZE", "fullsize" );
define( "IMG_TYPE_THUMB", "thumb" );
define( "ARTICLE_THUMB_WIDTH", 300 );
define( "PALAVRA_THUMB_WIDTH", 300 );
define( "JPEG_QUALITY", 100 );
require( CLASS_PATH . "/Article.php" );
require( CLASS_PATH . "/News.php" );

setlocale(LC_ALL, 'portuguese-brazilian', 'ptb', 'pt_BR');

function handleException( Throwable $t ) {
echo "Oops! Tivemos um problema. Tente Novamente mais tarde." . $t;
error_log( $t->getMessage() );
}

set_exception_handler( 'handleException' );
?>
