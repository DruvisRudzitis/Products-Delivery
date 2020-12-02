<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary btn-sm">
            Create new article
        </a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Size</th>
                <th scope="col">Weight</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($product->id); ?></th>
                    <td>
                        <a href="<?php echo e(route('products.show', $product)); ?>">
                            <?php echo e($product->name); ?>

                        </a>
                    </td>
                    <td><?php echo e($product->size); ?></td>
                    <td><?php echo e(round($product->weight / 100, 2)); ?></td>
                    <td><?php echo e('$' . round($product->price / 100, 2)); ?></td>
                    <td>
                        <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form method="post" action="<?php echo e(route('products.destroy', $product)); ?>" style="display: inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/druvis/PhpstormProjects/laravelUzd1/laravel2/resources/views/products/index.blade.php ENDPATH**/ ?>