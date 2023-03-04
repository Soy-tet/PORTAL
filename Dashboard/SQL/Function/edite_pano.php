<?php 
   $connection_team = mysqli_connect("localhost","root","","Dashboard");
   if(!$connection_team){
       die("connection death");
   }
   $userid = $_GET["userid"];
   $useridPlus = $userid+1;
    $sql = "UPDATE `pano` SET  WHERE id='$userid';";
    if (mysqli_query($connection_team, $sql)) {
        echo "Record deleted successfully";
        header('location: /PORTAL/PORTAL/Dashboard/index.php');
        $count = mysqli_query($connection_team, "SELECT COUNT(*) FROM `pano`;");
        $data4 = mysqli_fetch_assoc($count);
        $count5 = implode("",$data4);}
    else {
        echo "Error deleting record: " . mysqli_error($connection_team);
    }
    mysqli_close($connection_team);
?>
<script Type="javascript">alert("JavaScript Alert Box by PHP")</script>
