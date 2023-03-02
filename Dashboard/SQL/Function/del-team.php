<?php 
   $connection_team = mysqli_connect("localhost","root","","team");
   if(!$connection_team){
       die("connection death");
   }
   $userid = $_GET["userid"];
   $useridPlus = $userid+1;
    $sql = "DELETE FROM `team_login`  WHERE id='$userid';";
    if (mysqli_query($connection_team, $sql)) {
        echo "Record deleted successfully";
        // header('location: /PORTAL/PORTAL/Dashboard/index.php');
        $count = mysqli_query($connection_team, "SELECT COUNT(*) FROM `team_login`;");
        $data4 = mysqli_fetch_assoc($count);
        $count5 = implode("",$data4);
        while($useridPlus< 50){
            mysqli_query($connection_team,'UPDATE `team_login` SET id = $userid WHERE id = $useridPlus;');
            echo"hello";
            echo $useridPlus;
            echo $userid;
            $useridPlus++;
        }
    } else {
        echo "Error deleting record: " . mysqli_error($connection_team);
    }
    mysqli_close($connection_team);
?>
<script Type="javascript">alert("JavaScript Alert Box by PHP")</script>
