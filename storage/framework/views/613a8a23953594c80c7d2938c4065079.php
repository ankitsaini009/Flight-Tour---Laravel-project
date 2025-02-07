<?php $__env->startSection('manage_front'); ?>
<div class="container">
    <div class="content-body">
        <div class="container-fluid">
            <h2>Your Profile</h2>
            <br>

            <div class="row">
                <div class="col-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="profile-info d-flex">
                                <div class="profile-photo me-3">
                                    <img src="<?php echo e(asset('images/' . (isset($userdata->image) ? $userdata->image : '1727852246.webp'))); ?>" class="img-fluid rounded-circle" alt="Profile Image" width="100">
                                </div>
                                <div>
                                    <h4 class="text-primary mb-0"><?php echo e(isset($userdata->name) ? $userdata->name : 'User Name'); ?></h4>
                                    <h5 class="text-muted"><?php echo e(isset($userdata->email) ? $userdata->email : 'Email not available'); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo e(route('frontuserstore')); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="user_id" value="<?php echo e(isset($userdata) ? $userdata->id : ''); ?>">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter User Name" value="<?php echo e(isset($userdata) ? $userdata->name : old('name')); ?>" autocomplete="off">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter User Name" value="<?php echo e(isset($userdata) ? $userdata->phone : old('name')); ?>" autocomplete="off">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo e(isset($userdata) ? $userdata->email : old('email')); ?>" autocomplete="off">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Profile Image</label>
                                <?php if(isset($userdata) && $userdata->image): ?>
                                <div class="mb-2">
                                    <img src="<?php echo e(asset('images/' . $userdata->image)); ?>" alt="User Image" class="img-thumbnail" width="100">
                                </div>
                                <?php endif; ?>
                                <input type="file" class="form-control" name="image" autocomplete="off">
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dmprojects/public_html/ankitsaini/flight_tour/resources/views/frontend/profile.blade.php ENDPATH**/ ?>