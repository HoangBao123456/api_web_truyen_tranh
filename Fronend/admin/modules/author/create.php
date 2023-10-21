<?php
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar');
if(isset($_POST['btn_add'])){
    $error = array();
    if(empty($_POST['name'])){
        $error['name'] = 'vui lòng nhập tên tác giả';
    }else{
        $name = $_POST['name'];
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
                                <input type="text" name="name" value="">
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn_submit" name="btn_add">
                                Tạo mới
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