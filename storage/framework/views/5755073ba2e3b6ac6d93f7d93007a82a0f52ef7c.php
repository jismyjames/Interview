<?php
use App\Models\Teacher;
?>



<?php $__env->startSection('content'); ?>

<div class="card" width="20%">
  <div class="card-header">View Students</div>
  <div class="card-body">
    <div style="float: right">
        <a href="<?php echo e(url('/addStudent')); ?>" class="btn btn-default"><b>Add Students</b></a>
    </div>
    </br></br>
    <?php if($message = Session::get('success')): ?>
      <div class="tpvbtn">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
          </div>
      </div>
    <?php endif; ?>
    </br></br>
    <table class="table  table-bordered " width="100%">
        <thead>
            <tr>
                <th>Id #</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Reporting Teacher</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
            ?>
            <?php if(count($students) != 0): ?>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->age); ?></td>
                    <td><?php echo e($student->gender); ?></td>
                    <td><?php echo e(Teacher::getname($student->reporting_teacher)); ?></td>
                    <td colspan ="2">
                      <a href="<?php echo e(route('editStudent', ['id'=>$student->id])); ?>">Edit | </a>
                      <a href="<?php echo e(route('deleteStudent', ['id'=>$student->id])); ?>" onclick="return confirm('Are you sure, do you want delete?')">Delete</a>
                    </td>
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
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\student-management\resources\views/student.blade.php ENDPATH**/ ?>