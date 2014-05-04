
<section>

  <div class="leftpanel">

    <div class="logopanel">
      <h1><span>[</span> PMA <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">    


      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <?php if($this->Session->read('Auth.User.role') == 'admin'):?>
        <li><span class="pull-right badge badge-success"></span><?= $this->Html->link(
        'Users', array('controller' => 'Users' , 'action' => 'gestion'));?></li> 
      <?php endif ?>

    </ul>







  </div><!-- leftpanelinner -->
</div><!-- leftpanel -->

<nav class="navbar navbar-default" role="navigation">
  <?= $this->Element('Notifications.NotificationIcon', array(
    'all_notifications' => array('controller' => 'dashboard', 'action' => 'notifications'),
    'clear_notifications' => true,
        )
);
?>
</nav>

<div class="mainpanel">

  <div class="headerbar">


    <form class="searchform" action="index.html" method="post">
      <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
    </form>
    <div class="header-right">

      <ul class="nav nav-pills">

        <li> <?php echo $this->Html->link(
          'Login', array('controller' => 'Users' , 'action' => 'login'));
          ?></li>
          <li>
           <?php echo $this->Html->link(
            'inscription', array('controller' => 'Users' , 'action' => 'add'));
            ?>

          </li>

          <li> <div class="btn-group">
            <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
              <i class="glyphicon glyphicon-envelope"></i>
              <span class="badge"><?= $total ;?></span>
            </button>


            <div class="dropdown-menu dropdown-menu-head pull-right">
              <h4 class="title">You Have New Messages</h4>
              <ul class="dropdown-list gen-list">
                <?php foreach($messages as $message): ?>
                <li> <?php echo $message['Message']['contenu'];?></li>
              <?php endforeach;?>
              <?php unset($message);?>
              <li>
               <?php echo $this->Html->link(
                'Send A messages', array('controller' => 'Messages' , 'action' => 'send'));
                ?>

              </li>
            </ul>
          </div>
        </li>
        <li>      <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
          <i class="glyphicon glyphicon-user"></i>
          <span class="badge">3</span>
        </button></li>
        <li>
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <?php echo $this->Html->image('user1.png', array('alt' => 'User' ,
                'width'  => '40px',
                'height' => '40px'));?>
                <?=  $this->Session->read('Auth.User.username'); ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><i class="glyphicon glyphicon-question-sign">
                  <?php
                  echo $this->Html->link('Log out ', array(
                    'controller' => 'Users' , 'action' => 'logout' ,  'escape' => false));
                    ?></i> 
                  </li> 
                </ul>
              </div>
            </li>

          </ul>
        </div>         </div>



        <div class="pageheader">
         <h2> Welcome to PMA application </h2> <?php echo $this->Html->link(
          'Add Projet', array('controller' => 'projets' , 'action' => 'add'));
          ?>

        </div>

        <div class="contentpanel">

          <div class="row">

            <div class="col-sm-6 col-md-3">
              <div class="panel panel-info panel-stat">
                <div class="panel-heading">

                  <div class="stat">
                    <div class="row">
                      <div class="col-xs-4">
                       <?php echo $this->Html->image('is-user.png', array('alt' => 'User' ,
                        'width'  => '40px',
                        'height' => '40px'));?>                  </div>
                        <div class="col-xs-8">
                          <small class="stat-label">Users</small>
                          <h4>Add people you work with</h4>
                        </div>
                      </div><!-- row -->

                      <div class="mb15"></div>

                      <div class="row">
                        <div class="col-xs-6">
                        </div>

                        <div class="col-xs-6">

                        </div>
                      </div><!-- row -->
                    </div><!-- stat -->

                  </div><!-- panel-heading -->
                </div><!-- panel -->
              </div><!-- col-sm-6 -->


              <div class="col-sm-6 col-md-3">
                <div class="panel panel-danger panel-stat">
                  <div class="panel-heading">

                    <div class="stat">
                      <div class="row">
                        <div class="col-xs-4">
                         <?php echo $this->Html->image('is-document.png', array('alt' => 'User' ,
                          'width'  => '40px',
                          'height' => '40px'));?>                  </div>
                          <div class="col-xs-8">
                            <small class="stat-label">Project</small>
                            <h4>Create and save your project easly</h4>
                          </div>
                        </div><!-- row -->

                        <div class="mb15"></div>



                      </div><!-- stat -->

                    </div><!-- panel-heading -->
                  </div><!-- panel -->
                </div><!-- col-sm-6 -->

                <div class="col-sm-6 col-md-3">
                  <div class="panel panel-primary panel-stat">
                    <div class="panel-heading">

                      <div class="stat">
                        <div class="row">
                          <div class="col-xs-4">
                            <?php echo $this->Html->image('is-document.png', array('alt' => 'User' ,
                              'width'  => '40px',
                              'height' => '40px'));?>
                            </div>
                            <div class="col-xs-8">
                              <small class="stat-label">Sharing</small>
                              <h4>Share it with your colleges</h4>

                            </div>
                          </div><!-- row -->

                          <div class="mb15"></div>


                        </div><!-- stat -->

                      </div><!-- panel-heading -->
                    </div><!-- panel -->
                  </div><!-- col-sm-6 -->

                  <div class="col-sm-6 col-md-3">
                    <div class="panel panel-success panel-stat">
                      <div class="panel-heading">

                        <div class="stat">
                          <div class="row">
                            <div class="col-xs-4">
                             <?php echo $this->Html->image('is-money.png', array('alt' => 'User' ,
                              'width'  => '40px',
                              'height' => '40px'));?>
                            </div>
                            <div class="col-xs-8">
                              <small class="stat-label">How much it cost?</small>
                              <h4>it's totaly free applicationS</h4>
                            </div>
                          </div><!-- row -->

                          <div class="mb15"></div>

                          <div class="row">
                            <div class="col-xs-6">

                            </div>

                            <div class="col-xs-6">

                            </div>
                          </div><!-- row -->

                        </div><!-- stat -->

                      </div><!-- panel-heading -->
                    </div><!-- panel -->
                  </div><!-- col-sm-6 -->
                </div><!-- row -->

                <div class="row">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>

                 <!-- row -->
                 <center>  <h1>Project list</h1></center>



                 <ul class="nav nav-tabs">
                  <li class="active"><a href="#home" data-toggle="tab">Tous les projets</a></li>
                  <li><a href="#profile" data-toggle="tab">Mes projets</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="home">

                   <table class="table table-condensed">
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>estimation</th>
                      <th>Created</th>
                    </tr>

                    <?php foreach($projets as $projet): ?>
                    <tr class="active"><td><?php echo $projet['Projet']['group_id'];?></td>
                      <td> 
                        <?php echo 
                        $this->Html->link($projet['Projet']['title'], array('controller' => 'projets' , 'action' => 'view', $projet['Projet']['id']));?>
                      </td>
                      <td> <?php echo $projet['Projet']['estimation'];?></td>
                      <td> <?php echo $projet['Projet']['created'];?></td>

                      </tr>

                    <?php endforeach;?>
                    <?php unset($projet);?>
                  </table>
                </div>


              <div class="tab-pane" id="profile">
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>estimation</th>
                      <th>Created</th>
                      <th>Edit</th>

                    </tr>

                    <?php foreach($pprojets as $projet): ?>
                    <tr class="active"><td><?php echo $projet['Projet']['group_id'];?></td>
                      <td> 
                        <?php echo 
                        $this->Html->link($projet['Projet']['title'], array('controller' => 'projets' , 'action' => 'view', $projet['Projet']['id']));?>
                      </td>
                      <td> <?php echo $projet['Projet']['estimation'];?></td>
                      <td> <?php echo $projet['Projet']['created'];?></td>

                   <td><?php echo $this->Html->link(
                        'Edit Projet', array('action' =>'edit', $projet['Projet']['id']));
                      echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $projet['Projet']['id']),
                        array('confirm' => 'Are you sure?'));
                        ?></td>
                      </tr>

                    <?php endforeach;?>
                    <?php unset($projet);?>
                  </table>

                </div>
            </div>

              </div>




          </section>
