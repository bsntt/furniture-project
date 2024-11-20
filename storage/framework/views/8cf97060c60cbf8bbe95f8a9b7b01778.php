<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="login-container">
        <div class="login-card">

            <h1 class="logo">OM Furniture</h1>


            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="email" placeholder="Email or Phone number" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password"  id="password"    placeholder="Password" required>
                    <a href="#" class="show-password" onclick="togglePassword()">👁️</a>
                </div>
                <a href="#" class="forgot-password">Forget Your Password?</a>
                <button type="submit" class="login-button">Login</button>
                <p>Or Login with</p>
                <div class="social-login">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>


                <p>Don’t have an account? <a href="<?php echo e(route('signup')); ?>" class="signup-link">Sign up</a></p>
            </form>
        </div>
    </div>
<script src="<?php echo e(asset('assets/js/login.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\HP\Desktop\OMFurniture\furniture-project\resources\views/auth/login.blade.php ENDPATH**/ ?>