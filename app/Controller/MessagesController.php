<?php

	class MessagesController extends AppController {
    
    public $helpers = array('Html','Form','Session');
	public $components = array('Session');

		public function index(){
			$this->set('messages', $this->Message->find('all', array(
			'conditions' => array(
			'receiver' => $this->Session->read('Auth.User.username')))));

		}
		public function send(){
				if($this->request->is('post')){
			 
			    $this->Message->create();
			
			if($this->Message->save($this->request->data)){
				$this->Session->setFlash(__('you have been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(
				__('The message couldnt not be sended. Please, try again.')
				);
		}	
		}

	} 


?>