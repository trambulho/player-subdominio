<?php 
//Aqui você inserir a url completa do seu site para caso algém cair aqui ser direcionado para ele
$site_url = null;//ex: 'https://mais18.dev.br/'
if(isset($site_url)){
    header("location: ". $site_url);
}