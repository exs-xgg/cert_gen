
<?php
include 'db_con.php';

include 'session_check.php';

$id = $_GET['update'];
$user = '';
$pass = '';
$fname = '';
$mnamne = '';
$lname = '';
$admin = '';
$active = '';
$select_user = "SELECT * FROM users WHERE id=$id ";
$select_query = mysqli_query($con, $select_user);
$fetch_row = $select_query->fetch_assoc();
$user = $fetch_row['username'];
$pass = $fetch_row['password'];
$fname = $fetch_row['fname'];
$mname = $fetch_row['mname'];
$lname = $fetch_row['lname'];
$admin = $fetch_row['is_admin'];
$active = $fetch_row['is_active'];

// admin checkbox

function is_ad()
   {
   include 'db_con.php';

   $id = $_GET['update'];
   $select_admin = "SELECT * FROM users WHERE id=$id ";
   $admin_query = mysqli_query($con, $select_admin);
   $fetch_admin = $admin_query->fetch_assoc();
   $adm = $fetch_admin['is_admin'];
   $chck = "";
   if ($adm === 'y')
      {
      $chck.= '<input type="checkbox" value="y" name="admin" id="admin" checked>' . ' ' . "Admin" . '<br>';
      }
     else
      {
      $chck.= '<input type="checkbox" value="y" name="admin" id="admin" >' . ' ' . "Admin" . '<br>';
      }

   return $chck;
   } // end admin checkbox function

// active function

function is_act()
   {
   include 'db_con.php';

   $id = $_GET['update'];
   $select_admin = "SELECT * FROM users WHERE id=$id ";
   $admin_query = mysqli_query($con, $select_admin);
   $fetch_admin = $admin_query->fetch_assoc();
   $act = $fetch_admin['is_active'];
   $chck = "";
   if ($act === 'y')
      {
      $chck.= '<input type="checkbox" value="y" name="active" id="active" checked>' . ' ' . "Active" . '<br />';
      }
     else
      {
      $chck.= '<input type="checkbox" value="y" name="active" id="active" >' . ' ' . "Active" . '<br />';
      }

   return $chck;
   } // end admin checkbox function

?>
 

<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <?php
include 'nav.php';
 ?>
         <br>
         <form method="post" action="upd_user.php">
            <input type="text" name="id_val" value="<?php
echo $id ?>" hidden>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="uname">Username</label>
                     <input type="text" name="uname" id="uname" class="form-control" value="<?php
echo $user ?>">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="pwd">Password</label>
                     <input type="" name="pwd" id="pwd" class="form-control" >
                     <small id="emailHelp" class="form-text text-muted">If You won't change password, leave this field blank</small>
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="fname">First Name</label>
                     <input type="text" name="fname" id="fname" class="form-control" value="<?php
echo $fname ?>">
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <label for="mname">M.I</label>
                     <input type="text" name="mname" id="mname" class="form-control" maxlength="1" value="<?php
echo $mname ?>">
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="lname">Last Name</label>
                     <input type="text" name="lname" id="lname" class="form-control" value="<?php
echo $lname ?>">
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-2">
                  <label class="checkbox-inline"><?php
echo is_act(); ?></label>
               </div>
               <div class="col-md-2">
                  <label class="checkbox-inline"><?php
echo is_ad(); ?></label>
               </div>
               <div class="col-md-7">
                  <a href="home.php" class="btn btn-danger float-right"><i class="fas fa-ban"></i> Cancel</a>                 
               </div>
               <div class="col-md-1">
                  <button type="submit" name="upd_btn" class="btn btn-info float-right"><i class="fas fa-edit"></i> Update</button>
                  
               </div>
            </div>
      </div>
      </form>
      </div>
   </body>
</html>