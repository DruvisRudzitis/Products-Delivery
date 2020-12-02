<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="<?php echo e(route('products.update', $product)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="title">Product name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product name" value="<?php echo e($product->name); ?>">
            </div>
            <div class="form-group">
                <label for="content">Size:</label>
                <textarea class="form-control" name="size" id="size"><?php echo e($product->size); ?></textarea>
            </div>
            <div class="form-group">
                <label for="content">Weight:</label>
                <textarea class="form-control" name="weight" id="weight"><?php echo e($product->weight); ?></textarea>
            </div>
            <div class="form-group">
                <label for="content">Price:</label>
                <textarea class="form-control" name="price" id="price"><?php echo e($product->price); ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/druvis/PhpstormProjects/laravelUzd1/laravel2/resources/views/products/edit.blade.php ENDPATH**/ ?>