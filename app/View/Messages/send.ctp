  <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="images/login/icon.png" alt="Welcome to Mail App" />
            <h4>Welcome    to <small> PMA App</small></h4>
          </div>

          <div class="login-form">
            <div class="form-group">

<h1> Send a message</h1>
<?php
//debug($this->Session->read()); 
//echo $this->request->data();
echo $this->Form->create('Message');
echo $this->Form->input('receiver', array('class' => 'form-control login-field','placeholder' => 'To nickname..'));
echo $this->Form->input('contenu', array('rows' =>'3',
'class' => 'form-control login-field' ));?>
<?php
echo $this->Form->hidden('sender',array(
        	'value'=> $this->Session->read('Auth.User.username')),
 array('class' => 'form-control login-field'));
echo $this->Form->end('Send Message');
?>

</div>
</div>
</div>
</div>
</div>