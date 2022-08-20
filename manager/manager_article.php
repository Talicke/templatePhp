<?php
    class ManagerArticle extends Article {

        public function addArticle(object $bdd){
            try{
                $titre = $this->getTitreArticle();
                $texte = $this->getTexteArticle();
                $req = $bdd->prepare('INSERT INTO articles(titre_article, texte_article)
                VALUES(?,?)');
                $req->bindparam(1, $titre, PDO::PARAM_STR);
                $req->bindparam(2, $texte, PDO::PARAM_STR);
                $req->execute();    
            }
            catch(Exception $e){
                die('Erreur : ' .$e->getMessage());
            }
        }

        public function showAllArticle(object $bdd){
            try{
                $req = $bdd->prepare('SELECT id_article, titre_article, texte_article FROM articles');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e){
                die('Erreur : ' .$e->getMessage());
            }
        }
    }

?>