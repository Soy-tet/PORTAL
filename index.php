<?php 
    session_start();
    include("./SQL/Function/chack_session.php");
    include('./SQL/CONNECTION/conn-INDEX.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="./ICON/other\favicon01.ico"/>
    <link rel="stylesheet" href="./CSS/index.css">
    <script src="https://kit.fontawesome.com/c90b4e63b2.js" crossorigin="anonymous"></script>
    <title>Knowlegde || Lesson</title>
</head>
<body>
    <div class="whole">
        
<!-- NAV BAR  -->
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
<!-- CONTENT  -->
    <div class="container">
        <!-- SIDE Left BAR  -->
        <div class="container_left">
            <ul>
                <h2>
                    <!-- <img src=".\ICON\favicon.ico" alt=""> -->
                    <p class="btn-best">Best</p>
                    <p class="top-team">Top Super team</p>
                </h2>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-3tF7dmiYqxfHfnb.png" alt="">
                        <div class="team_des">
                          <p>O'Doyle</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-6lSqkfgfPtJXqAB.png" alt="">
                        <div class="team_des">
                          <p>Bowser</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-asUFJw29SCZIOBA.png" alt="">
                        <div class="team_des">
                          <p>Aspect</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-cv3Pnd0C6ipOr79.png" alt="">
                        <div class="team_des">
                          <p>Kraken</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <button class="button-37" role="button">browse all +100</button>
<!-- CARD NEWS  -->
<p class="btn-best">News</p>
                                <div class="plan-card">
                    <h2>Premuim Plan<span>For business services</span></h2>
                    <div class="etiquet-price">
                        <p>254.99</p>
                        <div></div>
                    </div>
                    <div class="benefits-list">
                        <ul>
                            <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                </svg><span>Analysis</span></li>
                            <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                </svg><span>Consulting</span></li>
                            <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                </svg><span>Facilitate</span></li>
                        </ul>
                    </div>
                    <div class="button-get-plan">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-rocket">
                                <path d="M156.6 384.9L125.7 353.1C117.2 345.5 114.2 333.1 117.1 321.8C120.1 312.9 124.1 301.3 129.8 288H24C15.38 288 7.414 283.4 3.146 275.9C-1.123 268.4-1.042 259.2 3.357 251.8L55.83 163.3C68.79 141.4 92.33 127.1 117.8 127.1H200C202.4 124 204.8 120.3 207.2 116.7C289.1-4.07 411.1-8.142 483.9 5.275C495.6 7.414 504.6 16.43 506.7 28.06C520.1 100.9 516.1 222.9 395.3 304.8C391.8 307.2 387.1 309.6 384 311.1V394.2C384 419.7 370.6 443.2 348.7 456.2L260.2 508.6C252.8 513 243.6 513.1 236.1 508.9C228.6 504.6 224 496.6 224 488V380.8C209.9 385.6 197.6 389.7 188.3 392.7C177.1 396.3 164.9 393.2 156.6 384.9V384.9zM384 167.1C406.1 167.1 424 150.1 424 127.1C424 105.9 406.1 87.1 384 87.1C361.9 87.1 344 105.9 344 127.1C344 150.1 361.9 167.1 384 167.1z"></path>
                            </svg>
                            <span class="btn-start">START PROJECT</span>
                        </a>
                    </div>
                </div>
            </ul>
        </div>
        <!-- CENTER  -->
        <div class="container_center">
            <div class="pano_content">
                <img src=".\IMG\turis.jpeg" alt="">
            </div>
        </div>
        <!-- SIDE RIGHT CONTENT -->
        <div class="container_right">

        </div>
    </div>
    
    </div>
</body>
</html>