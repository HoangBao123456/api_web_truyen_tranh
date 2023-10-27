<?php
function db_create_category($name,$des, $url)
{
    // URL của API hoặc trang web bạn muốn gửi yêu cầu POST đến
    $url = "https://localhost:7268/{$url}";

    // Dữ liệu bạn muốn gửi trong yêu cầu POST, ví dụ: một mảng dữ liệu
    $data = array(
        'id' => '',
        'name_categories' => $name,
        'descr' => $des
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
function db_update_category($id,$name, $des, $url)
{
    // URL của API hoặc trang web bạn muốn gửi yêu cầu POST đến
    $url = "https://localhost:7268/{$url}";

    // Dữ liệu bạn muốn gửi trong yêu cầu POST, ví dụ: một mảng dữ liệu
    $data = array(
        'id' => $id,
        'name_categories' => $name,
        'descr' => $des
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