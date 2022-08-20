<?php
    class Article{

        private ?int $id_article;
        private ?string $titre_article;
        private ?string $texte_article;

        public function __construct(?string $titre, ?string $texte){
            $this->titre_article = $titre;
            $this->texte_article = $texte;
        }
        public function getIdArticle():int{
            return $this->id_article;
        }
        public function getTitreArticle():string{
            return $this->titre_article;
        }
        public function getTexteArticle():string{
            return $this->texte_article;
        }

        public function setIdArticle($id):int{
            $this->id_article =$id;
        }
        public function setTitreArticle($titre):string{
            $this->titre_article=$titre;
        }
        public function setTexteArticle($texte):string{
            $this->texte_article=$texte;
        }
    }

?>