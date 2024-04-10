<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Thêm các tài nguyên CSS và JavaScript của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Ví dụ: -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Thanh điều hướng -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="index.php?action=login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?action=register">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?action=index">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?action=getAllUsers">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?action=logout">logout</a></li>
            <!-- Thêm các mục điều hướng khác ở đây -->
        </ul>
    </nav>
</header>

<main role="main" class="container">
    <!-- Nội dung chính của trang -->
    <?php echo $content; ?>
</main>

<footer class="footer mt-auto py-3">
    <!-- Chân trang -->
    <div class="container">
        <p class="text-muted">&copy; <?php echo date("Y"); ?> Tên Công ty. Tất cả quyền được bảo lưu.</p>
    </div>
</footer>

<!-- Thêm các tài nguyên JavaScript của Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Ví dụ: -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</body>
</html>
