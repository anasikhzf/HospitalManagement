<?php
require 'configs/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $role = 'user'; // Default role for new users

    // Basic validation for username and password
    if (empty($username) || empty($password)) {
        $error = "Username dan password tidak boleh kosong.";
    } else {
        // Cek apakah username sudah ada
        $checkQuery = $db->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
        $checkQuery->execute(['username' => $username]);
        $userExists = $checkQuery->fetchColumn();

        if ($userExists) {
            $error = "Username sudah digunakan. Pilih username lain.";
        } else {
            // Masukkan data user baru
            $insertQuery = $db->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
            if ($insertQuery->execute(['username' => $username, 'password' => $hashedPassword, 'role' => $role])) {
                header("Location: login.php"); // Redirect to login page after successful registration
                exit();
            } else {
                $error = "Gagal mendaftar. Coba lagi.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php'; ?>
<body>
    <?php include 'components/header.php'; ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form action="register.php" method="POST" class="w-50 border p-4 rounded shadow">
            <h2 class="text-center mb-4">Register</h2>
            <?php if (!empty($error)): ?>
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

            <button type="submit" class="btn btn-primary w-100">Register</button>
            <p class="mt-3 text-center">Sudah punya akun? <a href="login.php" class="text-primary">Masuk di sini</a></p>
        </form>
    </div>

    <?php include 'components/footer.php'; ?>
</body>
</html>
