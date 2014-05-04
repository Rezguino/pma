<?php 

App::uses('AppModel', 'Model');

	class User extends AppModel {



public $hasMany = array(
    'Notification' => array(
        'className' => 'Notifications.Notification',
        'foreignKey' => 'user_id',
    ),
);
}