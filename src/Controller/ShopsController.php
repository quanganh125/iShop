<?php

namespace App\Controller;

use App\Model\Entity\Product;
use Cake\Event\EventInterface;
use Cake\Database\Query;
use Cake\Database\Expression\QueryExpression;

class ShopsController extends AppController{

    public function home(){ 
        $this->viewBuilder()->setLayout('homepage');  
        $this->loadModel('Products');
        $products = $this->Products->find('all',['order'=> 'Products.updated_at DESC']);
        $this->set('products',$products);
    }

    public function showProduct(){    
        $this->loadModel('Products');
        $this->loadModel('ProductImages'); 
        $this->viewBuilder()->setLayout('show_product_page');   
        $category = $this->request->getAttribute('params')['pass'][0];
        $products = $this->Products->find('all', array( 'contain' => array('ProductImages')))
                                        ->select()
                                        ->where(['category'=> $category])
                                        ->order(['cost'=> 'DESC']);
        $this->set(['products' => $products,'category'=>$category]);
    }
    
    public function seeMore(){  
        $this->loadModel('Products');
        $this->loadModel('ProductImages'); 
        $this->viewBuilder()->setLayout('product_page');   
        $product_id = $this->request->getAttribute('params')['pass'][0];  
        $product = $this->Products->find('all', array( 'contain' => array('ProductImages')))
                                    ->select()
                                    ->where(['id'=> $product_id]);
        $this->set(['product' => $product]);
    }

    public function find(){     
        $this->loadModel('Products');
        $this->loadModel('ProductImages'); 
        $this->viewBuilder()->setLayout('show_product_page');
        $target = $this->request->getQuery('target');
        $category = $this->request->getAttribute('params')['pass'][0];
        $products = $this->Products->find('all',array( 
                                    'contain' => array('ProductImages'),
                                    'conditions' => array(
                                        'or' => array(
                                            "Products.name LIKE" => "%$target%"
                                ))))
                                    ->where(['category'=> $category,])
                                    ->order(['cost'=> 'DESC']);              
        $this->set(['products' => $products,'category'=> $category]);
    }  

    public function postProduct(){     
        $this->viewBuilder()->setLayout('post_product_page');   
    }  

}