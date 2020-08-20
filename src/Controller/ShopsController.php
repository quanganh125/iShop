<?php

namespace App\Controller;
use Cake\Event\EventInterface;

class ShopsController extends AppController{

    public function home(){
        $this->viewBuilder()->setLayout('home');
    }
}
?>
