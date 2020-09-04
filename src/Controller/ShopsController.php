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
        $this->loadModel('Users');
        $this->loadModel('ProductImages'); 
        $this->viewBuilder()->setLayout('product_page');   
        $product_id = $this->request->getAttribute('params')['pass'][0];  
        $product = $this->Products->find('all', array('contain' => array('ProductImages')))
                                    ->select()
                                    ->where(['id'=> $product_id]);
        $users = $this->Products->find('all', array('contain' => array('Users')))
                                ->select()
                                ->where(['id'=> $product_id])->toArray();
        $this->set(['product' => $product,'users'=>$users]);
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
        $this->loadModel('Products');
        $this->loadModel('Users');
        $this->loadModel('ProductImages');
        $session = $this->request->getSession();
        $email = $session->read('User.email');

        // if session do not exist email -> redirect to login page
        if( $email == null) $this->redirect(['controller'=>'Users',
                                    'action'=>'login']);
        else{
            // if session have email but not in database -> redirect
            $check_exist_email = $this->Users->find()
                                        ->select(['user_id','name'])
                                        ->where(['email' => $email])
                                        ->toArray();
            if(count($check_exist_email) ===0) $this->redirect(['controller'=>'Users',
                                                            'action'=>'login']);
            else{
                $this->viewBuilder()->setLayout('post_product_page');
                $product_of_login_user = $this->Products->find('all', array('contain' => array('Users')))
                                                        ->where(['Products.user_id' => $check_exist_email[0]->user_id])
                                                        ->order(['id'=> 'ASC']);
                // debug($product_of_login_user);
                // exit(); 
                $this->set(['product_of_login_user' => $product_of_login_user]);   
            }
        }
    }  
}