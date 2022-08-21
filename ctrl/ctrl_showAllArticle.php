<?php
    include './utils/Twig.php';
    include './utils/connecteBdd.php';
    include './model/model_article.php';
    include './manager/manager_article.php';

    $article = new ManagerArticle (null, null);
    $articles = $article->showAllArticle($bdd);
    

    // foreach($articles as $article){
    //     echo '
    //         <div class="card w-75 m-auto my-3">
    //             <div class="card-body">
    //                 <h5 class="card-title">'.$article->titre_article.'</h5>
    //                 <p class="card-text">'.$article->texte_article.'</p>
    //             </div>
    //     </div>
    //     ';
    // }

    echo $twig->render('showAllArticle.html.twig', [
        'articles' => $articles
        ]);
?>