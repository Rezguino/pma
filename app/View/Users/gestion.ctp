
	   <center>  <h1>Project list</h1></center>



                         <table class="table table-condensed">
                          <tr>
                            <th>name</th>
                            <th>mail</th>
                            <th>role</th>
                            <th>Edit</th>
                          </tr>

                          <?php foreach($users as $user): ?>
                          <tr class="active"><td><?php echo $user['User']['username'];?></td>
                            <td> 
                             <?php echo $user['User']['username'];?>
                            </td>
                            <td> <?php echo $user['User']['role'];?></td>
                            <td> <a href="#"> Edit </a></td>
                            
                            </tr>

                          <?php endforeach;?>
                          <?php unset($user);?>
                        </table>
                      </div>
                    </section>



}?>