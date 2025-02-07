<?php $__env->startSection('manage_content'); ?>

<div class="content-body">

    <!-- row -->

    <div class="container-fluid">

        <div class="row">

            <?php if(session('success')): ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <?php echo e(session('success')); ?>


                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>

            <?php endif; ?>



            <?php if($errors->any()): ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                <strong>Please fix the following errors:</strong>

                <ul>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><?php echo e($error); ?></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>

            <?php endif; ?>

            <div class="col-12">

                <h2>Site Settings</h2><br>

                <form action="<?php echo e(route('settings.update')); ?>" method="POST" enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="settings_id" value="<?php echo e((isset($Setting)?$Setting->id:'')); ?>">

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="site_name" class="form-label">Site Name</label>

                            <input type="text" class="form-control" name="site_name" placeholder="Enter Site Name" value="<?php echo e((isset($Setting)?$Setting->site_name:old('site_name'))); ?>" autocomplete="off">

                            <?php if($errors->has('site_name')): ?>

                            <div class="text-danger"><?php echo e($errors->first('site_name')); ?></div>

                            <?php endif; ?>

                        </div>
                        <div class="col-md-6 mb-3">

                            <label for="site_name" class="form-label">Site Address</label>

                            <input type="text" class="form-control" name="site_address" placeholder="Enter Site Name" value="<?php echo e((isset($Setting)?$Setting->site_address:old('site_name'))); ?>" autocomplete="off">

                            <?php if($errors->has('site_address')): ?>

                            <div class="text-danger"><?php echo e($errors->first('site_address')); ?></div>

                            <?php endif; ?>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label for="contact_email" class="form-label">Site Email</label>

                            <input type="email" class="form-control" name="contact_email" placeholder="Enter Site Email" value="<?php echo e((isset($Setting)?$Setting->contact_email:old('contact_email'))); ?>" autocomplete="off">

                            <?php if($errors->has('contact_email')): ?>

                            <div class="text-danger"><?php echo e($errors->first('contact_email')); ?></div>

                            <?php endif; ?>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label for="contect_phone" class="form-label">Site Phone Number</label>

                            <input type="nuber" class="form-control" name="contect_phone" placeholder="Enter Phone Number" value="<?php echo e((isset($Setting)?$Setting->contect_phone:old('contect_phone'))); ?>" autocomplete="off">

                            <?php if($errors->has('contect_phone')): ?>

                            <div class="text-danger"><?php echo e($errors->first('contect_phone')); ?></div>

                            <?php endif; ?>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label for="facebook_url" class="form-label">Facebook URL</label>

                            <input type="url" class="form-control" name="facebook_url" placeholder="Enter Facebook URL" value="<?php echo e((isset($Setting)?$Setting->facebook_url:old('facebook_url'))); ?>" autocomplete="off">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label for="instagram_url" class="form-label">Instagram URL</label>

                            <input type="url" class="form-control" name="instagram_url" placeholder="Enter Instagram URL" value="<?php echo e((isset($Setting)?$Setting->instagram_url:old('instagram_url'))); ?>" autocomplete="off">

                        </div>



                        <div class="col-md-6 mb-3">

                            <label for="twitter_url" class="form-label">Twitter URL</label>

                            <input type="url" class="form-control" name="twitter_url" placeholder="Enter Twitter URL" value="<?php echo e((isset($Setting)?$Setting->twitter_url:old('twitter_url'))); ?>" autocomplete="off">

                        </div>



                        <div class="col-md-6 mb-3">

                            <label for="linkedIn_url" class="form-label">LinkedIn URL</label>

                            <input type="url" class="form-control" name="linkedIn_url" placeholder="Enter LinkedIn URL" value="<?php echo e((isset($Setting)?$Setting->linkedIn_url:old('linkedIn_url'))); ?>" autocomplete="off">

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="image" class="form-label">Site Logo</label>

                            <?php if(isset($Setting) && $Setting->site_logo): ?>

                            <div class="mb-2">

                                <img src="<?php echo e(asset('images/' . $Setting->site_logo)); ?>" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="<?php echo e((isset($Setting)?$Setting->site_logo:old('image'))); ?>" class="form-control" name="site_logo" autocomplete="off">

                            <?php endif; ?>

                            <input type="file" class="form-control" name="site_logo" autocomplete="off">

                            <?php if($errors->has('site_logo')): ?>

                            <div class="text-danger"><?php echo e($errors->first('site_logo')); ?></div>

                            <?php endif; ?>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label for="image" class="form-label">Footer Logo</label>

                            <?php if(isset($Setting) && $Setting->site_footerlogo): ?>

                            <div class="mb-2">

                                <img src="<?php echo e(asset('images/' . $Setting->site_footerlogo)); ?>" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="<?php echo e((isset($Setting)?$Setting->site_footerlogo:old('image'))); ?>" class="form-control" name="site_footerlogo" autocomplete="off">

                            <?php endif; ?>

                            <input type="file" class="form-control" name="site_footerlogo" autocomplete="off">

                            <?php if($errors->has('site_logo')): ?>

                            <div class="text-danger"><?php echo e($errors->first('site_logo')); ?></div>

                            <?php endif; ?>

                        </div>
                        <div class="col-md-6 mb-3">

                            <label for="image" class="form-label">Fav Icon</label>

                            <?php if(isset($Setting) && $Setting->site_favicon): ?>

                            <div class="mb-2">

                                <img src="<?php echo e(asset('images/' . $Setting->site_favicon)); ?>" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="<?php echo e((isset($Setting)?$Setting->site_favicon:old('image'))); ?>" class="form-control" name="site_logo" autocomplete="off">

                            <?php endif; ?>

                            <input type="file" class="form-control" name="site_favicon" autocomplete="off">

                            <?php if($errors->has('site_logo')): ?>

                            <div class="text-danger"><?php echo e($errors->first('site_logo')); ?></div>

                            <?php endif; ?>

                        </div>



                        <div class="col-md-12 mb-3">

                            <label for="site_description" class="form-label">Site Description</label>

                            <textarea name="site_description" placeholder="Enter Description" id="site_description" class="form-control"><?php echo e((isset($Setting)?$Setting->site_description:old('site_description'))); ?></textarea>

                            <?php if($errors->has('site_description')): ?>

                            <div class="text-danger"><?php echo e($errors->first('site_description')); ?></div>

                            <?php endif; ?>

                        </div>

                    </div>



            </div>

            <br><br>

            <div class="text-center">

                <button type="submit" class="btn btn-danger"> Update Settings</button>

                <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-secondary">Back Dashboard</a>

            </div>

            </form>

        </div>

    </div>

</div>

</div>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('site_description');
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dmprojects/public_html/ankitsaini/flight_tour/resources/views/admin/settings/add.blade.php ENDPATH**/ ?>