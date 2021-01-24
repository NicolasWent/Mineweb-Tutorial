<?php
class Info extends TutorialAppModel {
    // vide car le code est dans TutorialAppController
    public function get() {
        return $this->find('all');
    }

    public function _delete($id){
        return $this->delete($id);
    }

    public function add($pseudo, $date){
        $this->create();
        $this->set(['pseudo' => $pseudo, 'date' => $date]);
        return $this->save();
    }
}
