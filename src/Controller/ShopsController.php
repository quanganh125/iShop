<?php

namespace App\Controller;

use App\Model\Entity\Product;
use Cake\Event\EventInterface;
use Cake\Http\ServerRequest;
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
                $this->set(['product_of_login_user' => $product_of_login_user,'user_id' => $check_exist_email[0]->user_id]);   
            }
        }
    } 
    
    public function deleteProduct($id){   
        $this->loadModel('Products');
        $product = $this->Products->findById($id)->firstOrFail();
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('product has been deleted.'));
            return $this->redirect(['action' => 'post_product']);
        }
    }

    public function post(){  
        $this->loadModel('Products');
        $this->loadModel('ProductImages');
        $product = $this->Products->newEmptyEntity(); 
        $upload_image = $this->ProductImages->newEmptyEntity(); 
        if($this->request->is('post')){
            $product = $this->Products->patchEntity($product, $this->request->getData());

            if(!$product->getErrors){
                $image = $this->request->getData('image'); 
                $category = $this->request->getData('category');
                if ($category === 'watch') $type = 'watches';
                else $type = $category . 's';
                
                $name = $image->getClientFilename();
                $targetPath = WWW_ROOT.'img'.DS.$type.DS.$name;
                $upload_image->image_link = '/img'.DS.$type.DS.$name;

                if($name) $image->moveTo($targetPath);
                $product->total = $this->request->getData('quatity');
                $product->updated_at = date("Y-m-d H:i:s");
                $product->user_id = $this->request->getData('user_id');

                $upload_image->product_id = $this->Products->save($product)->id;
                if($this->ProductImages->save($upload_image)){
                    $this->Flash->success(__('Product has been added.'));
                } else  $this->Flash->error(__('Add fail.'));
            }            
            return $this->redirect(['action' => 'post_product']);
        }
    }
}