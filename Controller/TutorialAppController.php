<?php
class TutorialAppController extends AppController {
    // Vos fonctions communes ici

    protected function math($x, $y, $z){
        return ($x*$x)*$y-$z;
    }
}

