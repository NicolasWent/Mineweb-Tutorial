<?php
class TutorialController extends TutorialAppController
{
    public function index()
    {

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

    public function admin_index()
    {
        //Important pour permettre seulements aux admins du site d'y avoir accès.
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->loadModel('Tutorial.Info');

            //Si la requete est de type ajax
            if ($this->request->is('ajax')) {
                //Vu que c'est en ajax, nous n'avons pas besoin du layout
                $this->autoRender = null;

                //Je récupère le champs name="pseudo"
                $pseudo = $this->request->data['pseudo'];
                $date = date('Y-m-d H:i:s');

                $this->Info->add($pseudo, $date);

                //Envoi réponse en ajax
                $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('GLOBAL__SUCCESS'))));
            } else {
                //Je déclare le thème du panel admin
                $this->layout = 'admin';

                //Je récupère les données de ma base.
                $datas = $this->Info->get();

                $this->set(compact('datas'));
            }
        } else {
            //Sinon on redirige notre visiteur indiscret vers la page d'accueil
            $this->redirect('/');
        }
    }

    public function admin_delete($id)
    {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->autoRender = null;

            $this->loadModel('Tutorial.Info');

            //J'utilise _delete() car delete() existe déjà avec cakephp
            $this->Info->_delete($id);

            //Redirection vers notre page
            $this->redirect('/admin/tutorial');
        } else {
            $this->redirect('/');
        }
    }
}
