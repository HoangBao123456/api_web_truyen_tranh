<?php
require './lib/admin.php';
get_layout_admin('sections', 'head_admin');
get_layout_admin('sections', 'siderbar')
?>
<div class="app_content">
    <div class="content_wrapper">
        <div class="content_row">
            <div class="content_header">
                <h3>01 Người dùng</h3>
            </div>
            <div class="add_users">
                <a href="">
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
                    <h3 class="card_title">2</h3>
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
                    <h3 class="card_title">0</h3>
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
        <div class="card_body">dsa</div>
    </div>
</div>
</div>


<?php
get_layout_admin('sections', 'footer_admin')
?>