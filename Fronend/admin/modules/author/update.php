<?php
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar');
$id = $_GET['id'];
$render = db_render("api/author/get_by-author-id/{$id}");
if(isset($_POST['btn_add'])){
    $error = array();
    if(empty($_POST['name'])){
        $error['name'] = "Vui lòng nhập tên";
    }else{
        $name = $_POST['name'];
    }
    if(empty($error)){
        db_update_author($id,$name,'api/author/update-author');
        redirect_to('?mod=author&act=main');
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
                                <label>Tên tác giả</label>
                                <input type="text" name="name" value="<?php echo $render['author_name'] ?>">
                                <p><?php if(isset($error['name'])) echo $error['name'] ?></p>
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
get_layout_admin('sections', 'footer_admin');
?>