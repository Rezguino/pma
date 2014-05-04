  <div class="login">
    <div class="login-screen">
      <div class="login-icon">
        <img src="images/login/icon.png" alt="Welcome to Mail App" />
        <h4>Welcome    to <small> PMA App</small></h4>
      </div>

      <div class="login-form">
        <div class="form-group">

          <h1> Add new project</h1>
          <?php
//debug($this->Session->read()); 
//echo $this->request->data();
          echo $this->Form->create('Projet');
          echo $this->Form->input('title', array('class' => 'form-control login-field', 'placeholder' => 'titre',));
          echo $this->Form->input('contenu', array('rows' =>'3',
            'class' => 'form-control login-field',
            'placeholder' => 'contenu'));?>
          <?php
          echo $this->Form->input('estimation', array('class' => 'form-control login-field' ,'placeholder' => 'estimation'));
          echo $this->Form->hidden('group_id',array(
           'value'=> $this->Session->read('Auth.User.group')),
          array('class' => 'form-control login-field'));
          echo $this->Form->input('Chef', array(              
            'class' => 'form-control', 
            'placeholder' => 'Chef name'
            ));?>
            <div class='input-group date' id='datetimepicker1'>
             <div class="fieldset__wrapper">
              <?= $this->Form->input('datefin', array(
                'class' => 'fieldset__input js__datepicker form-control login-field' ,
                'placeholder' => 'Try me',
                'type' => 'text')); ?>
              </div></div>
              <?= $this->Form->end('Save Post');
              ?>

            </div></div>
