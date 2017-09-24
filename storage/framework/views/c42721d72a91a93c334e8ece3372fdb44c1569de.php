<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">    
  <div class="row">
      
    <div class="col-sm-4">
      <div class="panel panel-primary">
          <a href="javascript:void(0)">
        <div class="panel-heading"><?php echo e($data['single_product_info']->product_name); ?></div>
        <div class="panel-body"><img data-toggle="modal" data-target="#myModal" src="<?php echo e(asset('/public/images/products/thumbs')); ?>/<?php echo e($data['single_product_info']->product_image); ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        </a>
        <div class="panel-footer"><?php echo e($data['single_product_info']->product_price); ?></div>
        
      </div>
    </div>
      <form action="<?php echo e(url('/')); ?>/addToCart" method="post"><?php echo e(csrf_field()); ?>

          
          <input type="number" name="quantity" value="1"></input>
          <input type="hidden" name="product_row_id" value="<?php echo e($data['single_product_info']->product_row_id); ?>"></input>
          <input type="submit" class="btn btn-info" value="submit"></input>
          
      </form>
      
      
  </div>
    
    <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <img class="close" data-dismiss="modal" src="<?php echo e(asset('/public/images/products/')); ?>/<?php echo e($data['single_product_info']->product_image); ?>" class="img-responsive" style="width:100%" alt="Image">
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    


<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
