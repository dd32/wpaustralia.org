<?php


if ( $_SERVER['REQUEST_URI'] == '/' && empty( $_GET ) && 'wpaustralia.org' === $_SERVER['HTTP_HOST'] ) {
	include './index-static/index.html';
	die();
}

define('WP_USE_THEMES', true);
require( __DIR__ . '/wp-blog-header.php' );
