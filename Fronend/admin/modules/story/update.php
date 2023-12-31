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

if (isset($_POST['btn_add_chapter'])) {
    $error = array();
    if (empty($_POST['chapter'])) {
        $error['chapter'] = "Vui lòng nhập chapter";
    } else {
        $chapter = $_POST['chapter'];
    }
    if (empty($_POST['name_chapter'])) {
        $error['name_chapter'] = "Vui lòng nhập name_chapter";
    } else {
        $name_chapter = $_POST['name_chapter'];
    }
    if (empty($_POST['content'])) {
        $error['content'] = "Vui lòng nhập content";
    } else {
        $content = $_POST['content'];
    }

    if (empty($error)) {
        $result = db_create_chapter($id, $chapter, $name_chapter, $content, 'api/chapter/create-chapter');
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

<div class="app_content">
    <div class="content_wrapper">
        <div class="content_row">
            <div class="content_header">
                <h3>Thêm chapter</h3>
            </div>
        </div>
        <div class="content_match">
            <div class="card">
                <div class="card_body">
                    <form action="" method="post">
                        <div class="display">
                            <div class="sub chapter">
                                <label>chapter</label>
                                <input type="text" name="chapter" value="">
                                <p></p>
                            </div>
                            <div class="sub name_chapter">
                                <label>tên chapter</label>
                                <input type="text" name="name_chapter" value="">
                                <p></p>
                            </div>
                        </div>
                        <div class="display">
                            <div class="sub content">
                                <label>content</label>
                                <textarea name="content" id="" cols="40" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn_submit" name="btn_add_chapter">
                                Thêm
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
