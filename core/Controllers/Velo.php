<?php 

namespace Controllers;
class Velo extends AbstractController
{
    protected $defaultModelName = \Models\Velo::class;
    /**
     * affiche la liste des velos 
     * 
     */
    public function index()
    {
        $velos = $this->defaultModel->findAll();

        $pageTitle = "tous les velos";

        return $this->render("velos/index", compact('pageTitle', 'velos'));
    }


///////////////////////////////////////////////////////////////////
/**
     * afficher la page d'un seul velo à partir de son id
     */
    public function show()
    {  
        $id = null;

        if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
            $id = $_GET['id'];
        }
        if (!$id) {
            return $this->redirect(); 
        }

        $velo = $this->defaultModel->findById($id);

        if (!$velo)
        {
            return $this->redirect(); 
        }

        
        $pageTitle = $velo->getName();

        return $this->render("velos/show", compact('pageTitle' ,'velo'));

    }

}
    ?>