<?php 
    // require('server/dashboard_log/s-app/dashboardlogin.php');
    require('s-app/dashboard_log/dashboardlogin.php');

    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $login = new Dashboardlogin();
        if($login->db_login($user,$pass)){
            return true;
        }
        $login = null;
    }
?>