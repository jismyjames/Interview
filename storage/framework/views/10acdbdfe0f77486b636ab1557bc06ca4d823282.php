;

<?php $__env->startSection('content'); ?>

<div class="card" width="20%">
  <div class="card-header">View Teachers</div>
  <div class="card-body">
    <div style="float: right">
        <a href="<?php echo e(url('/addTeacher')); ?>" class="btn btn-default"><b>Add Teachers</b></a>
    </div>
    <table class="table  table-bordered " width="100%">
        <thead>
            <tr>
                <th>Id #</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
            ?>
            <?php if(count($teachers) != 0): ?>
            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($teacher->name); ?></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
                <td colspan="5">
                    <div class="tbl-item"><center><?php echo e('No data found!!'); ?></center></div>
                </td>
            </tr>
          <?php endif; ?>
        </tbody>
    </table>
   
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\student-management\resources\views/teacher.blade.php ENDPATH**/ ?>