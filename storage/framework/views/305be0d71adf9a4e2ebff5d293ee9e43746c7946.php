<?php $__env->startSection('title-block'); ?>
    Машины <?php echo e($user->family); ?>

    <?php echo e(isset($message) ? $message : Null); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Машины <?php echo e($user->family); ?></h1>

    <?php $__currentLoopData = $avtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $avto=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <ul class="list-group">

                <li class="list-group-item">
                             <?php echo e($value->marka); ?> <?php echo e($value->model); ?> <?php echo e($value->color); ?> <?php echo e($value->gos_num); ?>




                    <form method="POST" action="<?php echo e(route('avtos.destroy' ,  $value->id )); ?>">
                        <?php echo csrf_field(); ?>
                        <a href="<?php echo e(route('ss' , $value->id)); ?>" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>


                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn  btn-secondary fw-bold border-white bg-dark">Удалить</button>

                    </form>
                </li>
            </ul>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('avtos.create',$user)); ?>" class="btn  btn-secondary fw-bold border-white bg-dark m-5   ">Добавить автомобиль</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yaled.pattern', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Project\example-app\resources\views/my_avto.blade.php ENDPATH**/ ?>