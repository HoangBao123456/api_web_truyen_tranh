<?php
$render = db_render('api/stories/get_list_stories');
get('sections','head');
?>
<?php
foreach ($render as $item) {
?>
    <div class="item">
        <a href="?mod=info&act=detail&id=<?php echo $item['id'] ?>">
            <img src="<?php echo $item['images'] ?>" alt="">
            <div class="caption">
                <h3><?php echo $item['name'] ?></h3>
                <span>Full - 250 chương</span>
            </div>
        </a>
    </div>
<?php
}
?>