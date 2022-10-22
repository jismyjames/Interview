
<?php $__env->startSection('content'); ?>

<div class="card" width="20%">
  <div class="card-header">Add Teachers
    <div style="float: right">
        <a href="<?php echo e(route('viewTeacher')); ?>"><b>Back<b></a>
    </div>
  </div>
    <div class="card-body">
    <div class="modal-body">
    <form action="addTeacher" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" placeholder="Enter name">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-7">
                <button type="submit" name="" style="float:right">Save</button>
            </div>
        </div>
    </form>
    <div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\student-management\resources\views/addTeacher.blade.php ENDPATH**/ ?>