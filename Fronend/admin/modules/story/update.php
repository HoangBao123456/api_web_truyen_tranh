<?php
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar');
$id = $_GET['id'];
$render = db_render("api/stories/get_by-id/{$id}");
if (isset($_POST['btn_add'])) {
    $error = array();
    if (empty($_POST['name'])) {
        $error['name'] = "Vui lòng nhập name";
    } else {
        $name = $_POST['name'];
    }
    if (empty($_POST['images'])) {
        $error['images'] = "Vui lòng nhập images";
    } else {
        $images = $_POST['images'];
    }
    if (empty($_POST['des'])) {
        $error['des'] = "Vui lòng nhập des";
    } else {
        $des = $_POST['des'];
    }

    if (empty($error)) {
        $result = db_update_story($id, $name, $images, $des, 'api/stories/update-stories');
        redirect_to("?mod=story&act=main");
    }
}
?>
<div class="app_content">
    <div class="content_wrapper">
        <div class="content_row">
            <div class="content_header">
                <h3>Thêm truyện</h3>
            </div>
        </div>
        <div class="content_match">
            <div class="card">
                <div class="card_body">
                    <form action="" method="post">
                            <div class="display">
                                <div class="sub name">
                                    <label>Tên truyện</label>
                                    <input type="text" name="name" value="<?php echo $render['name'] ?>">
                                    <p><?php if (isset($error['name'])) echo $error['name'] ?></p>
                                </div>
                                <div class="sub images">
                                    <label>link ảnh</label>
                                    <input type="text" name="images" value="<?php echo $render['images'] ?>">
                                    <p><?php if (isset($error['images'])) echo $error['images'] ?></p>
                                </div>
                            </div>
                            <div class="display">
                                <div class="sub des">
                                    <label>Mô tả</label>
                                    <input type="text" name="des" value="<?php echo $render['descr'] ?>">
                                    <p><?php if (isset($error['des'])) echo $error['des'] ?></p>
                                </div>
                            </div>
                            <div class="btn">
                                <button type="submit" class="btn_submit" name="btn_add">
                                    Cập nhật
                                </button>
                                <a href="?mod=story&act=main">
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