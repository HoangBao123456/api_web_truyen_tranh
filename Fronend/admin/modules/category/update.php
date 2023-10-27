<?php
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar');
$id = $_GET['id'];
$render = db_render("api/categories/get_by-id/{$id}");
if(isset($_POST['btn_add'])){
    $error = array();
    if(empty($_POST['name'])){
        $error['name'] = 'vui lòng nhập thể loại';
    }else{
        $name = $_POST['name'];
    }
    if(empty($_POST['des'])){
        $error['des'] = 'vui lòng nhập mô tả';
    }else{
        $des = $_POST['des'];
    }
    if(empty($error)){
        db_update_category($id,$name,$des,'api/categories/update-categories');
        redirect_to("?mod=category&act=main");
    }
}
?>
<div class="app_content">
    <div class="content_wrapper">
        <div class="content_match">
            <div class="card">
                <div class="card_body">
                    <form action="" method="post">
                        <div class="display">
                            <div class="sub name">
                                <label>Thể loại</label>
                                <input type="text" name="name" value="<?php echo $render['name_categories'] ?>">
                                <p><?php if(isset($error['name'])) echo $error['name'] ?></p>
                            </div>
                            <div class="sub des">
                                <label>Mô tả</label>
                                <textarea name="des" id="" cols="50" rows="20"><?php echo $render['descr'] ?></textarea>
                                <p><?php if(isset($error['des'])) echo $error['des'] ?></p>
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn_submit" name="btn_add">
                                Cập nhật
                            </button>
                            <a href="?mod=category&act=main">
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