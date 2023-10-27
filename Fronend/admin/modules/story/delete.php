<?php
    $id = $_GET['id'];
    db_delete_story($id,"api/stories/delete-stories");
    redirect_to("?mod=story&act=main");
?>