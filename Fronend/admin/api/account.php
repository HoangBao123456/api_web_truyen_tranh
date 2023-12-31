<?php
function db_post_account($avatar, $name, $username, $password, $role, $status, $url)
{
    // URL của API hoặc trang web bạn muốn gửi yêu cầu POST đến
    $url = "https://localhost:7268/{$url}";

    // Dữ liệu bạn muốn gửi trong yêu cầu POST, ví dụ: một mảng dữ liệu
    $data = array(
        'avatar' => $avatar,
        'fullname' => $name,
        'username' => $username,
        'password' => $password,
        'role' => $role,
        'status' => $status,
        'id' => '',
        'sum_user' => '',
        'sum_admin' => '',
        'sum_content' => '',
        'sum_user_no' => ''
    );
    $json_data = json_encode($data);


    // Khởi tạo cURL session
    $ch = curl_init($url);

    // Cấu hình yêu cầu POST
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Chuyển mảng thành chuỗi dữ liệu

    // Thiết lập tùy chọn cho cURL (nếu cần)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Lấy kết quả trả về
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Thực hiện yêu cầu cURL và lưu kết quả vào biến $response
    $response = curl_exec($ch);

    // Kiểm tra lỗi cURL (nếu có)
    if (curl_errno($ch)) {
        echo 'Lỗi cURL: ' . curl_error($ch);
    }

    // Đóng cURL session
    curl_close($ch);

    // Xử lý kết quả
    if ($response) {
        echo 'Kết quả: ' . $response;
    } else {
        echo 'Không có phản hồi hoặc có lỗi.';
    }
}

function db_update_account($id,$avatar, $name, $username, $password, $role, $status, $url)
{
    // URL của API hoặc trang web bạn muốn gửi yêu cầu POST đến
    $url = "https://localhost:7268/{$url}";

    // Dữ liệu bạn muốn gửi trong yêu cầu POST, ví dụ: một mảng dữ liệu
    $data = array(
        'id' => $id,
        'avatar' => $avatar,
        'fullname' => $name,
        'username' => $username,
        'password' => $password,
        'role' => $role,
        'status' => $status,
        'sum_user' => '',
        'sum_admin' => '',
        'sum_content' => '',
        'sum_user_no' => ''
    );
    $json_data = json_encode($data);


    // Khởi tạo cURL session
    $ch = curl_init($url);

    // Cấu hình yêu cầu POST
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Chuyển mảng thành chuỗi dữ liệu

    // Thiết lập tùy chọn cho cURL (nếu cần)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Lấy kết quả trả về
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Thực hiện yêu cầu cURL và lưu kết quả vào biến $response
    $response = curl_exec($ch);

    // Kiểm tra lỗi cURL (nếu có)
    if (curl_errno($ch)) {
        echo 'Lỗi cURL: ' . curl_error($ch);
    }

    // Đóng cURL session
    curl_close($ch);

    // Xử lý kết quả
    if ($response) {
        echo 'Kết quả: ' . $response;
    } else {
        echo 'Không có phản hồi hoặc có lỗi.';
    }
}
function db_search_account($name){
    $keyword = urlencode($name);

    // URL của API C# tìm kiếm
    $api_url = "https://localhost:7268/api/account/get_by-account/{$keyword}";

    // Khởi tạo cURL
    $ch = curl_init();

    // Cấu hình cURL để nhận dữ liệu JSON
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Gửi yêu cầu GET
    $response = curl_exec($ch);

    // Kiểm tra lỗi cURL
    if (curl_errno($ch)) {
        echo "Lỗi cURL: " . curl_error($ch);
    } else {
        // Xử lý kết quả JSON
        $data = json_decode($response, true);
        if ($data) {
            print_r($data);
        } else {
            echo "Không thể phân tích kết quả JSON.";
        }
    }

    // Đóng kết nối cURL
    curl_close($ch);

     // Render phản hồi từ APIx
     return $data;
}