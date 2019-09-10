<?php
	include('../model/user.php');
	$user=new User();

      ?>

<div class="container" align = "middle" style= "margin-top: 10%; margin-right:auto; ">
<form class="form-signin" action = "../controller/updateUser.php" method = "GET" >

<div class ="container"  >

        <h2 class="form-signin-heading">Edit User</h2>
        <?php        
        $ref_id = $_GET['id'];
        $field_id = "user_id";
        $data = $user->getUserId($field_id,$ref_id);
     
        ?>

        <input type="hidden" name="id" class="form-control" style = "width :50%" value ="<?php echo $data['user_id'];?>"><br/>
  Email:
      <input type="text" name="email" class="form-control" style = "width :50%" value ="<?php echo $data['email'];?>"><br/>
  Password:
      <input type="text" name="password"  class="form-control"  style = "width :50%" value ="<?php echo $data['password'];?>" ><br/>
Usertype:
      <input type="text" name="user_type"  class="form-control"  style = "width :50%" value ="<?php echo $data['user_type'];?>" ><br/>
    
     
        </div>
        <button class="btn btn-lg btn-primary btn-block" name = "btn_edit" class="form-control" style = "width :30%"type="submit">Save</button>
        <span class="btn btn-lg btn-primary btn-block" style = "width :30%" href="../view/admin.php">Cancel</span>
        </div>
      
        </div>   
     
</body>
</html>