<?php
$render = db_render("api/new_stories/get_list_new_stories");

?>
<?php
foreach ($render as $item) {
?>
<tr>
    <td>
        <h3>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" style="fill: #4E4E4E;">
                <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
            </svg>
            <a href="?mod=info&act=detail&id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
            <span class="label-new">
                New
            </span>
        </h3>
    </td>
    <td>
        <div class="hiden">
            <a href=""><?php echo $item['name_categories'] ?></a>,
        </div>
    </td>
    <td>
        <div class="text-info">
            <a href="">
                <span class="chapter">Mới ra</span>
            </a>
        </div>
    </td>
</tr>
<?php
}
?>
