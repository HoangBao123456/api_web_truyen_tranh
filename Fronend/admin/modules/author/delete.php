<?php
    $id = $_GET['id'];
    db_delete_author($id,'api/author/delete-author');
    redirect_to("?mod=author&act=main");
?>
