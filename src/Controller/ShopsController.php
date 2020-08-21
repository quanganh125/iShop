<?php

namespace App\Controller;
use Cake\Event\EventInterface;

class ShopsController extends AppController{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('page');
    }
    public function home(){   
        $this->loadModel('Products');
        $products = $this->Products->find('all',['order'=> 'Products.updated_at DESC']);
        $this->set('products',$products);
    }

    public function postProduct(){

    }  
}