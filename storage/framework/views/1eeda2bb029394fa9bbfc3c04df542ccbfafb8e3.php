<?php $__env->startSection('content'); ?>
<div class="container">
    <center><b>Dummy Data E-Commerce</b></center>
    <div class="row justify-content-center">
        
        
            
                

                
                    
                    <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col3">
                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo e(url('uploads')); ?>/<?php echo e($barang->gambar); ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($barang->nama_barang); ?></h5>
                                <p class="card-text">
                                    <strong>Harga : </strong>Rp.<?php echo e($barang->harga); ?></p>
                                    <strong>Stok : </strong><?php echo e($barang->stok); ?></p>
                                <hr>
                            <strong>Keterangan: </strong><br>
                            <?php echo e($barang->Keterangan); ?>

                            <a href="<?php echo e(url('order')); ?>/<?php echo e($barang->id); ?>" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Order</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                
            
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nwe/Desktop/laravel-app/laravel_e-commerce_original/resources/views/home.blade.php ENDPATH**/ ?>