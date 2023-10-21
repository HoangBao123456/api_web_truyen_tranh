<?php
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar');
$id = $_GET['id'];
if(isset($_POST['btn_add'])){
    $error = array();
    if(empty($_POST['avatar'])){
        $error['avatar'] = "Vui lòng nhập avatar";
    }else{
        $avatar = $_POST['avatar'];
    }
    if(empty($_POST['name'])){
        $error['name'] = "Vui lòng nhập name";
    }else{
        $name = $_POST['name'];
    }
    if(empty($_POST['username'])){
        $error['username'] = "Vui lòng nhập username";
    }else{
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        $error['password'] = "Vui lòng nhập password";
    }else{
        $password = $_POST['password'];
    }
    if(empty($_POST['role'])){
        $error['role'] = "Vui lòng nhập role";
    }else{
        $role = $_POST['role'];
    }
    if(empty($_POST['status'])){
        $error['status'] = "Vui lòng nhập status";
    }else{
        $status = $_POST['status'];
    }

    if(empty($error)){
        db_update_account($id,$avatar,$name,$username,$password,$role,$status,'api/account/update-account');
    }
}
?>
<div class="app_content">
    <div class="content_wrapper">
        <div class="content_row">
            <div class="content_header">
                <h3>0.1 Thêm người dùng</h3>
            </div>
        </div>
        <div class="content_match">
            <div class="card">
                <div class="card_body">
                    <form action="" method="post">
                        <div class="display">
                            <div class="sub avatar">
                                <label>Avatar</label>
                                <input type="text" name="avatar" value="">
                            </div>
                            <div class="sub name">
                                <label>Họ và tên</label>
                                <input type="text" name="name" value="">
                            </div>
                        </div>
                        <div class="display">
                            <div class="sub username">
                                <label>Tài khoản</label>
                                <input type="text" name="username" value="">
                            </div>
                            <div class="sub password">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" value="">
                            </div>
                        </div>
                        <div class="display">
                            <div class="sub role">
                                <label>Vai trò</label>
                                <select name="role" id="">
                                    <option value="">-Lựa chọn-</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Content">Content</option>
                                </select>
                            </div>
                            <div class="sub status">
                                <label>Trạng thái</label>
                                <select name="status" id="">
                                    <option value="">-Lựa chọn-</option>
                                    <option value="Hoạt Động">Hoạt động</option>
                                    <option value="Ngừng Hoạt Động">Ngừng hoạt động</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn_submit" name="btn_add">
                                Cập nhật
                            </button>
                            <a href="?mod=author&act=main">
                                Quay lại
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_layout_admin('sections', 'footer_admin')
?>