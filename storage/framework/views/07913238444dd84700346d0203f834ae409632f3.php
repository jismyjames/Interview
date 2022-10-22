;

<?php $__env->startSection('content'); ?>

<div class="card" width="20%">
  <div class="card-header">Add Students</div>
  <div class="card-body">
    <div style="float: right">
        <a href="<?php echo e(url('/studentView')); ?>" class="btn btn-default"><b>View students</b></a>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\student-management\resources\views/welcome.blade.php ENDPATH**/ ?>