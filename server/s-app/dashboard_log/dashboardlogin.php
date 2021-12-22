<?php 
    // require('../../app/config/config.php');
    // require('../../app/controller/Database.php');
    require('s-app/config/config.php');
    require('s-app/controller/Database.php');

    class Dashboardlogin extends Database {
        public function db_login($user,$pass){
            $sql = "SELECT * FROM `dashboard_login` WHERE `admin_name` = '" . $user . "'";
            $stmt = $this->connect()->prepare($sql);
            $check_name = $stmt->execute([$user]);
            $password = $stmt->fetch();
            if($check_name && password_verify($pass,$password['admin_password'])){
                    $sql = "SELECT * FROM `dashboard_login` WHERE `admin_password` = '" . $pass . "'";
                    $stmt = $this->connect()->prepare($sql);
                    $check_pass = $stmt->execute([$pass]);
                    if($check_pass){
                        session_start();
                        $_SESSION['username'] = 'admin';
                        $_SESSION['loggedin'] = true;
                        header("Location: https://localhost/travel/server/dashboard.php");
                    }else{
                        echo '
                        <div class="container">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Sorry Password Wrong!</h4>
                                <hr>
                                <p class="mb-0">The password you entered is wrong.</p>
                              </div>
                        </div>
                        ';
                    }
            }else{
                echo '
                        <div class="container">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Sorry Username or Password Wrong!</h4>
                                <hr>
                                <p class="mb-0">The Username or Password you entered is wrong.</p>
                              </div>
                        </div>
                        ';
            }
        }
    }
?>