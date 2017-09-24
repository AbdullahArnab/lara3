

<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">    
  <div class="row">
      <?php $__currentLoopData = $data['all_products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-4" >
      <div class="panel panel-primary">
          <a href="<?php echo e(url('/')); ?>/product-details/<?php echo e($row->product_row_id); ?>">
        <div class="panel-heading"><?php echo e($row->product_name); ?></div>
        <div class="panel-body"><img src="<?php echo e(asset('/public/images/products/thumbs')); ?>/<?php echo e($row->product_image); ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        </a>
        <div class="panel-footer"><?php echo e($row->product_price); ?></div>
        
      </div>
    </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
      
    


<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


