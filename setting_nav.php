<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/setting_nav.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    
        <ul>
            <li><img src="icon/wah_icon.png" alt="WAH LOGO" class="brand"></li>
            <li><a href="home.php" class="main"><i class="fas fa-users-cog"></i> Training and Participants</a></li>
            <li><a href=""class="main"><i class="fas fa-cog"></i> Setting <i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="crud_part.php"><i class="fas fa-users"></i> Participants</a></li>
                    <li><a href="crud_training.php"><i class="fas fa-dumbbell"></i> Training</a></li>
                    <li><a href="crud_user.php"><i class="fas fa-users-cog"></i> User</a></li>
                     <li><a href="crud_modules.php"><i class="fas fa-file"></i> Module</a></li>
                </ul>
            </li>
            <li><a href=""class="main"><i class="fas fa-plus"></i> Add <i class="fas fa-caret-down"></i></a>
                <ul>    
                    <li><a href="add_facility.php"><i class="fas fa-building"></i> Facility</a></li>
                    <li><a href="add_user.php"><i class="fas fa-user"></i> User</a></li>
                    <li><a href="add_modules.php"><i class="fas fa-file"></i> Module</a></li>
                </ul>
            </li>
            <li><a href="logout.php"class="main"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
            
        </ul>
</div>
</body>
</html>