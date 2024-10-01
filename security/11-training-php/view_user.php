<?php
// Bắt đầu phiên làm việc
session_start();

// Nhúng mô hình người dùng
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Định nghĩa khóa bí mật
$secretKey = "mySecretKey"; // Thay đổi khóa này thành một chuỗi bí mật của bạn

// Hàm giải mã ID
function decodeUserId($encodedId, $secretKey) {
    $data = json_decode(base64_decode($encodedId), true);
    $combinedId = $data['id'];
    return str_replace($secretKey, '', $combinedId);
}

// Giải mã ID nếu có trong URL
$userId = null;
if (!empty($_GET['id'])) {
    $userId = decodeUserId($_GET['id'], $secretKey); // Giải mã ID
    $user = $userModel->findUserById($userId); // Tìm người dùng
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
<?php include 'views/header.php'?>
<div class="container">

    <?php if ($user || empty($id)) { ?>
        <div class="alert alert-warning" role="alert">
            User profile
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <span><?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?></span>
            </div>
            <div class="form-group">
                <label for="password">Fullname</label>
                <span><?php if (!empty($user[0]['name'])) echo $user[0]['fullname'] ?></span>
            </div>
            <div class="form-group">
                <label for="password">Email</label>
                <span><?php if (!empty($user[0]['name'])) echo $user[0]['email'] ?></span>
            </div>
        </form>
    <?php } else { ?>
        <div class="alert alert-success" role="alert">
            User not found!
        </div>
    <?php } ?>
</div>
</body>
</html>