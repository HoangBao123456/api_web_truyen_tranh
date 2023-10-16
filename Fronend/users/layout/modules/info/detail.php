<?php
get_header();
$id = $_GET['id'];
$info_chapter = db_render("api/stories/get_by-id/{$id}");
$render = db_render('api/categories/get_list_categories');
$chapter = db_render("api/chapter/get_list_chapter/{$id}");
?>
<div class="content">
    <div class="intro">
        <div class="title-list">
            <h2>
                <a href="">Thông tin truyện</a>
            </h2>
        </div>
        <div class="index-intro">
            <div class="images">
                <img src="<?php echo $info_chapter['images'] ?>" alt="">
            </div>
            <div class="title">
                <h3 class="story"><?php echo $info_chapter['name'] ?></h3>
                <div class="stars">đánh giá: <strong><?php echo $info_chapter['stars'] ?></strong> / 10</div>
                <p><?php echo $info_chapter['descr'] ?></p>
            </div>
        </div>
        <div class="story_detail">
            <div class="info">
                <p>
                    <strong>Tác giả: </strong>
                    <a href="">Tịch tiểu tặc</a>
                </p>
            </div>
            <div class="info">
                <p>
                    <strong>Thể loại: </strong>
                    <a href="">huyển tưởng</a>
                </p>
            </div>
            <div class="info">
                <p>
                    <strong>Trạng thái: </strong>
                    <a href="">full</a>
                </p>
            </div>
        </div>
        <div class="list-index">
            <div class="list-story">
                <div class="title-list">
                    <h2>
                        <a href="">Danh sách chương</a>
                    </h2>
                </div>
                <div class="list_chapter">
                    <ul>
                        <?php
                        foreach ($chapter as $item) {
                        ?>
                            <li><a href="?mod=chapter&act=main"><?php echo $item['name_chapter'] ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="list-side">
                <div class="list-cat">
                    <div class="title-list">
                        <h2><span>thể loại truyện</span></h2>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($render as $item) {
                        ?>
                            <div class="col">
                                <div class="col-right">
                                    <a href="?mod=category&act=detail"><?php echo $item['name_categories'] ?></a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<?php
get_footer()
?>