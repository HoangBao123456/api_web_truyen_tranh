<?php
$render = db_render('api/stories/get_list_stories');
?>
<?php
foreach ($render as $item) {
?>
    <div class="item">
        <a href="?mod=info&act=detail&id=<?php echo $item['id'] ?>">
            <img src="<?php echo $item['images'] ?>" alt="">
            <div class="title">
                <div class="name">
                    <h3><?php echo $item['name'] ?></h3>
                </div>
            </div>
        </a>
    </div>
<?php
}
?> 