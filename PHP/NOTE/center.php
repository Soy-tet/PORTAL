<div class="container_center">
            <div class="scroll">
                <div class="pano_content">
                    <img src="https://c4.wallpaperflare.com/wallpaper/1008/896/1021/simple-background-digital-art-books-magic-wallpaper-preview.jpg" alt="">
                    <a href="/PORTAL/PORTAL/PHP/note_add/note_add.php"><button class="button-38" role="button">Let's add your note</button></a>
                </div>
                <div class="container_team">
                <?php
                  $connection_note = mysqli_connect("localhost","root","","note");
                  if(!$connection_lesson2){
                      die("connection death");
                  }
                  $result_note = mysqli_query($connection_note,"SELECT * FROM `note_book`;");
               while($row10 = mysqli_fetch_assoc($result_note)){
                ?>  
                    <div class="container_card_team">
                        <img src="<?php echo $row10['image']; ?>" alt="">
                        <p class="name_team"><?php echo $row10['note']; ?></p>
                        <p class="team_member">25,436k members</p>
                    </div>
                    <?php
                     } ?>
                     <div class="container_card_team">
                        <a href="/PORTAL/PORTAL/PHP/note_add/note_add.php"> <img src="https://cdn-icons-png.flaticon.com/512/9572/9572704.png" alt="folder"></a>
                         <p class="name_team">add note</p>
                     </div>
                </div>
            </div>
            <!-- <?php 
            $x =13;
            $result5= mysqli_query($connection_team,"SELECT * FROM `team_login` where id = $x;");
            $data = mysqli_fetch_assoc($result5);
            echo implode("",$data);
             ?> -->
        </div>