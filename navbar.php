<div class="container-nav">
        <div class="container-left">
        <label class="switch">
        <input class="switch__input" type="checkbox" data-theme-toggle>
        <span class="switch__slider"></span>
        </label>
            <div class="icon"><?php echo $data['icon']; ?></div>
            <div class="navBar-head">@Leader-Username</div>
        </div>
        <div class="container-right">
            <?php
              $connection = mysqli_connect("localhost","root","","Dashboard");
              if(!$connection){
                  die("connection death");
              }
            $data_nav = mysqli_query($connection,"SELECT * FROM `navbar`;");
             while($data_nav_db = mysqli_fetch_assoc($data_nav)){ ?>
            <a href="<?php echo $data_nav_db['link']; ?>"><div class="header"><?php echo $data_nav_db['header']; ?></div></a>
           <?php } ?>
            <!-- <div class="icon-social"><?php echo $data['icon']; ?></div> -->
        </div>
</div>