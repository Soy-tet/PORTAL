<?php 
   $connection_team = mysqli_connect("localhost","root","","team");
   if(!$connection_team){
       die("connection death");
   }
    $all_data = $connection_team->query("SELECT * FROM `team_login`;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="/Dashboard/CSS/other/home.css">
    <title>home</title>
</head>
<body>
    <!-- <P style="margin:40vh">HELLO</P> -->
    <button class="btn_new">Add data</button>
    <!-- TABLE  -->
    <div class="table-wrapper" style="margin:100px">
        <table>
            <tr class="header-table">
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>email</th>
                <th>password</th>
                <th>image</th>
                <th class="remove">Edit</th>
                <th class="remove">X</th>
            </tr><br>
       <?php
       while($row = mysqli_fetch_assoc($all_data)){
        ?>  
            <tr class="tr">
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><?php echo $row["image"]; ?></td>
                <td class="remove"><i class="fa-sharp fa-solid fa-pen-to-square"></i></td>
                <td class="remove"><i class="fa-solid fa-trash"></i></td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>