<?php
get_header();
?>
<div class="content">
    <div class="items_start">
        <div class="ct_item">
            <div class="head_title">
                <div class="head_title_global">
                    <h2>
                        <span href="#" title="Truyện hot">Tiên
                            hiệp hay</span>
                    </h2>
                </div>
            </div>

            <?php
            for ($i = 0; $i <= 10; $i++) {
                get('snippets', 'story_item_list');
            }
            ?>
        </div>
        <div class="sticky_top">
            <div class="rounded">
                <p>Danh sách truyện tiên hiệp hay, chọn lọc được cập nhật liên tục.
                    Truyện tiên hiệp thường kể về quá trình tu luyện và khám phá thế giới tu sĩ thần tiên đầy bí ẩn
                    của nhân vật chính.</p>
            </div>
            <div class="rounded">
                <div class="head_title">
                    <div class="title_global">
                        <h2>
                            <span href="#" title="Truyện đang đọc">Thể loại truyện</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <ul class="list_category">
                        <li class="">
                            <a href="#">Tiên hiêp</a>
                        </li>
                        <li class="">
                            <a href="#">Tiên hiêp</a>
                        </li>
                        <li class="">
                            <a href="#">Tiên hiêp</a>
                        </li>
                        <li class="">
                            <a href="#">Tiên hiêp</a>
                        </li>
                        <li class="">
                            <a href="#">Tiên hiêp</a>
                        </li>
                        <li class="">
                            <a href="#">Tiên hiêp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>