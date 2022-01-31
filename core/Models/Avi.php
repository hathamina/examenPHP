<?php

namespace Models;

require_once "AbstractModel.php";

class Avi extends AbstractModel
{

        protected string $nomDeLaTable = "avis";

        private $id;
        /**
         * recupère la proprieté privée id 
         * @return string 
         */
        public function getId(){
            return $this->id;
        }
///////////////////////////////////////////
        private $author;
        /**
         * recupère la proprieté author name
         * @return string 
         */
        public function getAuthor(){
            return $this->author;
        }
        public function setAuthor($author){
            $this->author = $author;
        }
///////////////////////////////////////
        private $content;
        /**
         * recupère la proprieté privée content
         * @return string 
         */
        public function getContent(){
            return $this->content;
        }
        public function setContent($content){
            $this->content = $content;
        }

//////////////////////////////////////
        protected $veloId;
        /**
         * recupère la proprieté privée velo_id 
         * @return string 
         */
        public function getVeloId()
        {
        return $this->VelolId;
        }

        public function setVeloId($velolId)
        {
        $this->veloId = $velolId;
        }
    

    /**
         * trouve tous les avis associés à un produit par son ID
         * 
         * @param int $velo_id
         * @return array|bool 
         * 
         */
        public function findAllCommentsByvelo(int $velo_id)
        {  
                $requeteAvi = $this->pdo->prepare("SELECT * FROM avis 
                        WHERE velo_id = :velo_id");

                $requeteAvi ->execute([
                        "velo_id" => $velo_id
                ]);

                $avis = $requeteAvi ->fetchAll(\PDO::FETCH_CLASS, get_class($this));

                return $avis;
        }

    
        /**
         * Enregistre un avi dans la base de données
         * 
         * @param string $author 
         * @param string $content  
         * @param int $aviId
         * 
         */
        public function save(Avi $avi):void
        {
                $RequeteCreationAvi = $this->pdo->prepare("INSERT INTO avis 
                (author, content, velo_id ) 
                VALUES(:author, :content, :velo_id)");

                $RequeteCreationAvi->execute([
                        "author" => $avi->author,
                        "content" => $avi->content,
                        "velo_id" => $avi->veloId
                ]);         
        }

}

?>