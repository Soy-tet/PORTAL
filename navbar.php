<div class="container-nav">
        <div class="container-left">
            <div class="icon"><?php echo $data['icon']; ?></div>
            <div class="navBar-head">@Leader-Username</div>
        </div>
        <div class="container-right">
            <?php while($data1 = mysqli_fetch_assoc($result)){ ?>
            <div class="header"><?php echo $data1['title']; ?></div>
           <?php } ?>
            <div class="icon-social"><?php echo $data['icon']; ?></div>
        </div>
</div>