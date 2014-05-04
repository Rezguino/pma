<?php


class ProjetsController extends AppController{

	public $helpers = array('Html','Form','Session');
	public $components = array('Session','Auth');


	public function index(){
		$this->set('projets', $this->Projet->find('all', array(
			'conditions' => array(
				'group_id' => $this->Session->read('Auth.User.group')))));
		$this->loadModel('Message');
		$this->set('messages' , $this->Message->find('all', array(
			'limit' => '5',
			'conditions' => array(
				'receiver' => $this->Session->read('Auth.User.username')
				))));
		$this->set('total'	, $this->Message->find('count', array(
			'conditions' => array(
				'receiver' => $this->Session->read('Auth.User.username')
				))));
		$this->set('pprojets', $this->Projet->find('all', array(
			'conditions' => array(
				'chef' => $this->Session->read('Auth.User.id')
				))));

	}

	public function view($id=null){
		if(!$id){
			throw new NotFoundException(__('invalid project'));
		}
		$projet= $this->Projet->findById($id);
		if(!$projet){
			throw new NotFoundException(__('invalid project'));
		}
		$this->set('projet', $projet);
	}
	public function add(){
		   //echo 'Welcome <u>'.$this->Session->read('Auth.User.group').'</u>';

		if($this->request->is('post')){
		 //debug($this->request->data['Projet']['chef']);
			$chef=$this->request->data['Projet']['Chef'];
			$this->loadModel('User');
			$id= $this->User->field('id',array('username'=>$chef));

			$this->Projet->create();

			$this->Projet->set(array('chef' => $id));
			if($this->Projet->save($this->request->data)){
				$this->Session->setFlash(__('Your post has been saved'));
				return $this->redirect(array('action' => 'index'));
			}	
			$this->Session->setFlash(__('Unable to add post'));
		}
	}

	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$projet = $this->Projet->findById($id);
		if (!$projet) {
			throw new NotFoundException(__('Invalid post'));
		}
		//$chef= $this->Projet->field('chef',array('id'=> $id));

		//if (($this->Auth->user('id') === $chef) && ($this->Auth->user('role') === "admin")) {

			if ($this->request->is(array('post', 'put'))) {
				$this->Projet->id = $id;
				if ($this->Projet->save($this->request->data)) {
					$this->Session->setFlash(__('Your post has been updated.'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Unable to update your post.'));
			}

			if (!$this->request->data) {
				$this->request->data = $projet;
			}
			
			else {

				throw new NotFoundException(__('Invalid post'));

			}
	//	}
	}



	public function delete($id=null){
		if($this->request->is('get')){
			throw new MethodeNotAllowedException();
		}
		if($this->Projet->delete($id)){
			$this->Session->setFlash(__('The post with id: %s has been deleted. ',h($id)));
		}
		return $this->redirect(array('action' => 'index'));
	}
	function beforeFilter(){
		parent::beforeFilter();

	}
/*	public function isAuthorized($user) {
    // All registered users can add posts
		if ($this->action === 'add') {
			return true;
		}
    // The owner of a post can edit and delete it
		if (in_array($this->action, array('edit', 'delete'))) {
 			 $postId = (int) $this->request->params['pass'][0];
 			// debug($postId);
 			// debug($user['id']);
 			 if ($this->Post->isOwnedBy($postId, $user['id'])) {
 			 	return true;
        }
	
	}

		return parent::isAuthorized($user);
	


}*/
}


?>