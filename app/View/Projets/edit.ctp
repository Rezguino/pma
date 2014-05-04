<h1>Edit Projet</h1>
<?php
echo $this->Form->create('Projet');
echo $this->Form->input('title');
echo $this->Form->input('contenu', array('rows' => '3'));
echo $this->Form->input('estimation');

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>