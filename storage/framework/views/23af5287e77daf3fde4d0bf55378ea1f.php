

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
                <h2>Manage About</h2><br>
                <form action="<?php echo e(route('manage_about.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="Manage_abouts_id" value="<?php echo e((isset($Manage_about)?$Manage_about->id:'')); ?>">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="mission_statement" class="form-label">Mission Statement</label>
                            <input type="text" class="form-control" name="mission_statement" placeholder="Enter Mission Statement" value="<?php echo e((isset($Manage_about)?$Manage_about->mission_statement:old('mission_statement'))); ?>" autocomplete="off">
                            <?php if($errors->has('mission_statement')): ?>
                            <div class="text-danger"><?php echo e($errors->first('mission_statement')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contact_email" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" name="contact_email" placeholder="Enter Site Email" value="<?php echo e((isset($Manage_about)?$Manage_about->contact_email:old('contact_email'))); ?>" autocomplete="off">
                            <?php if($errors->has('contact_email')): ?>
                            <div class="text-danger"><?php echo e($errors->first('contact_email')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contect_phone" class="form-label">Contac Phone Number</label>
                            <input type="number" class="form-control" name="contect_phone" placeholder="Enter Phone Number" value="<?php echo e((isset($Manage_about)?$Manage_about->contect_phone:old('contect_phone'))); ?>" autocomplete="off">
                            <?php if($errors->has('contect_phone')): ?>
                            <div class="text-danger"><?php echo e($errors->first('contect_phone')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="site_description" class="form-label">Other Details</label>
                            <textarea name="other_details" placeholder="Enter Other Details" id="site_description" class="form-control"><?php echo e((isset($Manage_about)?$Manage_about->other_details:old('other_details'))); ?></textarea>
                        </div>
                    </div>

            </div>
            <br><br>
            <div class="text-center">
                <button type="submit" class="btn btn-danger"> Update About</button>
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
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dmprojects/public_html/ankitsaini/flight_tour/resources/views/admin/manage_about/add.blade.php ENDPATH**/ ?>