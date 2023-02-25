<?php 
    // include("./SQL/CONNECTION/conn-dashboard.php");
    include('/Applications/XAMPP/xamppfiles/htdocs/Dashboard@web/Dashboard/SQL/CONNECTION/conn-dashboard.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="/Dashboard/CSS/home.css">
    <title>home</title>
</head>
<body>
    <!-- <P style="margin:40vh">HELLO</P> -->
    <!-- TABLE  -->
    <div class="table-wrapper" style="margin:100px">
        <table>
            <tr class="header-table">
                <th>Header</th>
                <th>Title</th>
                <th>Description</th>
                <th>image URL</th>
                <th class="remove">Edit</th>
                <th class="remove">X</th>
            </tr><br>
       <?php
       while($row = mysqli_fetch_assoc($all_data)){
        ?>  
            <tr class="tr">
                <td><?php echo $row["Header"]; ?></td>
                <td><?php echo $row["Title"]; ?></td>
                <td><?php echo $row["Description"]; ?></td>
                <td><?php echo $row["Image"]; ?></td>
                <td class="remove"><i class="fa-sharp fa-solid fa-pen-to-square"></i></td>
                <td class="remove"><i class="fa-solid fa-trash"></i></td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>