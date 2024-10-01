<?php
// Start the session
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();

// Định nghĩa khóa bí mật
$secretKey = "mySecretKey"; // Thay đổi khóa này thành một chuỗi bí mật của bạn

$params = [];
if (!empty($_GET['keyword'])) {
    $params['keyword'] = $_GET['keyword'];
}

// Hàm giải mã ID
function decodeUserId($encodedId, $secretKey) {
    $data = json_decode(base64_decode($encodedId), true);
    if (isset($data['id'])) {
        $combinedId = $data['id'];
        return str_replace($secretKey, '', $combinedId);
    }
    return null; // Trả về null nếu không tìm thấy ID
}

// Giải mã ID nếu có trong URL
$_id = NULL;
$user = null; // Khởi tạo biến user là null
if (!empty($_GET['id'])) {
    $_id = decodeUserId($_GET['id'], $secretKey); // Giải mã ID
    if ($_id !== null) {
        $user = $userModel->findUserById($_id); // Cập nhật thông tin user
    }
}

// Xử lý khi người dùng gửi thông tin
if (!empty($_POST['submit'])) {
    $errors = []; // Mảng để lưu trữ các lỗi validate

    // Validate name
    if (empty($_POST['name'])) {
        $errors['name'] = 'Bạn chưa nhập tên';
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
        $errors['name'] = 'Chiều dài từ 5 đến 15 ký tự (lệ: A->Z, a->z, 0->9)';
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors['password'] = 'Bạn chưa nhập mật khẩu';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $_POST['password'])) {
        $errors['password'] = 'Chiều dài từ 5 đến 10 ký tự. Phải có cả (a->z, A->Z, 0->9, ~!@#%^&*())';
    }

    // Nếu không có lỗi, thực hiện cập nhật hoặc thêm user
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
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
        <?php if ($user || $_id === null) { // Kiểm tra xem user có tồn tại hoặc id là null ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user) && !empty($user[0]['name'])) echo htmlspecialchars($user[0]['name']); ?>'>
                    <?php if (!empty($errors['name'])) { ?>
                        <div class="text-danger"><?php echo htmlspecialchars($errors['name']); ?></div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (!empty($errors['password'])) { ?>
                        <div class="text-danger"><?php echo htmlspecialchars($errors['password']); ?></div>
                    <?php } ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
