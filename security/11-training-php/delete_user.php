<?php
// Định nghĩa khóa bí mật
$secretKey = "mySecretKey"; // Thay đổi khóa này thành một chuỗi bí mật của bạn

// Hàm giải mã ID
function decodeUserId($encodedId, $secretKey) {
    $data = json_decode(base64_decode($encodedId), true);
    $combinedId = $data['id'];
    return str_replace($secretKey, '', $combinedId);
}

require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Để thêm người dùng mới
$id = NULL;

if (!empty($_GET['id'])) {
    // Giải mã ID từ URL
    $id = decodeUserId($_GET['id'], $secretKey);
    $userModel->deleteUserById($id); // Xóa người dùng hiện có
}

header('location: list_users.php');
exit();
?>
