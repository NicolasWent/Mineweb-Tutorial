<?php
class TutorialAppSchema extends CakeSchema {

    // base, partout la meme chose:
    public $file = 'schema.php';

    public function before($event = []) {
        return true;
    }

    public function after($event = []) {}


    // Ici on defini no tables
    // la doc: https://book.cakephp.org/2/fr/console-and-shells/schema-management-and-migrations.html#ecrire-un-schema-cakephp-a-la-main

    // Toujours nom du plugin au debut
    public $tutorial__infos = [
        'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'],
        'pseudo' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'unsigned' => false],
        'date' => ['type' => 'datetime', 'null' => false, 'default' => null]
    ];
}
