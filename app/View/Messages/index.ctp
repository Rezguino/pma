
<section>

  <div class="leftpanel">

    <div class="logopanel">
      <h1><span>[</span> PMA <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">    


      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="email.html"><span class="pull-right badge badge-success">5</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li>

      </ul>






      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  


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
                <span class="badge">1</span>
              </button>
                <div class="dropdown-menu dropdown-menu-head pull-right">
                <h4 class="title">You Have New Messages</h4>
                <ul class="dropdown-list gen-list">
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
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <noframes></noframes>strud exercitation ullamco laboris nisi ut aliquip ex</p>

                   <!-- row -->





                   <center>  <h1>mail list</h1></center>
                    


                   <table class="table table-condensed">
                    <tr>
                      <th>Sender</th>
                      <th>Contenu</th>
                      <th>Date</th>
                    </tr>

                    <?php foreach($messages as $message): ?>
                      <tr> <td>
                        <?=  $message['Message']['sender'] ;?> 
                      </td>
                      <td> <?php echo $message['Message']['contenu'];?></td>
                      <td> <?php echo $message['Message']['created'];?></td>
                     
                      </tr>

                    <?php endforeach;?>
                    <?php unset($message);?>
                  </table>
                </div>


                <!-- table test /////-->

              </section>

