<div class="container-nav">
        <div class="container-left">
        <label onclick="note()" class="switch">
        <input onclick="note()" class="switch__input" type="checkbox" data-theme-toggle>
        <span onclick="note()" class="switch__slider"></span>
        </label>
            <div class="icon"><?php echo $data['icon']; ?></div>
            <a href="./index.php"><div class="navBar-head">@After_You</div></a>
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
           <a onclick="note()" href="#" class="header">Note</a>
           <a onclick="outcome()" href="#" class="header">Outcome</a>
        </div>
</div>