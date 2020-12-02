<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="<?php echo e(route('products.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
            </div>
            <div class="form-group">
                <label for="sizet">Size:</label>
                <textarea class="form-control" name="size" id="size"></textarea>
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <textarea class="form-control" name="weight" id="weight"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <textarea class="form-control" name="price" id="price"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/druvis/PhpstormProjects/laravelUzd1/laravel2/resources/views/products/create.blade.php ENDPATH**/ ?>