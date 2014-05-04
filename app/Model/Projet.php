<?php

	class Projet extends AppModel{
	public $validate = array(
			'title' => array(
				'rule' => 'notEmpty'),
			'contenu' => array('
				rule' => 'notEmpty'));


	

}
?>


