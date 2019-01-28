<!DOCTYPE html>
<html>
   <head>
      <title>Add User</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <?php
            include 'nav.php';
             ?>
         <br>
         <form method="POST" action="user_form_process.php" autocomplete="off" id="user_form">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="fname">First Name</label>
                     <input type="text" name="fname" id="fname" class="form-control" >
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="mname">Middle Name</label>
                     <input type="text" name="mname" id="mname" class="form-control" >
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="lname">Last Name</label>
                     <input type="text" name="lname" id="lname" class="form-control" >
                  </div>
               </div>
            </div>
            <!-- end row tab -->
            <div class="form-group">
               <label for="user">Username</label>
               <input type="text" name="username" id="user" class="form-control" >
            </div>
            <div class="form-group">
               <label for="pass">Password</label>
               <input type="password" name="pass" class="form-control" id="pass">
            </div>
            <div class="form-group">
               <label for="con_pass">Confirm Password</label>
               <input type="password" name="con_pass" id="con_pass" class="form-control" >
            </div>
            <!-- Default inline 1-->
            <div class="custom-control custom-checkbox custom-control-inline">
               <input type="checkbox" class="custom-control-input" id="admin" name="admin" value="yes">
               <label class="custom-control-label" for="admin">Admin</label>
            </div>
            <!-- Default inline 2-->
            <div class="custom-control custom-checkbox custom-control-inline">
               <input type="checkbox" class="custom-control-input" id="active" name="active" value="yes">
               <label class="custom-control-label" for="active">Active</label>
            </div>
            <br><br>
            <div class="row">
               <div class="col-md-6">
                  <div class="float-left">
                     <input type="submit" name="add_user" class="btn btn-info" value="Add User">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="float-right">
                     <a href="home.php" class="btn btn-danger btn-sm">back</a>
                  </div>
               </div>
            </div>
            <br><br>
         </form>
      </div>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script>
         $('form').each(function() {
                      $.validator.setDefaults({
                             ignore: []
                      });
                    $(this).validate({
                    	    rules: {
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                    
                },
                pass:{
                	required: true,
                },
                con_pass:{
                	required: true,
                	equalTo:"#pass",
                },
                username:{
                	required: true,
                },
         
            },
         
           messages:{
           		con_pass: "The Password didn't match",
           },
         
         
         
                             
                  highlight: function(element) {
                  $(element).closest('.form-control').addClass('is-invalid');
                  },
                  unhighlight: function(element) {
                  $(element).closest('.form-control').removeClass('is-invalid');
                  },
                  errorElement: 'div',
                  errorClass: 'invalid-feedback',
                  errorPlacement: function(error, element) {
                  if(element.parent('.invalid-feedback').length) {
                  error.insertAfter(element.parent());
                  } else {
                  error.insertAfter(element);
                  }
                  }
                  });
                  });
         
      </script>
      <style>
         .error{
         color: red;
         font-size:11px;
         }
      </style>
   </body>
</html>
