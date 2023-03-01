<?php 
   $connection_team = mysqli_connect("localhost","root","","Dashboard");
   if(!$connection_team){
       die("connection death");
   }
   $id = $_GET["userid"];
    $sql = "DELETE FROM `Content`  WHERE id='$id';";
    if (mysqli_query($connection_team, $sql)) {
        echo "Record deleted successfully";
        header('location: /PORTAL/PORTAL/Dashboard/index.php');
        echo '<script type="text/javascript">';
        echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
        echo '</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($connection_team);
    }
    mysqli_close($connection_team);
?>
<script Type="javascript">alert("JavaScript Alert Box by PHP")</script>
