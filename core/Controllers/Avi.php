<?php
namespace Controllers;

use App\Response;

class Avi extends AbstractController
{
    protected $defaultModelName = \Models\Avi::class;

    /**
     * supprime un avi par son ID
     * @return Response
     * 
     */
    public function delete()
    {
        $id = null;

        if(!empty($_POST['id']) && ctype_digit($_POST['id'])){
            $id = $_POST['id'];
        }

        if(!$id){
            die("Erreur sur l'ID. Pars .");
        }
        //verifier que l'avi' existe

        
        // instancier
        $avi = $this->defaultModel->findById($id);

        if (!$avi) {
            return $this->redirect([
            'action'=>'show',
            'type'=>'velo',
            'info'=>'noID'
        ]);
        }

        $this->defaultModel->remove($id);

        return $this->redirect([
            'action'=>'show',
            'type'=>'velo',
            "id" =>$avi->velo_id
        ]);           
    }


    /**
     * crée un avi
     * @return Response
     * 
     */
    public function new()
    {
        $veloId = null;
        $author = null;
        $content = null;

        if(!empty($_POST['aviId']) && ctype_digit($_POST['aviId'])){
            $veloId = $_POST['aviId'];
        }

        if(!empty($_POST['author'])){
            $author = htmlspecialchars($_POST['author']);
        }

        if(!empty($_POST['content'])){
            $content = htmlspecialchars($_POST['content']);
        }

        if(!$veloId || !$content || !$author){
            return $this->redirect([
            'action'=>'show',
            'type'=>'cocktail',
            "id" =>$veloId
        ]);
        }


        // on vérifie si le produit existe bien avant de le commenter

        $modelVelo = new \Models\Velo();
        $velo = $modelVelo->findById($veloId);

        if(!$velo){
            return $this->redirect([
            'action'=>'index',
            'type'=>'velo',
            'info'=>'noId'
        ]);
        }
        

        // ici on crée un nouveau "model velo" de la classe comment et on utilise la methode "set"
        // pour pouvoir accéder aux propriètés privées du "model avis"
        $avi = new \Models\Avi();
        $avi->setAuthor($author);
        $avi->setContent($content);
        $avi->setVeloId($veloId);

        $this->defaultModel->save($avi);

       return $this->redirect([
            'action'=>'show',
            'type'=>'velo',
            "id" =>$veloId
        ]);
    }
}

?>