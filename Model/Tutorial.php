<?php
class Info extends TutorialAppModel {
    // vide car le code est dans TutorialAppController
    public function get() {
        return $this->find('all');
    }
}
