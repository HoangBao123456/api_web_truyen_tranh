<?php
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar');
$name = $_GET['name'];
$render = db_render("api/categories/get_by-name/{$name}");
if (isset($_POST['btn_serch'])) {
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    };
    redirect_to("?mod=category&act=search&name={$name}");
}
?>
<div class="app_content">
    <div class="content_wrapper">
        <div class="content_row">
            <div class="content_header">
                <h3>04 Danh mục</h3>
            </div>
            <div class="add_users">
                <a href="?mod=category&act=create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Thêm</span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card_body">
                <form method="post" class="form_serch">
                    <div class="search search_input ">
                        <input type="text" class="form_control " name="name" placeholder="Tìm danh mục" value="">
                    </div>
                    <label class="search">
                        <button class="btn" type="submit" name="btn_serch">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            Tìm kiếm
                        </button>
                    </label>
                </form>
            </div>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <?php echo $render['name_categories'] ?>
                                </td>
                                <td>
                                <?php echo $render['descr'] ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="?mod=category&act=update&id=<?php echo $render['id'] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
get_layout_admin('sections', 'footer_admin')
?>