<?php
//pega o ID do post da URL
preg_match_all('/\d+\.\d+|\d+/', $_SERVER['REQUEST_URI'], $matches);
if(!$matches[0])
    exit();
$subdomain_post_id = intval($matches[0][0]);
$subdomain_mplay = isset($_GET['mplay']) ? $_GET['mplay'] : null;

//insira o caminho root da index do wordpress
include('C:/xampp/htdocs/wp/projeto/index.php');
?>