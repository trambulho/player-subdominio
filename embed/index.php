<?php
$mostrar_erros = null;//com problemas? mude para true e veja os erros
$mostrar_DIR = null;//não sabe o caminho completo do servidor, veja alterando para true
if(isset($mostrar_erros)){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

if(isset($mostrar_DIR)){
    echo getcwd();
}

//pega o ID do post da URL
preg_match_all('/\d+\.\d+|\d+/', $_SERVER['REQUEST_URI'], $matches);
if(!$matches[0])
    exit();
$subdomain_post_id = intval($matches[0][0]);
$subdomain_mplay = isset($_GET['mplay']) ? $_GET['mplay'] : null;

//insira o caminho root da index do wordpress
include('C:/xampp/htdocs/wp/projeto/index.php');
?>