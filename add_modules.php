<?php
   include 'session_check.php';
    ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
      <style>
         .background{
         background-color: #e9ecef;
         padding: 25px;
         border-radius: 5px
         }
      </style>
   </head>
   <body>
      <div class="container">
         <?php
            include 'nav.php';
             ?>
         <br />
         <form action="add_modules_process.php" method="POST">
            <div class="background-color">
               <div class="form-group">
                  <label for="mod_name">Module Name</label>
                  <input type="text" name="module_name" id="mod_name" class="form-control tb" required="">
               </div>
            </div>
            <br />
            <h5 class="text-muted">Add Topics</h5>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="top1">Topic 1</label> 	
                     <input type="text" name="topic1" class="form-control" id="top1">
                  </div>
                  <div class="form-group">
                     <label for="top2">Topic 2</label>
                     <input type="text" name="topic2" class="form-control" id="top2">
                  </div>
                  <div class="form-group">
                     <label for="top3">Topic 3</label>
                     <input type="text" name="topic3" class="form-control" id="top3">
                  </div>
                  <div class="form-group">
                     <label for="top4">Topic 4</label>
                     <input type="text" name="topic4" class="form-control" id="top4">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="top5">Topic 5</label>
                     <input type="text" name="topic5" class="form-control" id="top5">
                  </div>
                  <div class="form-group">
                     <label for="top6">Topic 6</label>
                     <input type="text" name="topic6" class="form-control" id="top6">
                  </div>
                  <div class="form-group">
                     <label for="top7">Topic 7</label>
                     <input type="text" name="topic7" class="form-control" id="top7">
                  </div>
                  <div class="form-group">
                     <label for="top8">Topic 8</label>
                     <input type="text" name="topic8" class="form-control" id="top8">
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-6">
                  <div class="float-left">
                     <input type="submit" name="add_module_and_topics" value="Add" class="btn btn-info">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="float-right">
                     <a href="home.php" class="btn btn-danger">back</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>
