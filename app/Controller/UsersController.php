<?php

class UsersController extends AppController{
	
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	public function add(){
		//echo $this->request->data();
		if($this->request->is('post')){
			$this->User->create();
			
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('you have been saved.'));
				return $this->redirect(array('action' => 'login'));
			}
			$this->Session->setFlash(
				__('The user could not be saved. Please, try again.')
				);
		}	
	}
	public function login(){
		
		if($this->request->is('post')){

			if($this->Auth->login()){

				$this->User->Notification->msg(AuthComponent::user('id'), "You logged in!");


				$this->Session->setFlash(__('You have login on succesfuly'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
					));
				return $this->redirect('/projets');

			}
			$this->Session->setFlash(__('Invalid username or password, try again'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-warning'
				));

		}
	}
	public function gestion(){
       
       $this->set('users', $this->UsersController->find('all'));

	}
	
	public function logout(){
		$this->Auth->logout();
		return $this->redirect('/');

	}
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login','add');

		
	}

}