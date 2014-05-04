<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMA</title>
  <meta name="description" content=""/>

  <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

  <!-- Loading Bootstrap -->
  <?= $this->Html->css('bootstrap') ;?>
  <?= $this->Html->css('bootstrap.min') ;?>
  <?= $this->Html->css('bootstrap-theme') ;?>
  <?= $this->Html->css('bootstrap-theme.min') ;?>
  <?= $this->Html->css('default');?>
  <?= $this->Html->css('default.date');?>
  <?= $this->Html->css('default.time');?>





  <!-- Loading Flat UI -->
  <?= $this->Html->css('flat-ui') ;?>

  <?= $this->Html->css('demo') ;?>
  <?= $this->Html->css('bootstrap-tagsinput');?>
<?php echo $this->Html->css('/notifications/css/notifications'); ?>


  <!-- Loading index file -->

  <?= $this->Html->css('style.default') ;?>
  <?= $this->Html->css('jquery.datatables') ;?>
  <?= $this->fetch('css'); ?>



  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>









      <?= $this->fetch('content') ;?>
<?php echo $this->Element('Notifications.NotificationInit'); ?>






    </body>
    
    <!-- Load JS here for greater good =============================-->
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') ;?>

    <?= $this->Html->script('bootstrap') ;?>

    <?= $this->Html->script('bootstrap.min') ;?>
<?php echo $this->Html->script('/notifications/js/notifications'); ?>


    <?= $this->Html->script('application') ;?>
    <?= $this->Html->script('bootstrap-tagsinput');?>
    <?= $this->Html->script('picker');?>
    <?= $this->Html->script('picker.date');?>
    <?= $this->Html->script('picker.time');?>
    <?= $this->Html->script('demo');?>
    <?= $this->fetch('script');?>
    <?= $this->fetch('dataTables.bootstrap');?>
    <?= $this->fetch('dataTables.bootstrap');?>



    <script>
    jQuery(document).ready(function(){


  // Tags Input
  jQuery('#tags').tagsInput({width:'auto'});

$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$(document).ready(function() {
    $('#example').dataTable();
} );

  </script>



</body>
</html>
