<?php
function db_render($url)
{
    // Tạo một yêu cầu đến URL của API C#
    $ch = curl_init();

    // Thiết lập các tùy chọn cho yêu cầu POST
    curl_setopt($ch, CURLOPT_URL, "https://localhost:7268/{$url}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Bỏ qua kiểm tra chứng chỉ SSL tự ký
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Thực thi yêu cầu và nhận phản hồi từ API C#
    $response = curl_exec($ch);

    // Kiểm tra nếu có lỗi trong quá trình gửi yêu cầu
    if (curl_errno($ch)) {
        echo 'Lỗi: ' . curl_error($ch);
    }

    // Đóng kết nối CURL
    curl_close($ch);

    // Decode phản hồi từ API C#
    $result = json_decode($response, true);

    // Render phản hồi từ APIx
    return $result;
};
