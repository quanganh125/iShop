<?php

namespace App\Controller;
use Cake\Http\Session;

class UsersController extends AppController{
    public function login(){
        $this->loadModel('Users');
        // $this->viewBuilder()->setLayout('loginpage');
        $login = $this->Users->newEmptyEntity();
        $session = $this->request->getSession();

        if($this->request->is('post')){
            $login->email = $this->request->getData('email');  
            $login->password = $this->request->getData('password');   
            $data = $this->Users->find()
                                ->select(['name','user_id'])
                                ->where(['email' => $login->email, 'password'=>$login->password])
                                ->toArray();
            if(0 !== count($data)){
                $session->write([
                    'User.id' => $data[0] ->user_id,
                    'User.name' => $data[0]->name,
                    'User.email' => $login->email,
                  ]);
                $this->redirect(['controller'=>'Shops',
                                'action'=>'postProduct']);
            } else{
                $this->Flash->error(__('Login fail !'));
                $this->redirect(['controller'=>'Users',
                                'action'=>'login']);
            }
        }
    }

    public function logout(){
        $data = $this->request->getSession();
        $data->destroy();
        $this->redirect(['controller'=>'Users',
                            'action'=>'login']);
    }
}