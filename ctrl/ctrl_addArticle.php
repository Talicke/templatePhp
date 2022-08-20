<?php
    include './utils/connecteBDD.php';
    include './utils/twig.php';
    include './model/model_article.php';
    include './manager/manager_article.php';

    if(isset($_POST['ajouter'])){
        if(!empty($_POST['titreArticle'])){
            if(!empty($_POST['texteArticle'])){
                $article = new ManagerArticle($_POST['titreArticle'], $_POST['texteArticle']);
                $article->addArticle($bdd);
            }else{
                echo '<div class="alert alert-warning" role="alert">
                L\'article doit au moins contenir une texte.
                </div>';
            }
        }else{
            echo '<div class="alert alert-warning" role="alert">
            L\'article doit au moins contenir une titre.
            </div>';
        }
    }

    echo $twig->render('addArticle.html.twig');

?>