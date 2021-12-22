<?php 
    // require('public/head.php');
    require('s-public/head.php');
    require('s-public/requirelogin.php');
    $login = new Dashboardlogin();
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if($login->db_login($user,$pass)){
            return true;
        }
        $login = null;
    }
?>

<div class="container my-5">
    <h1 class="text-center">Login to Continue.....</h1>
    <form action="sl-login.php" method="post">
        <div class="card p-5">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-outline-primary" name="submit" id="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
<?php 
    
?>

</body>

</html>