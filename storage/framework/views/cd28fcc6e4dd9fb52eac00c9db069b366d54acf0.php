<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="container">
  <div class="row">
      <h3>Categories</h3>
      <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="<?php echo e(url('/')); ?>/categories/<?php echo e($row->category_row_id); ?>">
        <?php echo e($row->category_name); ?></a>
      </li>


      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>




<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
