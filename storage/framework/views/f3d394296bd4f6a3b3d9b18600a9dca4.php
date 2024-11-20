<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/signup.css')); ?>">
</head>

<body>
    <div class="container">
        <div class="register-form">
            <h2>Signup</h2>

            <form method="POST" action="<?php echo e(route('signup')); ?>">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <div class="phonenumber">
                        <span>+977</span>
                        <input type="tel" id="phone" name="phone" value="<?php echo e(old('phone')); ?>" required
                            placeholder="Enter your phone number">
                    </div>
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input-group">
                    <label for="gender">Gender</label>
                    <div>
                        <input type="radio" id="male" name="gender" value="male"
                            <?php echo e(old('gender') == 'male' ? 'checked' : ''); ?>>
                        <label for="male">Male</label>

                        <input type="radio" id="female" name="gender" value="female"
                            <?php echo e(old('gender') == 'female' ? 'checked' : ''); ?>>
                        <label for="female">Female</label>

                        <input type="radio" id="other" name="gender" value="other"
                            <?php echo e(old('gender') == 'other' ? 'checked' : ''); ?>>
                        <label for="other">Other</label>
                    </div>
                    <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" required>
                        <a href="#" class="show-password" onclick="togglePassword()">👁️</a>
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="password-container">
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                        <a href="#" class="show-password" onclick="togglePassword()">👁️</a>
                    </div>
                </div>


                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
    <script src="<?php echo e(asset('assets/js/login.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\HP\Desktop\OMFurniture\furniture-project\resources\views/auth/signup.blade.php ENDPATH**/ ?>