<?php 
   $connection_team = mysqli_connect("localhost","root","","Dashboard");
   if(!$connection_team){
       die("connection death");
   }
    $all_data_nav = $connection_team->query("SELECT * FROM `navbar`;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\PHP\Login\Clone\css\home.css">
    <script src="https://kit.fontawesome.com/c90b4e63b2.js" crossorigin="anonymous"></script>
    <title>home</title>
</head>
    <script>
// var x = function confirm(){
//     prompt('Are you really want to delete this data?');
// }
// if(x=true){
    
// }

    </script>
<body class="body">
   <div class="global">
      <?php include("/Applications/XAMPP/xamppfiles/htdocs/PORTAL/PORTAL/component/card/card.php"); ?>
        <!-- TABLE  -->
        <a href="\PORTAL\PORTAL\Dashboard\SQL\INSERT\nav\nav-ins.php"><button class="btn_new5">Enroll Comunication</button></a>
        <div class="table-wrapper-home">
            <table class="table-home">
                <tr class="header-table">
                    <th>id</th>
                    <th>header</th>
                    <th>link</th>
                    <th>image URL</th>
                    <th class="remove">Edit</th>
                    <th class="remove">X</th>
                </tr><br>
        <?php
        $i=0;
        while($nav = mysqli_fetch_assoc($all_data_nav)){
            ?>  
                <tr class="tr">
                    <td><?php echo $nav["id"]; ?></td>
                    <td><?php echo $nav["header"]; ?></td>
                    <td><?php echo $nav["link"]; ?></td>
                    <td><img class="image-table-team" src="<?php echo $nav["image"]; ?>" alt=""></td>
                    <td class="remove"><i class="fa-sharp fa-solid fa-pen-to-square"></i></td>
                    <td class="remove"><a href="/PORTAL/PORTAL/Dashboard/SQL/Function/del-team.php?userid=<?php echo $row["id"]; ?>" ><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            <?php
             $i++;
                }
            ?>
            </table>
        </div>
   </div>
</body>

<!-- STYLE CSSSSSSSSSSSSSSS -->
<style>
    .image-table-team{
    width: 40px;
    height: 40px;
    border-radius: 3px;
    object-fit: cover;
}
body{
    overflow-y: scroll;
    width: 100vw;
}
.global{
    overflow-y: scroll;
}
.navbar{
    position: sticky;
    top: 0px;
}
.container-side-bar{
            display: block;
            overflow-x: hidden;
            background-color: #f5fefd25;
            box-shadow: rgba(0, 0, 0, 0.057) 1.95px 1.95px 2.6px;
            position: fixed; 
            top:40px; 
            height: 99vh;
            /* position: fixed; */
        }

/* TABLE SHOW DATABASE */
.table-home{
    border-collapse: collapse;
    margin: auto;
    white-space: nowrap;    
    text-overflow: ellipsis;
    overflow-y: hidden;
    width: 76vw;
    margin-top: 0%;
    position:relative;
    overflow-x: hidden;
}
.container-right-side{
    width: 100vw;
    margin: auto;
    display: flex;
    margin-left: 20vw;
}
.table-wrapper-home{
    margin: 0;
    max-width: 76vw;
    overflow: hidden;
    border-radius: 15px;
}
td, th{
    /* border: 1px solid #dddddd ; */
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.tr td{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 0vw;
    min-width: 5px;
}
tr td{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    border-bottom: 1px solid #dddddd;
}
.tr:nth-child(even) {background: #cccccca5}
.tr:nth-child(odd) {background:#dfe3ee;
    background: rgb(238,174,202);
background: linear-gradient(90deg, rgba(238,174,202,.3) 0%, rgba(148,187,233,.4) 100%);}
.tr:hover:nth-child(even) {background: #cccccca5}
.tr:hover:nth-child(odd) {background: #dfe3ee;
    background: rgb(238,174,202);
background: linear-gradient(90deg, rgba(238,174,202,.3) 0%, rgba(148,187,233,.4) 100%);}
td{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: center;
    padding: 8px 0px;
}
.tr:hover{
    cursor: pointer;
    background-color: #dddddd1c;
}
td:hover{
    cursor: pointer;
    background-color: #1495ff1c;
    background: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,.4) 0%, rgba(148,187,233,.1) 100%);
}
.header-table{
    background-color: #009879;
    position: sticky;
    top: -1px;
    min-width: 5px;
    background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}
tr .remove{
    max-width: 1vw;
    padding-right: 0px;
    padding-bottom: 0px;
}
.header-table th{
    color: white;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family:'Courier New', Courier, monospace;
}
.body{
    overflow-y: hidden;
}

</style>
</html>