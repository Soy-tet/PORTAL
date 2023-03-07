<?php 
    $connection_note = mysqli_connect("localhost","root","","NOTE");
    if(!$connection_note){
        die("connection death");
    }
    $userid = $_GET['userid'];
    $result8 = mysqli_query($connection_note,"SELECT * FROM `note_area` where `id` = '$userid';");
    $data_note8 = mysqli_fetch_assoc($result8);
    // $data_check = isset($data_note8['textarea']);
    // $result_note = mysqli_query($connection_note,"SELECT * FROM `note_area`;");
    // if( isset($_POST["text"])){
        // $text = $_POST["text"];
        // $data_check = isset($data_note8['textarea']);
        if(isset($_POST["text"])){
            $text = $_POST["text"];
            $result = mysqli_query($connection_note,"INSERT INTO `note_area` (`id`, `textarea`, `time`) VALUES ('$userid', '$text', CURRENT_TIME());");
        }
    // } 
    // else{
       
    // }
 ?>
<div class="container_center" id="note_pad">
            <div class="scroll">
                <div class="pano_content">
                  <img src="<?php echo $data_note['image']; ?>" alt="">
                    <button type="submit" class="button-38" role="button">SAVE</button>
                </div>
                <div class="container_note">
                    <form method="post" action="#">
                        <input name="text" type="text"  id="note" value="<?php
          if($data_note8 == false){
            echo "Please delete me and input your note here!";
            }
        else{
            echo $data_note8['textarea'];
        }
                         ?>">
                        <input type="submit" value="submit">
                        <button type="submit" class="button-38" role="button">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
        <style>
            #note{
                height: 40vh;
                width: 57vw;
                margin-left: 1.4vw;
                margin-top: 10px;
            }
            .container_note{
                
            }
            input{
                border: none;
                background-color: rgb(221, 221, 221);
            }
            input:hover{
                border: none;
            }
        </style>