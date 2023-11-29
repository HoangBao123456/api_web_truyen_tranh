<?php
get_head();
if (isset($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "vui lòng không để trống username";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "vui lòng không để trống password";
    } else {
        $password = $_POST['password'];
    }

    if (empty($error)) {
        $data = array(
            'username' => $username,
            'password' => $password
        );
                redirect_to("?mod=home&act=main");
    };
}
?>
<div class="form_login">
    <div class="box">
        <form action="" method="POST">
            <h2>LOGIN</h2>
            <div class="username inputbox">
                <input type="text" name="username" id="username" placeholder="username">
                <p><?php if(isset($error['username'])) echo $error['username'] ?></p>
            </div>
            <div class="password inputbox">
                <input type="password" name="password" id="password" placeholder="password">
                <p><?php if(isset($error['password'])) echo $error['password'] ?></p>
            </div>
            <input type="submit" name="btn_login" id="login" value="Đăng nhập">
        </form>
    </div>
</div>