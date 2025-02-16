<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jobick : Job Admin Bootstrap 5 Template" />
    <meta property="og:title" content="Jobick : Job Admin Bootstrap 5 Template" />
    <meta property="og:description" content="Jobick : Job Admin Bootstrap 5 Template" />
    <meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Protocloud Admin</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('admin_assets/images/favicon.png')); ?>" />
    <link href="<?php echo e(asset('admin_assets/css/style.css')); ?>" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html">
                                            <img src="<?php echo e(asset('admin_assets/images/logo-full.png')); ?>" alt="Logo">
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>

                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>

                                        <!-- Email Address -->
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input id="email" class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus autocomplete="username">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- Password -->
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                                    <label class="form-check-label" for="remember_me">Remember my preference</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required vendors -->
    <script src="<?php echo e(asset('admin_assets/vendor/global/global.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/js/dlabnav-init.js')); ?>"></script>

</body>

</html><?php /**PATH /home/dmprojects/public_html/ankitsaini/flight_tour/resources/views/auth/login.blade.php ENDPATH**/ ?>