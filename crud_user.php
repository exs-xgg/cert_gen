<?php
   include 'db_con.php';
   
   $select_user = "SELECT * FROM users order by id DESC";
   $user_query = mysqli_query($con, $select_user);
   ?>
<!DOCTYPE html>
<html>
   <title>Users</title>
   <head>
      <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="DataTables/datatables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/data.css">
   </head>
   <body>
      <div class="container">
         <div class="float-right">
            <a href="add_user.php" class="btn btn-success btn-sm">Add User</a>
         </div>
         <table id="user" class="display">
            <thead>
               <tr>
                  <th>User Name</th>
                  <th>Name</th>
                  <th>Admin</th>
                  <th>Active</th>
                  <th>Date Created</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  while ($user_row = $user_query->fetch_assoc()): ?>
               <tr>
                  <td><?php
                     echo $user_row['username']; ?></td>
                  <td><?php
                     echo $user_row['fname'] . ' ' . $user_row['mname'] . ' ' . $user_row['lname']; ?></td>
                  <td><?php
                     echo $user_row['is_admin']; ?></td>
                  <td><?php
                     echo $user_row['is_active']; ?></td>
                  <td><?php
                     echo $user_row['date_created']; ?></td>
                  <td>
                     <a href="update_user.php?update=<?php
                        echo $user_row['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Update"><i class="fas fa-pen"></i></a>
                     <a href="crud_user_del.php?del=<?php
                        echo $user_row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure you want to Delete this Record?')" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
                  </td>
               </tr>
               <?php
                  endwhile; ?>
            </tbody>
         </table>
      </div>
      <!-- main container -->
      <script>
         // initialize data table
         
         $('#user').DataTable();
         
         
         
         
         
      </script>
   </body>
</html>
