
<?php
include 'db_con.php';

$select_modules = "SELECT *FROM module";
$select_query = mysqli_query($con, $select_modules) or die($con->error);
$select_topic = "SELECT * FROM topic";
$topic_query = mysqli_query($con, $select_topic);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/data.css">
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
  
</head>
<body>
    <div class="container">
    <h4 class="text-center"></h4>
    <div class="float-right">
        <a href="add_modules.php" class="btn btn-success btn-sm">Add module</i></a>    
    </div>
    <table id="modules_table" class="display table-striped">
        <thead>
         <tr>
            <th>Module Name</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php while ($modules_rows = $select_query->fetch_assoc()): ?>
                    <tr>    
                        <td><?php
    echo $modules_rows['module_name']; ?></td>
                        <td><button onclick="get_topics(this.value)" value="<?php
    echo $modules_rows['id']; ?>" id="button" type="button" class="show_topics btn btn-info btn-sm" data-toggle="modal" data-target="#modal_topic_module" data-toggle="tooltip" data-placement="top" title="View Topics"><i class="fas fa-file  "></i></button>
                        
                              
                            <a href="crud_modules_del.php?del=<?php
    echo $modules_rows['id']; ?>" class=" btn btn-danger btn-sm" onclick="return confirm('Are You sure you want to Delete this Record?')" data-toggle="tooltip" data-placement="top" title="Delete!"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
endwhile; ?>
            </tbody>
        </table>
    </div>



 <div class="modal fade" id="modal_topic_module" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">  
        <div class="modal-body">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <p></p>
            <div class="jumbotron">
                <ul id="module_topic_area">
                <!-- ajax topics post here -->
                </ul>
            </div>
        </div> 
      </div>
    </div>
 </div>
        <!--end topic modal  -->







    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>       
<script>
    $('#modules_table').DataTable();




    function get_topics(cliked) {

        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'module_topics.php?topic='+cliked, true);
        xhr.onload = function(){
            console.log(this.responseText);
            $("#module_topic_area").empty();
            $("#module_topic_area").append( this.responseText);
        }
        xhr.send();

        
    }

</script>
</body>
</html>