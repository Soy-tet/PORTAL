<div class="container_center">
            <div class="scroll">
                <div class="pano_content">
                    <img src="https://aitsrajampet.ac.in/images/pdf/ai/Artificial-Intelligence-and-Machine-Learning.png" alt="">
                    <a href="\PORTAL\PORTAL\Dashboard\SQL\INSERT\Clone\team.php"><button class="button-38" role="button">Being Leadership</button></a>
                </div>
                <h4 class="suggestion" style="font-size: small;">Recommendation</h4>
                <div class="container_team">
                <?php
               while($row2 = mysqli_fetch_assoc($result_team2)){
                ?>  
                    <div class="container_card_team" id="box">
                        <img src="<?php echo $row2['image']; ?>" alt="">
                        <p class="name_team"><?php echo $row2['name']; ?></p>
                        <p class="team_member">25,436k members</p>
                    </div>
                    <?php
                     } ?>
                </div>
            </div>
            <!-- <?php 
            $x =13;
            $result5= mysqli_query($connection_team,"SELECT * FROM `team_login` where id = $x;");
            $data = mysqli_fetch_assoc($result5);
            echo implode("",$data);
             ?> -->
        </div>