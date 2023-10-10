<?php
    get('sections','head');
    if(isset($_POST['btn_register'])){
        $error = array();
        if(empty($_POST['name'])){
            $error['name'] = "vui lòng không để trống name";
        }else{
            $name = $_POST['name'];
        }

        if(empty($_POST['username'])){
            $error['username'] = "vui lòng không để trống username";
        }else{
            $username = $_POST['username'];
        }

        if(empty($_POST['password'])){
            $error['password'] = "vui lòng không để trống password";
        }else{
            $password = $_POST['password'];
        }

        if(empty($error)){
            $data = array(
                'name' => $name,
                'username' => $username,
                'password' => $password
            );
        }
    }
?>

<div class="form_login">
    <div class="box">
        <form action="" method="POST">
            <h2>REGISTER</h2>
            <div class="name inputbox">
                <input type="text" name="name" id="name" placeholder="name">
                <?php echo show_error('name') ?>
            </div>
            <div class="username inputbox">
                <input type="username" name="username" id="username" placeholder="username">
                <?php echo show_error('username') ?>
            </div>
            <div class="password inputbox">
                <input type="password" name="password" id="password" placeholder="password">
                <?php echo show_error('password') ?>
            </div>
            <input type="submit" name="btn_register" id="login" value="Đăng Ký">
            <div class="link">
                <a href="?mod=users&act=login">Đăng nhập</a>
            </div>
        </form>
    </div>
</div>