<?php
// include './view/view_header.html';
include './utils/twig.php';

echo $twig->render('main.html.twig');
echo $twig->render('navbar.html.twig');

    //session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*--------------------------ROUTER -----------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        //route /evalmvc/test -> ./test.php
        case $path === "/templatephp/" : 
            include './ctrl/ctrl_showAllArticle.php';
            break ;
        case $path === "/templatephp/addArticle" :
            include './ctrl/ctrl_addArticle.php';
            break;
        default:
            include './ctrl/ctrl_showAllArticle.php';
		    break ;
    }


echo $twig->render('footer.html.twig');
?>