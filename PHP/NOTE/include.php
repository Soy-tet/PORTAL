<?php 
    session_start();
    include("../../SQL/Function/chack_session.php");
    include('../../SQL/CONNECTION/conn-INDEX.php');
    require_once('head.php');
    include('../../Dashboard/SQL/CONNECTION/conn-team.php');
    require_once('./css.php');
    include("../../SQL/CONNECTION/conn-dashboard.php");
    ?>