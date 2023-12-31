<?php
$render = db_render("api/account/get_account");
$sum = db_render("api/account/get_sum");
$sum_no = db_render("api/account/get_sum-no");
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar');
$name = $_GET['name'];
$render = db_render("api/account/get_by-account/{$name}");
if(isset($_POST['btn_serch'])){
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
    };
    redirect_to("?mod=user&act=search&name={$name}");
}
?>
<div class="app_content">
    <div class="content_wrapper">
        <div class="content_row">
            <div class="content_header">
                <h3>01 Người dùng</h3>
            </div>
            <div class="add_users">
                <a href="?mod=user&act=create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Thêm</span>
                </a>
            </div>
        </div>
        <div class="content_match">
            <div class="card card_users">
                <div class="card_body">
                    <h3 class="card_title"><?php echo $sum['sum_user'] ?></h3>
                    <span>Tổng số người dùng</span>
                </div>
                <div class="avatar">
                    <span class="avatar_content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="card card_users">
                <div class="card_body">
                    <h3 class="card_title"><?php echo $sum_no['sum_user_no'] ?></h3>
                    <span>Số người dùng không hoạt động</span>
                </div>

                <div class="avatar">
                    <span class="avatar_content no_avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="table card">
        <div class="card">
            <div class="card_body">
                <form method="post">
                    <div class="serch">
                        <input type="text" name="name" class="form_control form_select" placeholder="Tìm kiếm người dùng">
                    </div>
                    <label class="button_search">
                        <button name="btn_serch">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            Tìm kiếm
                        </button>
                    </label>
                </form>
            </div>
            <div class="table_responsive">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Họ và tên</th>
                            <th>Vai trò</th>
                            <th>Trạng thái</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-content">
                                            <?php echo $render['avatar'] ?>
                                        </span>
                                    </div>
                                </td>
                                <td><?php echo $render['fullname'] ?></td>

                                <td>
                                    <span class="users">
                                        <?php echo $render['role'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="active">
                                        <?php echo $render['status'] ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="?mod=user&act=update&id=<?php echo $render['id'] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-medium-2 text-body">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
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