<?php 
    session_start();
    require_once('./SQL/CONNECTION/conn-dashboard.php');
    include("./SQL/Function/chack_session.php");
    include('./SQL/CONNECTION/conn-INDEX.php');
    require_once('head.php');
    include('./Dashboard/SQL/CONNECTION/conn-team.php');
    require_once('./css.php');
    include('./SQL/CONNECTION/conn-note.php');
    // include("/PORTAL/PORTAL/SQL/CONNECTION/conn-dashboard.php");
    ?>