<?php
    get('sections','head');
    
    if(isset($_POST['btn_login'])){
        $error = array();
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
                'username' => $username,
                'password' => $password
            );
            redirect_to("?");
        }
    }
?>
<div class="form_login">
    <div class="box">
        <form action="" method="POST">
            <h2>LOGIN</h2>
            <div class="username inputbox">
                <input type="username" name="username" id="username" placeholder="username">
                <?php echo show_error('username') ?>
            </div>
            <div class="password inputbox">
                <input type="password" name="password" id="password" placeholder="password">
                <?php echo show_error('password') ?>
            </div>
            <input type="submit" name="btn_login" id="login" value="Đăng nhập">
            <div class="link">
                <a href="?mod=users&act=register">Đăng ký</a>
            </div>
        </form>
    </div>
</div>