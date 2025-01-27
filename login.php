<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'configs/database.php';
    require 'models/User.php';

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $userModel = new User($db);
    $user = $userModel->authenticate($username, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username']; // Tambahkan username ke session
        $_SESSION['role'] = $user['role'];

        if ($user['role'] === 'admin') {
            header("Location: views/admin/dashboard.php");
        } else {
            header("Location: views/user/dashboard.php");
        }
        exit();
    } else {
        $error = "Username atau password salah.";
    }
}

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: views/admin/dashboard.php");
    } else {
        header("Location: views/user/dashboard.php");
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php'; ?>
<body>
    <?php include 'components/header.php'; ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form action="login.php" method="POST" class="w-50 border p-4 rounded shadow">
            <h2 class="text-center mb-4">Login</h2>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
            <p class="mt-3 text-center">Belum punya akun? <a href="register.php" class="text-primary">Daftar di sini</a></p>
        </form>
    </div>

    <?php include 'components/footer.php'; ?>
</body>
</html>