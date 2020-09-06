<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><?php echo e($barang->nama_barang); ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <img src="<?php echo e(url('uploads')); ?>/<?php echo e($barang->gambar); ?>" class="rounded mx-auto d-block" width="100%" alt="">
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nwe/Desktop/laravel-app/laravel_e-commerce_original/resources/views/Order/index.blade.php ENDPATH**/ ?>