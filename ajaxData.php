
<?php

include ('dbConfig.php');

if (isset($_POST["region_code"]) && !empty($_POST["region_code"]))
    {

    $query = $db->query("SELECT * FROM province WHERE region_code = " . $_POST['region_code'] . " ORDER BY province_name ASC");


    $rowCount = $query->num_rows;


    if ($rowCount > 0)
        {
        echo '<option value="">Select province</option>';
        while ($row = $query->fetch_assoc())
            {
            echo '<option value="' . $row['province_code'] . '">' . $row['province_name'] . '</option>';
            }
        }
      else
        {
        echo '<option value="">Province not available</option>';
        }
    }

if (isset($_POST["province_code"]) && !empty($_POST["province_code"]))
    {

    $query = $db->query("SELECT * FROM muncity WHERE prov_code = " . $_POST['province_code'] . " ORDER BY muncity_name ASC");

    $rowCount = $query->num_rows;

    if ($rowCount > 0)
        {
        echo '<option value="">Select municipality</option>';
        while ($row = $query->fetch_assoc())
            {
            echo '<option value="' . $row['muncity_code'] . '">' . $row['muncity_name'] . '</option>';
            }
        }
      else
        {
        echo '<option value="">Municipality not available</option>';
        }
    }

if (isset($_GET['facility_name'])) {
    $id = $_GET['facility_name'];
   $select = "SELECT * FROM muncity WHERE muncity_code = '".$id."' ";
   $query_name = mysqli_query($db, $select) or die($db->error);
   if (mysqli_num_rows($query_name)>0) {
       $name_row = $query_name->fetch_assoc();
       $name = $name_row['muncity_name'];
       echo strtolower($name);
   }
}


?>