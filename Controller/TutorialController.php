<?php
class TutorialController extends TutorialAppController {
    public function index(){

        // Chargement du Model Tutorial
        // Model/Tutorial.php puis dans la classe Info
        $this->loadModel('Tutorial.Info');

        //On enregistre dans $datas le contenu de toute la table tutorial
        // On recup toutes les colonnes et tout en gros
        // la on a appller la fonction dans Tutorial class Info defini au dessus.
        $datas = $this->Info->get();

        //On passe la variable à la vue afin de pouvoir la réutiliser dans index.ctp
        // sa veux dire qu'on peut acceder a $data dans notre vue
        $this->set(compact('datas'));

        //Pour passer plusieurs variable à la vue :
        //$this->set(compact('datas', 'variable', 'infos'));

        //Pour donner un titre à votre page : Dans le html <title> Titre <title>
        // en gros le truc en haut a gauche dans le navigateur (la fenetre)
        $this->set('title_for_layout', 'Titre');
    }
}
