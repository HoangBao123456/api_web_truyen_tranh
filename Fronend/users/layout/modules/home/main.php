<?php
get_header();
$render = db_render('api/categories/get_list_categories')
?>
<div class="content">
    <div class="intro">
        <div class="title-list">
            <h2>
                <a href="">TRUYỆN HOT</a>
            </h2>
        </div>
        <div class="index-intro">
            <?php
            get('snippets', 'story_item');
            ?>
        </div>
        <div class="list-index">
            <div class="list-story">
                <div class="title-list">
                    <h2>
                        <a href="">Truyện mới cập nhật</a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" style="fill: #4E4E4E;">
                            <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                        </svg>
                    </h2>
                </div>
                <div class="list-new">
                    <table>
                        <?php
                        get('snippets', 'story_item_no_img');
                        ?>
                    </table>
                </div>
            </div>
            <div class="list-side">
                <div class="list-history">
                    <div class="title-list">
                        <h2><span>Truyện đang đọc</span></h2>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" style="fill: #4E4E4E;">
                                        <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                    </svg>
                                    <a href="">Đỉnh phong thiên hạ</a>
                                </h3>
                            </td>
                            <td class="border-right">
                                <div class="text-info">
                                    <a href="">
                                        <span class="chapter">Đọc tiếp C2</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" style="fill: #4E4E4E;">
                                        <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                    </svg>
                                    <a href="">Đỉnh phong thiên hạ</a>
                                </h3>
                            </td>
                            <td class="border-right ">
                                <div class="text-info">
                                    <a href="">
                                        <span class="chapter">Đọc tiếp C2</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
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
        <div class="banner">
            <a href=""><img src="https://iads.staticscdn.net/ads/2022/05/24/images/wFiF08PRg6xyQrTflmgp4MqmZX9wvMGybosoM8na.png" alt=""></a>
        </div>
        <div class="list-complete">
            <div class="title-list">
                <h2>
                    <a href="">Truyện đã hoàn thành</a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" style="fill: #4E4E4E;">
                        <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                    </svg>
                </h2>
            </div>
            <div class="row">
                <?php
                get('snippets', 'story_item_full');
                ?>
            </div>
        </div>
        <div class="ads">
            <div class="ads-head">
                <span>Cơ hội dành cho bạn</span>
            </div>
            <div class="ads-body">
                <?php
                for ($i = 0; $i < 4; $i++) {
                    get('snippets', 'ads_item');
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
?>