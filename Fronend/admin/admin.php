<?php
    require './lib/admin.php';
    get_layout_admin('sections','head_admin');
    get_layout_admin('sections','siderbar')
?>
    <div class="app_content">
        <div class="content_wrapper">
            <div class="content_header">
                <h3>Tổng quan</h3>
            </div>
            <div class="content_match">
                <div class="card card_left">
                    <div class="card_body">
                        <h5 class="card_title">Chào mừng admin@gmail.com! 🎉</h5>
                        <h4 class="text">Đây là hệ thống quản lý truyện !</h4>
                    </div>
                </div>
                <div class="card card_right">
                    <div class="card_header">
                        <h5 class="card_title">Thống kê</h5>
                    </div>
                    <div class="card_body_right">
                        <div class="left">
                            <div class="badge"><svg xmlns="http://www.w3.org/2000/svg" style="    width: 40px;
                                    fill: #917991;
                                    height: 40px;" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                </svg>
                            </div>
                            <div class="card_info">
                                <h5>77</h5>
                                <small>Truyện</small>
                            </div>
                        </div>
                        <div class="right">
                            <div class="badge">
                                <svg xmlns="http://www.w3.org/2000/svg" style="    width: 40px;
                                    fill: #917991;
                                    height: 40px;" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"></path>
                                </svg>
                            </div>
                            <div class="card_info">
                                <h5>87795</h5>
                                <small>Chương</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
    get_layout_admin('sections','footer_admin')
   ?>